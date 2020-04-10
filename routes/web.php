<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/book', function () {
    return view('spa');
});

Route::post('/book/add', 'BookController@add');
Route::get('/book/all', 'BookController@all');
Route::get('/book/delete/{id}', 'BookController@delete');
Route::get('/book/change_availabilty/{id}', 'BookController@changeAvailabilty');