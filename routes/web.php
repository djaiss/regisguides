<?php

Route::get('/', 'HomeController@index');
Route::get('posts/', 'PostController@index');
Route::get('posts/{slug}', 'PostController@show');
