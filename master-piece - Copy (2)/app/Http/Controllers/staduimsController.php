<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use App\Models\categorise;


class staduimsController extends Controller
{
    function index()
    {

        $data = array(
            'list' => products::get(),
            'cat' => categorise::get()
        );
        return view(('manage.stadiums'), $data);
    }


    function add(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'description' => 'required',
            'picture' => 'max:5048',
            'picture_two' => 'max:5048',
            'picture_three' => 'max:5048',
            'picture_four' => 'max:5048',
            'picture_five' => 'max:5048',
            'categorises_id' => 'required',
            'address' => 'required'
        ]);

        // making photos not exist null 
        if ($request->picture) {

            $newImageName = time() . '-' . $request->title . '1.' .
                $request->picture->extension();

            $request->picture->move(public_path('imagesadd'), $newImageName);
        } else {
            $newImageName = null;
        }
        if ($request->picture_two) {

            $newImageName2 = time() . '-' . $request->title . '2.' .
                $request->picture_two->extension();

            $request->picture_two->move(public_path('imagesadd'), $newImageName2);
        } else {
            $newImageName2 = null;
        }
        if ($request->picture_three) {

            $newImageName3 = time() . '-' . $request->title . '3.' .
                $request->picture_three->extension();

            $request->picture_three->move(public_path('imagesadd'), $newImageName3);
        } else {
            $newImageName3 = null;
        }
        if ($request->picture_four) {

            $newImageName4 = time() . '-' . $request->title . '4.' .
                $request->picture_four->extension();

            $request->picture_four->move(public_path('imagesadd'), $newImageName4);
        } else {
            $newImageName4 = null;
        }
        if ($request->picture_five) {

            $newImageName5 = time() . '-' . $request->title . '5.' .
                $request->picture_five->extension();

            $request->picture_five->move(public_path('imagesadd'), $newImageName5);
        } else {
            $newImageName5 = null;
        }
        // end   making photos not exist null


        $query = products::insert([

            'title' => $request->input('title'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
            'picture' => $newImageName,
            'picture_two' => $newImageName2,
            'picture_three' => $newImageName3,
            'picture_four' => $newImageName4,
            'picture_five' => $newImageName5,
            'categorises_id' => $request->input('categorises_id'),
            'address' => $request->input('address')

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

        $row = products::where('id', $id)->first();

        $data = [
            'info' => $row
        ];
        return view('manage.edit-stadiums', $data);
    }
    function update(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'description' => 'required',
            'picture' => 'max:5048',
            'picture_two' => 'max:5048',
            'picture_three' => 'max:5048',
            'picture_four' => 'max:5048',
            'picture_five' => 'max:5048',
            'categorises_id' => 'required',
            'address' => 'required'

        ]);


        $row = products::where('id', $request->input('cid'))->first();



        // making photos not exist null 

        if ($request->picture && $row->picture) {

            $newImageName = time() . '-' . $request->title . '1.' .
                $request->picture->extension();

            $request->picture->move(public_path('imagesadd'), $newImageName);
        } else {
            $newImageName = $row->picture;
        }
        if ($request->picture_two && $row->picture_two) {

            $newImageName2 = time() . '-' . $request->title . '2.' .
                $request->picture_two->extension();

            $request->picture_two->move(public_path('imagesadd'), $newImageName2);
        } else {
            $newImageName2 = $row->picture_two;
        }
        if ($request->picture_three && $row->picture_three) {

            $newImageName3 = time() . '-' . $request->title . '3.' .
                $request->picture_three->extension();

            $request->picture_three->move(public_path('imagesadd'), $newImageName3);
        } else {
            $newImageName3 = $row->picture_three;
        }
        if ($request->picture_four && $row->picture_four) {

            $newImageName4 = time() . '-' . $request->title . '4.' .
                $request->picture_four->extension();

            $request->picture_four->move(public_path('imagesadd'), $newImageName4);
        } else {
            $newImageName4 = $row->picture_four;
        }
        if ($request->picture_five && $row->picture_five) {

            $newImageName5 = time() . '-' . $request->title . '5.' .
                $request->picture_five->extension();

            $request->picture_five->move(public_path('imagesadd'), $newImageName5);
        } else {
            $newImageName5 = $row->picture_five;
        }

        // end   making photos not exist null



        $updating = products::where('id', $request->input('cid'))
            ->update(
                [

                    'title' => $request->input('title'),
                    'price' => $request->input('price'),
                    'description' => $request->input('description'),

                    'picture' => $newImageName,
                    'picture_two' => $newImageName2,
                    'picture_three' => $newImageName3,
                    'picture_four' => $newImageName4,
                    'picture_five' => $newImageName5,

                    'categorises_id' => $request->input('categorises_id'),
                    'address' => $request->input('address')

                ]
            );
        if ($updating) {
            return redirect('dash-Stadiums')->with('succ', 'updating success !');
        } else {
            return back()->with('fail', 'updating id failed ');
        }
    }




    function delete(Request $request)
    {

        $delete = products::where('id', $request->pid)
            ->delete();

        if ($delete) {
            return redirect('dash-Stadiums')->with('secdel', 'item deleted successfully');
        }
    }
}
