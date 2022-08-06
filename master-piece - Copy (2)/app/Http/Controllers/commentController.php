<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comments;
use Illuminate\Support\Facades\DB;

class commentController extends Controller
{
    //


    function index()
    {

        $data = array(
            'list' => DB::table('comments')->get()
        );
        return view(('manage.comments'), $data);

    }


    function add(Request $request)
    {
        $request->validate([
            'username' => 'required||max:100',
            'comment' => 'required|max:2000',
            'product_id' => 'required|max:100'
        ]);

        $query = DB::table('comments')->insert([

            'username' => $request->input('username'),
            'comment' => $request->input('comment'),
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

        $row = DB::table('comments')
            ->where('id', $id)
            ->first();

        $data = [
            'info' => $row
        ];
        return view('manage.edit-comment', $data);
    }
    function update(Request $request)
    {

        $request->validate([
            'name' => 'required'

        ]);

        $updating = DB::table('comments')
            ->where('id', $request->input('cid'))
            ->update(
                [
                    'name' => $request->input('name'),

                ]
            );
        if ($updating) {
            return redirect('dash-comments')->with('succ', 'updating success !');
        }
    }

    function delete(Request $request)
    {
        $delete = DB::table('comments')
            ->where('id', $request->pid)
            ->delete();
        if ($delete) {
            return redirect('dash-comments')->with('secdel', 'item deleted successfully');
        }
    }

}
