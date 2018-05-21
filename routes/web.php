<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contain','PageController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/blog','BlogController@index');

Route::get('/blog/create','BlogController@create');

Route::post('/blog/store','BlogController@store');

Route::get('/blog/{id}','BlogController@show');
