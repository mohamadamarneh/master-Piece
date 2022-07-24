<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use App\Models\categorise;
use Dotenv\Validator;
use GrahamCampbell\ResultType\Success;
use App\Models\costumers;
use App\Models\comments;

class mainController extends Controller
{
    
    function index(){
        $data = array(
            'list' => products::get(),
            'cat' => categorise::get(),
            'treelist' => products::latest()->take(5)->get()
        );
        return view(('index'), $data);

    }

    function single($title){

        $row= products::where('title',$title)->first();
        $comments= comments::where('product_id','=',$row->id)->get();
        $data=[
            'info' => $row,
            'singlecomments'=>$comments
        ];
        return view('single',$data);
    }



    function logincheck(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        $checkuser=costumers::where('email','=',$request->input('email'))->first();

        if(!$checkuser){
            return back()->with('fail','email is not regester yet');
        }else{
            if($checkuser->password == $request->password){
                 $request->session()->put('usermail',$checkuser->email);
                 $request->session()->put('username',$checkuser->name);
                 return redirect('/');
            }else{
                return back()->with('fail','email or password are wrong!');
            }
        }
    }


    function login(){
        return view('login');
    }

    function registerpage(){
        return view('register');
    }


    function logout(){
        if(session()->has('username')){
            
            session()->pull('username');
            session()->pull('usermail');
            return back();
        }
        return back();
    }



    function register(Request $request){
        $request->validate([
            'name' => 'required |max:100|min:3',
            'email' => 'required|unique:costumers,email|email|max:200|min:5',
            'password' => 'required |min:3'
        ]);

        $add=costumers::insert([

            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=>$request->input('password')

            
        ]);
        if($add){
            return view('index');

        }else {
            return back()->with('fail','something wrong! please try later');
        }


        
        
    }
}
