@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/register_password.css') }}">
@endsection

@section('content')

<div class="password-main">

    <!-- 画面タイトル -->
    <h2 class="password-setting">パスワード設定</h2>

    <div class="auth">

        <!-- ログインフォーム -->
        <form action="{{ route('password.process') }}" method="post" class="password-form">
            @csrf
            <div class="password-password">
                <label for="password" class="password-title">パスワード</label>
                <input type="password" name="password" id="password" class="password-input" placeholder="Password">
            </div>
            <div class="password-confirmation">
                <label for="password-confirmation" class="confirmation-title">パスワード確認</label>
                <input type="password" name="password_confirmation" id="password-confirmation" class="confirmation-input" placeholder="Password Confirmation">
                @error('password')
                <p class="error">{{ $message }}</p>
                @enderror
            </div>
            <div class="register-button">
                <button type="submit" class="button-submit">会員登録する</button>
            </div>
        </form>

        <!-- ログインへ -->
        <p class="register-move">
            <a href="{{ route('register') }}" class="register-link">戻る</a>
        </p>
    </div>

</div>


@endsection