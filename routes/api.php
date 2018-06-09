<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('todo', 'TodoController');
Route::resource('users', 'UserController');
Route::resource('products', 'ProductController');
