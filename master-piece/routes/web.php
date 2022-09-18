<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categorise;
use App\Http\Controllers\staduimsController;
use App\Http\Controllers\mainController;
use App\Http\Middleware\Authcheck;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\commentController;
use App\Http\Controllers\costumerController;
use App\Http\Controllers\coachesController;
use App\Http\Controllers\bookController;
use App\Http\Controllers\OwnerController;


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




Route::post('addbook',[mainController::class,'addbook']);

Route::post('editprofile',[mainController::class,'editprofile']);

Route::post('editprofileres',[mainController::class,'editprofileres']);







Route::get('/trainer',[AdminController::class,'indextrainer']);
Route::get('/owner',[AdminController::class,'indexowner']);



Route::get('logout',[mainController::class,'logout']);


Route::get('addcomment',[mainController::class,'addcomment']);


Route::post('logincheckuser',[mainController::class,'logincheckuser']);

Route::group(['middleware'=>'Authcheck'],function(){
    Route::post('add-costumer',[mainController::class,'register'])->name('accsept');
    
    Route::get('/register',[mainController::class,'registerpage']);
    Route::get('/login',[mainController::class,'login']);


    Route::get('/book',[mainController::class,'bookpage']);
    Route::get('/account',[mainController::class,'account']);


});







Route::get('/stadiums',[mainController::class,'shop']);

Route::get('/categury/{id}',[mainController::class,'cats']);


Route::get('/sun', function () {
    return view('welcome');
});


Route::get('/profile', function () {
    return view('profile');
});

// Route::get('/edit', function () {
//     return view('edit');
// });



Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('About');
});








/////////   admin dashboard   //////

Route::get('/dash', function () {
    return view('manage.dash');
});

Route::post('logincheck',[AdminController::class,'logincheck']);

Route::post('dash/logout',[AdminController::class,'logout']);

Route::get('dash-login',[AdminController::class,'login']);


// categorise admin dashboard
Route::get('dash-categorise',[categorise::class,'index']);
Route::post('add-categorise',[categorise::class,'add']);
Route::get('edit-categorise/{id}',[categorise::class,'edit']);
Route::post('update-cat',[categorise::class,'update'])->name('update-cat');
Route::post('delete-categorise',[categorise::class,'delete']);




// stadiums admin dashboard
Route::get('dash-Stadiums',[staduimsController::class,'index']);
Route::post('add-stadiums',[staduimsController::class,'add']);
Route::get('edit-stadiums/{id}',[staduimsController::class,'edit']);
Route::post('update-stad',[staduimsController::class,'update'])->name('update-stad');
Route::post('delete-stadiums',[staduimsController::class,'delete']);


// comments admin dashboard
Route::get('dash-comments',[commentController::class,'index']);
Route::post('add-comment',[commentController::class,'add']);
Route::get('edit-comment/{id}',[commentController::class,'edit']);
Route::post('update-comment',[commentController::class,'update'])->name('update-comment');
Route::post('delete-comment',[commentController::class,'delete']);


// coustumers admin dashboard
Route::get('dash-coustumers',[costumerController::class,'index']);
Route::post('add-coustumer',[costumerController::class,'add']);
Route::get('edit-coustumer/{id}',[costumerController::class,'edit']);
Route::post('update-coustumer',[costumerController::class,'update'])->name('update-coustumer');
Route::post('delete-coustumer',[costumerController::class,'delete']);




// Admins  dashboard
Route::get('dash-admins',[AdminController::class,'index']);
Route::post('add-admin',[AdminController::class,'add']);
Route::get('edit-admin/{id}',[AdminController::class,'edit']);
Route::post('update-admin',[AdminController::class,'update'])->name('update-admin');
Route::post('delete-admin',[AdminController::class,'delete']);





// Coaches  dashboard
Route::get('dash-coaches',[coachesController::class,'index']);
Route::post('add-coache',[coachesController::class,'add']);
Route::get('edit-coache/{id}',[coachesController::class,'edit']);
Route::post('update-coache',[coachesController::class,'update'])->name('update-coache');
Route::post('delete-coache',[coachesController::class,'delete']);





// books  dashboard
Route::get('dash-books',[bookController::class,'index']);
Route::post('add-book',[bookController::class,'add']);
Route::get('edit-book/{id}',[bookController::class,'edit']);
Route::post('update-book',[bookController::class,'update'])->name('update-book');
Route::post('delete-book',[bookController::class,'delete']);





// owners  dashboard
Route::get('dash-owners',[OwnerController::class,'index']);
Route::post('add-owner',[OwnerController::class,'add']);
Route::get('edit-owner/{id}',[OwnerController::class,'edit']);
Route::post('update-owners',[OwnerController::class,'update'])->name('update-owners');
Route::post('delete-owners',[OwnerController::class,'delete']);





