<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\books;
use App\Models\products;
use App\Models\owner;
use App\Models\coaches;

class AdminController extends Controller
{
    //


    function indextrainer(Request $request)
    {
        $a = coaches::where('email', '=', $request->session()->get('coachmail'))->first();
        $n = products::where('categorises_id', '=', $a->categorises_id)->first();
        $arr=array();
        
        // foreach ($n as $value) {

        //     $v = books::where('product_id',$value->id)->get();

        //     array_push($arr,$v);
            
        // }

        $v = books::where('product_id',$n->id)->get();

        $v = books::where('product_id',$n->id)
        ->join('products', 'books.product_id', '=', 'products.id')
        ->get([ 'products.*', 'books.*']);




        // $r= products::where('categorises_id',$a->categorises_id)->get();


        // $join = books::join('costumers', 'books.costumer_id', '=', 'costumers.id')
        //     ->join('products', 'books.product_id', '=', 'products.id')
        //     ->get(['costumers.*', 'products.*', 'books.*']);




        $data = array(
            'list' =>$v,
            'info' => $a
        );
        // return    $v ;
        return view(('manage.trainerindex'), $data);
    }



    function indexowner(Request $request)
    {
        $a = owner::where('email', '=', $request->session()->get('ownermail'))->first();
        $n = products::where('id', '=', $a->product_id)->first();

        $data = array(
            'list' => books::where('product_id', $a->product_id)->orderBy('id', 'DESC')->get(),
            'info' => $n
        );
    
        return view(('manage.onwrindex'), $data);
    }












    function login()
    {
        return view('manage.login');
    }







    function logout()
    {
        if (session()->has('adminname') || session()->has('ownername') || session()->has('coachname')) {

            session()->flush();
            session()->pull('adminmail');
            session()->pull('adminname');
            return redirect('dash-login');
        }
        return redirect('dash-login');
    }


    function logincheck(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $checkadmin = admin::where('email', '=', $request->input('email'))->first();
        $checkowner = owner::where('email', '=', $request->input('email'))->first();
        $checkch = coaches::where('email', '=', $request->input('email'))->first();


        if ($checkowner && $checkowner->password == $request->password) {
            $request->session()->put('ownermail', $checkowner->email);
            $request->session()->put('ownername', $checkowner->name);
            return redirect('/owner');
        }

        if ($checkadmin && $checkadmin->password == $request->password) {
            $request->session()->put('adminmail', $checkadmin->email);
            $request->session()->put('adminname', $checkadmin->name);
            return redirect('/dash');
        }


        if ($checkch && $checkch->password == $request->password) {
            $request->session()->put('coachmail', $checkch->email);
            $request->session()->put('coachname', $checkch->name);
            return redirect('/trainer');
        } else {
            return back()->with('fail', 'email or password are wrong!');
        }
    }


    ///// admin manage functions 
    function index()
    {

        $data = array(
            'list' => admin::get()
        );
        return view(('manage.admins'), $data);
    }


    function add(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50|min:2',
            'email' => 'required|email|unique:admins,email',
            'password' => 'required|min:5'

        ]);

        $query = admin::insert([

            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            // 'phone' => $request->input('phone')

        ]);
        if ($query) {
            # code...
            return back()->with('success', 'data added successfully');
        } else {
            return back()->with('fail', 'data not save');
        }
    }


    function edit($id)
    {

        $row = admin::where('id', $id)
            ->first();

        $data = [
            'info' => $row
        ];
        return view('manage.edit-admin', $data);
    }
    function update(Request $request)
    {

        $request->validate([
            'name' => 'required|max:50|min:2',
            'email' => 'required|email',
            'password' => 'required|min:5'


        ]);

        $updating = admin::where('id', $request->input('cid'))
            ->update(
                [
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'password' => $request->input('password'),

                ]
            );
        if ($updating) {
            return redirect('dash-admins')->with('succ', 'updating success !');
        } else {
            echo 'something wrong happend ';
        }
    }
    function delete(Request $request)
    {
        $delete = admin::where('id', $request->pid)
            ->delete();
        if ($delete) {
            return redirect('dash-admins')->with('secdel', 'item deleted successfully');
        }
    }
}
