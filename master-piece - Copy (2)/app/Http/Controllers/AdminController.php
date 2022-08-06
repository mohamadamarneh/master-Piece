<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;

class AdminController extends Controller
{
    //

    function login(){
        return view('manage.login');

    }

    function logout(){
        if(session()->has('adminname')){
            
            session()->pull('adminmail');
            session()->pull('adminname');
            return redirect('dash-login');
        }
        return redirect('dash-login');
    }


    function logincheck(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        $checkuser=admin::where('email','=',$request->input('email'))->first();

        if(!$checkuser){
            return back()->with('fail','email is not regester yet');
        }else{
            if($checkuser->password == $request->password){
                 $request->session()->put('adminmail',$checkuser->email);
                 $request->session()->put('adminname',$checkuser->name);
                 return redirect('/dash');
            }else{
                return back()->with('fail','email or password are wrong!');
            }
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
        }else{
            echo 'something wrong happend ' ;
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
