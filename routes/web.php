<?php

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
/*
Route::get('/', function () {
    return view('welcome');
});
)*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/',"front@index");
Route::get('/admin_login',"front@admin")->name("adminpanel");
Route::get('/forgot',"front@forgotpassword")->name('forgotPassword');
Route::get('/old',"front@old");

//test purpose
Route::get('/home',"front@home")->name("home");
Route::get('/test',"front@test");
