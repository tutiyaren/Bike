@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{ asset('css/contact/thanks.css') }}">
@endsection

@section('content')

<div class="thanks-main">

    <!-- 画面タイトルへ遷移 -->
    <h2 class="thanks-title">お問い合わせが送信されました</h2>

    <p class="thanks-move">
        <a href="{{ route('top') }}" class="thanks-link">トップページへ</a>
    </p>

</div>

@endsection