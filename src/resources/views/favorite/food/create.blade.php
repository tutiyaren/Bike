@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{ asset('css/favorite/food/create.css') }}">
@endsection

@section('content')

<div class="favoriteCreate-main">

    <form action="{{ route('food.store') }}" method="post" class="favoriteFrom" enctype="multipart/form-data">
        @csrf
        <!-- 投稿の選択 -->
        <div class="select">
            <select name="area" id="area" class="select-area">
                <option selected disabled>全てのエリア</option>
                @foreach($areas as $area)
                <option value="{{ $area->id }}" {{ old('area') == $area->id ? 'selected' : '' }}>{{ $area->area }}</option>
                @endforeach
            </select>
            <select name="food_genre" id="food_genre" class="select-genre">
                <option selected disabled>全てのジャンル</option>
                @foreach($foodGenres as $foodGenre)
                <option value="{{ $foodGenre->id }}" {{ old('food_genre') == $foodGenre->id ? 'selected' : '' }}>{{ $foodGenre->genre }}</option>
                @endforeach
            </select>
        </div>
        @foreach (['area', 'food_genre'] as $field)
        @error($field)
        <p class="error">{{ $message }}</p>
        @enderror
        @endforeach
        <!-- タイトル -->
        <div class="title">
            <label for="title" class="title-label">タイトル</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" class="title-input" placeholder="投稿のタイトルを入力してください">
            @error('title')
            <p class="error">{{ $message }}</p>
            @enderror
        </div>
        <!-- 詳細 -->
        <div class="content">
            <label for="content" class="content-label">詳細</label>
            <textarea name="content" id="content" class="content-textarea" placeholder="店名や感想等を記載しましょう！">{{ old('content') }}</textarea>
            @error('content')
            <p class="error">{{ $message }}</p>
            @enderror
        </div>
        <!-- 画像 -->
        <div class="image">
            <!-- 1 -->
            <details class="image-wrapper" id="details1">
                <summary class="image-wrapper__inner">一枚目の画像</summary>
                <input type="file" name="image1" id="image1" accept="image/*" class="upload" onchange="previewImage(event, 'image-upload1')">
                <div class="image-container" onclick="triggerFileInput('image1')">
                    <span class="image-placeholder">クリックして写真を追加</span>
                    <img src="{{ old('image1') }}" alt="投稿写真" class="image-upload" id="image-upload1">
                </div>
            </details>
            <!-- 2 -->
            <details class="image-wrapper image-hidden" id="details2">
                <summary class="image-wrapper__inner">二枚目の画像</summary>
                <input type="file" name="image2" id="image2" accept="image/*" class="upload" onchange="previewImage(event, 'image-upload2')">
                <div class="image-container" onclick="triggerFileInput('image2')">
                    <span class="image-placeholder">クリックして写真を追加</span>
                    <img src="{{ old('image2') }}" alt="投稿写真" class="image-upload" id="image-upload2">
                </div>
            </details>
            <!-- 3 -->
            <details class="image-wrapper image-hidden" id="details3">
                <summary class="image-wrapper__inner">三枚目の画像</summary>
                <input type="file" name="image3" id="image3" accept="image/*" class="upload" onchange="previewImage(event, 'image-upload3')">
                <div class="image-container" onclick="triggerFileInput('image3')">
                    <span class="image-placeholder">クリックして写真を追加</span>
                    <img src="{{ old('image3') }}" alt="投稿写真" class="image-upload" id="image-upload3">
                </div>
            </details>
            <!-- 4 -->
            <details class="image-wrapper image-hidden" id="details4">
                <summary class="image-wrapper__inner">四枚目の画像</summary>
                <input type="file" name="image4" id="image4" accept="image/*" class="upload" onchange="previewImage(event, 'image-upload4')">
                <div class="image-container" onclick="triggerFileInput('image4')">
                    <span class="image-placeholder">クリックして写真を追加</span>
                    <img src="{{ old('image4') }}" alt="投稿写真" class="image-upload" id="image-upload4">
                </div>
            </details>
            @foreach (['image1', 'image2', 'image3', 'image4'] as $image)
            @error($image)
            <p class="error">{{ $message }}</p>
            @enderror
            @endforeach
        </div>
        <!-- 投稿ボタン -->
        <div class="button">
            <button type="submit" class="button-submit">投稿する</button>
        </div>

    </form>

</div>

@endsection

@section('js')
<script src="{{ asset('js/favorite/create.js') }}"></script>
@endsection