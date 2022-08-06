<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\costumers;

class costumerController extends Controller
{
    //

    function index()
    {

        $data = array(
            'list' => costumers::get()
        );
        return view(('manage.costumers'), $data);

    }


    function add(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50|min:2',
            'email' => 'required|email',
            'password' => 'required|min:5'
            
        ]);

        $query = costumers::insert([

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

        $row = costumers::where('id', $id)
            ->first();

        $data = [
            'info' => $row
        ];
        return view('manage.edit-coustumer', $data);
    }
    function update(Request $request)
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
            return redirect('dash-coustumers')->with('succ', 'updating success !');
        }
    }
    function delete(Request $request)
    {
        $delete = costumers::where('id', $request->pid)
            ->delete();
        if ($delete) {
            return redirect('dash-coustumers')->with('secdel', 'item deleted successfully');
        }
    }

}
