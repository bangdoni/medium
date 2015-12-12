<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('product/create', 'ProductController@create');
Route::post('product/create', 'ProductController@create');
Route::get('product', 'ProductController@index');
Route::get('product/edit/{product}', 'ProductController@edit');
Route::post('product/edit/{id}', 'ProductController@edit');
Route::get('product/delete/{id}', 'ProductController@delete');
