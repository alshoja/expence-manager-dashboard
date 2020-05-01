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
    return view('home');
});

Route::get('add-ind', function () {
    return view('add-user');
});

Route::get('add-item', function () {
    return view('add-item');
});


Route::get('reports', function () {
    return view('reports');
});

Route::get('table', function () {
    return view('tabledata');
});

Route::get('add-income', function () {
    return view('add-income');
});
