<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\owner;
class OwnerController extends Controller
{
    //
    function index()
    {

        $data = array(
            'list' => owner::get()
        );
        return view(('manage.owners'), $data);

    }


    function add(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50|min:2',
            'email' => 'required|email|unique:coaches,email',
            'password' => 'required|min:5'
            
        ]);

        $query = owner::insert([

            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'product_id' => $request->input('product_id')

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

        $row = owner::where('id', $id)
            ->first();

        $data = [
            'info' => $row
        ];
        return view('manage.edit-owner', $data);
    }
    function update(Request $request)
    {

        $request->validate([
            'name' => 'required|max:50|min:2',
            'email' => 'required|email',
            'password' => 'required|min:5'
            
            

        ]);

        $updating = owner::where('id', $request->input('cid'))
            ->update(
                [
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'password' => $request->input('password'),

                ]
            );
        if ($updating) {
            return redirect('dash-owners')->with('succ', 'updating success !');
        }else{
            echo 'something wrong happend ' ;
        }
    }
    function delete(Request $request)
    {
        $delete = owner::where('id', $request->pid)
            ->delete();
        if ($delete) {
            return redirect('dash-owners')->with('secdel', 'item deleted successfully');
        }
    }

}
