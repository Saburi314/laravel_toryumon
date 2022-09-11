<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function getAuth(Request $request)
    {
        $param = ['message' => 'ログインしてください。'];

        return view('auth', $param);
    }

    public function postAuth(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $message = 'ログインしました。' . Auth::user()->name . 'さん';
        } else {
            $message = 'ログインに失敗しました。';
        }

        return view('auth', ['message' => $message]);
    }
}
