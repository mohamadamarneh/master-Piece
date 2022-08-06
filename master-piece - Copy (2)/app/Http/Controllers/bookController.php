<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\books;
use Illuminate\Support\Facades\DB;
class bookController extends Controller
{
    //


    function index()
    {

        //we want join here *******
        $data = array(
            'list' => books::get()
        );
        return view(('manage.books'), $data);
    }


    function add(Request $request)
    {
        $request->validate([
            'costumer_id' => 'required',
            'product_id' => 'required',
            'date' => 'required',
            'time' => 'required',


        ]);
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
            # code...
            return back()->with('success', 'data added successfully');
        } else {
            return back()->with('fail', 'data not save');
        }
    }


    function edit($id)
    {

        $row = DB::table('books')->where('id', $id)
            ->first();

        $data = [
            'info' => $row
        ];
        return view('manage.edit-book', $data);
    }
    function update(Request $request)
    {

        $request->validate([

            'costumer_id' => 'required',
            'product_id' => 'required',
            'date' => 'required',
            'time' => 'required',


        ]);


        $trainer = $request->input('trainer_A') ? 1 : 0;
        $waers = $request->input('wears_A') ? 1 : 0;

        $updating = books::where('id', $request->input('cid'))

            ->update(
                [
                    'costumer_id' => $request->input('costumer_id'),
                    'product_id' => $request->input('product_id'),
                    'date' => $request->input('date'),
                    'time' => $request->input('time'),
                    'trainer_A' => $trainer,
                    'wears_A' => $waers

                ]
            );
        if ($updating) {
            return redirect('dash-books')->with('succ', 'updating success !');
        } else {
            echo 'something wrong happend ';
        }
    }
    function delete(Request $request)
    {
        $delete = books::where('id', $request->pid)
            ->delete();
        if ($delete) {
            return redirect('dash-books')->with('secdel', 'item deleted successfully');
        }
    }
}
