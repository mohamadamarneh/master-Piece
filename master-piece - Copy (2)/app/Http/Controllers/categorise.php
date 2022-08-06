<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class categorise extends Controller
{
    function index()
    {

        $data = array(
            'list' => DB::table('categorises')->get()
        );
        return view(('manage.categuries'), $data);

    }


    function add(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $query = DB::table('categorises')->insert([

            'name' => $request->input('name')

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

        $row = DB::table('categorises')
            ->where('id', $id)
            ->first();

        $data = [
            'info' => $row
        ];
        return view('manage.edit-categorise', $data);
    }
    function update(Request $request)
    {

        $request->validate([
            'name' => 'required'

        ]);

        $updating = DB::table('categorises')
            ->where('id', $request->input('cid'))
            ->update(
                [
                    'name' => $request->input('name'),

                ]
            );
        if ($updating) {
            return redirect('dash-categorise')->with('succ', 'updating success !');
        }
    }
    function delete(Request $request)
    {
        $delete = DB::table('categorises')
            ->where('id', $request->pid)
            ->delete();
        if ($delete) {
            return redirect('dash-categorise')->with('secdel', 'item deleted successfully');
        }
    }


    
}
