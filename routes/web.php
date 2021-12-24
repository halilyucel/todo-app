<?php

// anasayfa route
Route::view('/', 'home');

// auth başlat ve çıkış yap
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/home', 'HomeController@index');

// kullanıcı işlemleri
Route::resource('/tasks', 'TasksController');
Route::get('/tasks-all', 'TasksController@index_all');
Route::get('/tasks-complete', 'TasksController@index_complete');
Route::get('/tasks-incomplete', 'TasksController@index_incomplete');
