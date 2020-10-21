<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/main', function () {
    return view('main');
});

Route::get('/FAQ', function () {
    return view('FAQ');
});

Route::get('/map', function () {
    return view('map');
});
