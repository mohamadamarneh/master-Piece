<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use App\Models\categorise;

class mainController extends Controller
{
    
    function index(){
        $data = array(
            'list' => products::get(),
            'cat' => categorise::get(),
            'treelist' => products::latest()->take(5)->get()
        );
        return view(('index'), $data);

    }

    function single($title){

        $row= products::where('title',$title)->first();
        $data=[
            'info' => $row
        ];
        return view('single',$data);
    }
}
