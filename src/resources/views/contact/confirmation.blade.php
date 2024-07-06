@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{ asset('css/contact/confirmation.css') }}">
@endsection

@section('content')

<div class="confirmation-main">

    <!-- 画面タイトル -->
    <h2 class="confirmation-title">お問い合わせ確認</h2>

    <div class="wrapper">

        <!-- お問い合わせフォーム -->
        <form action="{{ route('contact.thanks') }}" method="post" class="confirmation-form">
            @csrf
            <div class="confirmationTop-title">
                <label for="title" class="label-title">タイトル</label>
                <input type="text" name="title" id="title" value="{{ $contact['title'] }}" class="title-input" placeholder="title" readonly>
                @error('title')
                <p class="error">{{ $message }}</p>
                @enderror
            </div>
            <div class="confirmationTop-comment">
                <label for="comment" class="label-comment">内容</label>
                <textarea rows="10" name="comment" id="comment" class="comment-textarea" placeholder="comment" readonly>{{ $contact['comment'] }}</textarea>
                @error('comment')
                <p class="error">{{ $message }}</p>
                @enderror
            </div>
            <div class="confirmation-button">
                <button type="submit" class="button-submit">送信する</button>
            </div>
        </form>

        <!-- 入力し直す -->
        <p class="confirmation-move">
            <a href="{{ route('contact') }}" class="confirmation-link">入力し直す</a>
        </p>

    </div>

</div>

@endsection