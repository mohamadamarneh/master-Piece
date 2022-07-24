<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categorise;
use App\Http\Controllers\staduimsController;
use App\Http\Controllers\mainController;
use App\Http\Middleware\Authcheck;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/',[mainController::class,'index']);

Route::get('/single/{title}',[mainController::class,'single']);



Route::post('logincheck',[mainController::class,'logincheck']);
Route::post('add-costumer',[mainController::class,'register'])->name('accsept');


Route::get('logout',[mainController::class,'logout']);



Route::group(['middleware'=>'Authcheck'],function(){

    Route::get('/register',[mainController::class,'registerpage']);
    Route::get('/login',[mainController::class,'login']);

});




Route::get('/stadiums', function () {
    return view('stadiums');
});

// Route::get('/single/{title}', function () {

//     return view('single');
// });

Route::get('/sun', function () {
    return view('welcome');
});

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/register', function () {
//     return view('register');
// });

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/edit', function () {
    return view('edit');
});

Route::get('/book', function () {
    return view('book');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('About');
});








/////////   sus dashboard   //////

Route::get('/dash', function () {
    return view('manage.dash');
});

Route::post('logincheck',[AdminController::class,'logincheck']);

Route::get('dash/logout',[AdminController::class,'logout']);

Route::get('dash-login',[AdminController::class,'login']);


// categorise admin dashboard
Route::get('dash-categorise',[categorise::class,'index']);
Route::post('add-categorise',[categorise::class,'add']);
Route::get('edit-categorise/{id}',[categorise::class,'edit']);
Route::post('update',[categorise::class,'update'])->name('update');
Route::post('delete-categorise',[categorise::class,'delete']);




// stadiums admin dashboard
Route::get('dash-Stadiums',[staduimsController::class,'index']);
Route::post('add-stadiums',[staduimsController::class,'add']);
Route::get('edit-stadiums/{id}',[staduimsController::class,'edit']);
Route::post('update',[staduimsController::class,'update'])->name('update');
Route::post('delete-stadiums',[staduimsController::class,'delete']);