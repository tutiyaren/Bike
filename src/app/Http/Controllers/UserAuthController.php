<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\PasswordRequest;
use App\Models\User;

class UserAuthController extends Controller
{

    // ログインのビュー
    public function login()
    {
        return view('auth.login');
    }

    public function loginProcess(LoginRequest $request)
    {
        $userEmail = $request->input('email');
        $userPassword = $request->input('password');
        $userLogin = ['email' => $userEmail, 'password' => $userPassword];

        if (!(Auth::attempt($userLogin))) {
            return redirect()->back()
            ->withInput($request->only('login'))
            ->withErrors(['login' => 'メールアドレスまたはパスワードが違います。']);
        }
    
        if (Auth::attempt($userLogin)) {
            return redirect()->route('top');
        }
    }

    // 会員登録の名前とメアド設定ビュー
    public function register()
    {
        return view('auth.register_basic');
    }

    public function registerProcess(RegisterRequest $request)
    {
        $userName = $request->input('name');
        $userEmail = $request->input('email');
        
        Session::put('name', $userName);
        Session::put('email', $userEmail);

        return redirect()->route('password');
    }

    // 会員登録のパスワード設定ビュー
    public function password()
    {
        return view('auth.register_password');
    }

    public function passwordProcess(PasswordRequest $request)
    {
        $password = $request->input('password');

        $name = Session::get('name');
        $email = Session::get('email');

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password)
        ]);

        Auth::login($user);

        return redirect()->route('top');
    }

    // ログアウトの処理
    public function logout()
    {
        Auth::logout();
        return redirect()->route('top');
    }
}
