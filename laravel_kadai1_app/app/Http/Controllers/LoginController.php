<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //ログイン画面
    public function LoginIndex(Request $request){
        $email = $request->email;
        $password = $request->password;
        return view('layouts.login', );
    }

    public function Login(Request $request){
        $email = $request->email;
        $password = $request->password;
        return view('layouts.login', );
    }
    //ユーザー登録画面
    public function RegisterIndex(Request $request){
        $email = $request->email;
        $name = $request->name;
        $password = $request->password;
        $confimPassword = $request->confimPassword;
        return view('layouts.register', );
    }

    public function Register(Request $request){
        $email = $request->email;
        $name = $request->name;
        $password = $request->password;
        $confimPassword = $request->confimPassword;
        return view('layouts.register', );
    }
}
