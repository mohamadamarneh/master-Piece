<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\coaches;
class coachesController extends Controller
{


    function index()
    {

        $data = array(
            'list' => coaches::get()
        );
        return view(('manage.coaches'), $data);

    }


    function add(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50|min:2',
            'email' => 'required|email|unique:coaches,email',
            'password' => 'required|min:5'
            
        ]);

        $query = coaches::insert([

            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'phone' => $request->input('phone')

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

        $row = coaches::where('id', $id)
            ->first();

        $data = [
            'info' => $row
        ];
        return view('manage.edit-coache', $data);
    }
    function update(Request $request)
    {

        $request->validate([
            'name' => 'required|max:50|min:2',
            'email' => 'required|email',
            'password' => 'required|min:5'
            
            

        ]);

        $updating = coaches::where('id', $request->input('cid'))
            ->update(
                [
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'password' => $request->input('password'),
                    'phone' => $request->input('phone'),

                ]
            );
        if ($updating) {
            return redirect('dash-coaches')->with('succ', 'updating success !');
        }else{
            echo 'something wrong happend ' ;
        }
    }
    function delete(Request $request)
    {
        $delete = coaches::where('id', $request->pid)
            ->delete();
        if ($delete) {
            return redirect('dash-coaches')->with('secdel', 'item deleted successfully');
        }
    }

}
