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
Route::get('/events', function () {
    return view('events');
});
Route::get('/roster', function () {
    return view('roster');
});
Route::get('/contact', function () {
    return view('contact');
});
