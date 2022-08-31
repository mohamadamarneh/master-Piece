<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use App\Models\categorise;
use Dotenv\Validator;
use GrahamCampbell\ResultType\Success;
use App\Models\costumers;
use App\Models\comments;
use App\Models\books;
use Illuminate\Support\Facades\DB;

class mainController extends Controller
{

    function index()
    {
        $data = array(
            'list' => products::get(),
            'cat' => categorise::get(),
            'treelist' => products::latest()->take(3)->get()
        );
        return view(('index'), $data);
    }

    function addbook(Request $request)
    {


        $trainer = $request->input('trainer_A') ? 1 : 0;
        $waers = $request->input('wears_A') ? 1 : 0;

        $query = books::insert([

            'costumer_id' => $request->input('costumer_id'),
            'product_id' => $request->input('product_id'),
            'date' => $request->input('date'),
            'time' => $request->input('time'),
            'trainer_A' => $trainer,
            'wears_A' => $waers


        ]);
        if ($query) {
            return back()->with('success', 'data added successfully');
        } else {
            return back()->with('fail', 'data not save');
        }
    }

    function shop()
    {
        $data = array(
            'list' => products::get(),
            'cat' => categorise::get(),
            'treelist' => products::latest()->take(5)->get()
        );
        return view(('stadiums'), $data);
    }




    function account(Request $request)
    {


        $join = books::join('costumers', 'books.costumer_id', '=', 'costumers.id')
            ->join('products', 'books.product_id', '=', 'products.id')
            ->get(['costumers.*', 'products.*', 'books.*']);


        $row = DB::table('costumers')->where('id', $request->session()->get('userid'))->first();

        $data = [
            'info' => $row,
            'join' => $join
        ];
        // return  $join;
        return view('profile', $data);
    }

    function editprofile(Request $request)
    {
        $row = DB::table('costumers')->where('id', $request->session()->get('userid'))->first();
        $data = [
            'info' => $row,
        ];

        return view('edit', $data);
    }


    function editprofileres(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50|min:2',
            'email' => 'required|email',
            'password' => 'required|min:5'
            

        ]);

        $updating = costumers::where('id', $request->input('cid'))
            ->update(
                [
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'password' => $request->input('password'),
                    'phone' => $request->input('phone')

                ]
            );
        if ($updating) {
            return redirect('/account')->with('succ', 'updating success !') ;
        }else{
            return 'among';
        }
    }





    function single($title)
    {

        $row = products::where('title', $title)->first();
        $rel = products::where('categorises_id', $row->categorises_id)->where('id','!=',$row->id)->get();
        $comments = comments::where('product_id', '=', $row->id)->get();
        // $books=books::where('product_id','=',$row->id)->groupBy('date')->get();
        $books=books::where('product_id','=',$row->id)->get();
        $data = [
            'books'=>$books ,
            'info' => $row,
            'singlecomments' => $comments,
            'rel'=> $rel
        ];
        // return $books ;
        return view('single', $data);
    }




    function bookpage(Request $request)
    {

        $row = products::where('id', $request->input('id'))->first();
        $data = [
            'req' => $request,
            'info' => $row,
        ];
        return view('book', $data);
    }









    public function logincheckuser(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $checkuser = DB::table('costumers')->where('email', '=', $request->input('email'))->first();

        if (!$checkuser) {
            return back()->with('fail', 'email is not regester yet');
        } else {
            if ($checkuser->password == $request->password) {
                $request->session()->put('userid', $checkuser->id);
                $request->session()->put('usermail', $checkuser->email);
                $request->session()->put('username', $checkuser->name);
                return redirect('/');
            } else {
                return back()->with('fail', 'email or password are wrong!');
            }
        }
    }


    function login()
    {
        return view('login');
    }

    function registerpage()
    {
        return view('register');
    }


    function cats($id){
        $Categories = Products::where('categorises_id',$id)->get();


        $data = [
            'list' => $Categories,
        ];
        return view('categury', $data);
        // return $Categories ;


    }
    function logout()
    {
        if (session()->has('username')) {

            session()->pull('username');
            session()->pull('usermail');
            return redirect('/');
        }
    }



    function register(Request $request)
    {
        $request->validate([
            'name' => 'required |max:100|min:3',
            'email' => 'required|unique:costumers,email|email|max:200|min:5',
            'password' => 'required |min:3'
        ]);

        $add = costumers::insert([

            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password')


        ]);

        if ($add) {
            $checkuser = DB::table('costumers')->where('email', '=', $request->input('email'))->first();
            $request->session()->put('userid', $checkuser->id);
            $request->session()->put('usermail', $request->input('name'));
            $request->session()->put('username', $request->input('email'));
            return  redirect('/');
        } else {
            return back()->with('fail', 'something wrong! please try later');
        }
    }




    function addcomment(Request $request)
    {
        $add = comments::insert([

            'username' => $request->input('username'),
            'product_id' => $request->input('product_id'),
            'comment' => $request->input('comment')


        ]);


        return back();
    }
}
