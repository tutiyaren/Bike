@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/register_basic.css') }}">
@endsection

@section('content')

<div class="register-main">

    <!-- 画面タイトル -->
    <h2 class="register-title">会員登録</h2>

    <p class="register-message">
        <span class="message-line">名前とメールアドレスを入力したら、</span>
        <span class="message-line">「パスワードを設定する」を押してください</span>
    </p>

    <div class="auth">

        <!-- ログインフォーム -->
        <form action="{{ route('register.process') }}" method="post" class="register-form">
            @csrf
            <div class="register-name">
                <label for="name" class="name-title">名前</label>
                <input type="name" name="name" value="{{ session('name') }}" id="name" class="name-input" placeholder="Name">
                @error('name')
                <p class="error">{{ $message }}</p>
                @enderror
            </div>
            <div class="register-email">
                <label for="email" class="email-title">メールアドレス</label>
                <input type="email" name="email" value="{{ session('email') }}" id="email" class="email-input" placeholder="Email">
                @error('email')
                <p class="error">{{ $message }}</p>
                @enderror
            </div>
            <div class="register-button">
                <button type="submit" class="button-submit">パスワードを設定する</button>
            </div>
        </form>

        <!-- ログインへ -->
        <p class="login-move">
            <a href="{{ route('login') }}" class="login-link">ログインはこちら</a>
        </p>
    </div>

</div>

@endsection