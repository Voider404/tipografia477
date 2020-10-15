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

Route::get('/', function () {
    return view('welcome');
    });

Route::get('profile', function () {
    $users = DB::table('users')->get();
    return view('profile', compact('users'));
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('change', function () {
    $users = DB::table('users')->get();
    return view('change', compact('users'));
});

Route::get('/page', function () {
    return view('page');
});