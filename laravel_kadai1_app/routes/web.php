<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//ログイン画面ルート設定
Route::get('login', 'LoginController@usrLoginIndex');
Route::post('login', 'LoginController@usrLogin');

//ユーザー登録画面ルート設定
Route::get('register', 'LoginController@usrRegisterIndex');
Route::post('register', 'LoginController@usrRegister');

