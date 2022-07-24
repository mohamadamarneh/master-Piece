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
}
