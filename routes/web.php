<?php
use App\Post;
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

Route::get('/', function () {
    return view('index');
});

Route::get("/about",function(){
    return view("about");
})->middleware('auth');

Route::get("/service",function($id){
    return view("service");
    // return view("service")->with("id",$id);
    // return view("service",compact("id"));

});

// Route::get("/post","postController@index");
Route::resource("/post","postController")->middleware('auth');

// Route::get("/welcome","testController@test");

// Route::get("/qwerty/{id}","testController@qwerty");



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
