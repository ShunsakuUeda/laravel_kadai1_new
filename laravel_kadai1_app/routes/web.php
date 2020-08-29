<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//ログイン画面ルート設定
Route::get('login', 'LoginController@LoginIndex');
Route::post('login', 'LoginController@Login');

//ユーザー登録画面ルート設定
Route::get('register', 'LoginController@RegisterIndex');
Route::post('register', 'LoginController@Register');

