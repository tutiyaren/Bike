@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
@endsection

@section('content')

<div class="login-main">

    <!-- 画面タイトル -->
    <h2 class="login-title">ログイン</h2>

    <div class="auth">

        <!-- ログインフォーム -->
        <form action="{{ route('login.process') }}" method="post" class="login-form">
            @csrf
            <div class="login-email">
                <label for="email" class="email-title">メールアドレス</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" class="email-input" placeholder="Email">
                @error('email')
                <p class="error">{{ $message }}</p>
                @enderror
            </div>
            <div class="login-password">
                <label for="password" class="password-title">パスワード</label>
                <input type="password" name="password" id="password" class="password-input" placeholder="Password">
                @error('password')
                <p class="error">{{ $message }}</p>
                @enderror
                @error('login')
                <p class="error">{{ $message }}</p>
                @enderror
            </div>
            <div class="login-button">
                <button type="submit" class="button-submit">ログインする</button>
            </div>
        </form>

        <!-- 会員登録へ -->
        <p class="register-move">
            <a href="{{ route('register') }}" class="register-link">会員登録がまだな方はこちら</a>
        </p>
    </div>

</div>

@endsection