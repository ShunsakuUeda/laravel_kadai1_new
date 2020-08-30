<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //ログイン画面
    public function LoginIndex(Request $request){
        return view('layouts.login', );
    }

    //ユーザー登録画面
    public function RegisterIndex(Request $request){
        return view('layouts.register', );
    }
}
