<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //ログイン画面
    public function usrLoginIndex(Request $request){
        $email = $request->email;
        $password = $request->password;
        return view('layouts.login', );
    }

    public function usrLogin(Request $request){
        $email = $request->email;
        $password = $request->password;
        return view('layouts.login', );
    }
    //ユーザー登録画面
    public function usrRegisterIndex(Request $request){
        $email = $request->email;
        $name = $request->name;
        $password = $request->password;
        $confimPassword = $request->confimPassword;
        return view('layouts.register', );
    }

    public function usrRegister(Request $request){
        $email = $request->email;
        $name = $request->name;
        $password = $request->password;
        $confimPassword = $request->confimPassword;
        return view('layouts.register', );
    }
}
