@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{ asset('css/contact/contact.css') }}">
@endsection

@section('content')

<div class="contact-main">

    <!-- 画面タイトル -->
    <h2 class="contact-title">お問い合わせ</h2>

    <div class="wrapper">

        <!-- お問い合わせフォーム -->
        <form action="{{ route('contact.confirmation') }}" method="post" class="contact-form">
            @csrf
            <div class="contactTop-title">
                <label for="title" class="label-title">タイトル</label>
                <input type="text" name="title" id="title" value="{{ $contact['title'] }}" class="title-input" placeholder="バグの発生">
                @error('title')
                <p class="error">{{ $message }}</p>
                @enderror
            </div>
            <div class="contactTop-comment">
                <label for="comment" class="label-comment">内容</label>
                <textarea rows="10" name="comment" id="comment" class="comment-textarea" placeholder="ログイン時の挙動がおかしい">{{ $contact['comment'] }}</textarea>

                @error('comment')
                <p class="error">{{ $message }}</p>
                @enderror
            </div>
            <div class="contact-button">
                <button type="submit" class="button-submit">確認する</button>
            </div>
        </form>

    </div>

</div>

@endsection