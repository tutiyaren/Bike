@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{ asset('css/profile/profile.css') }}">
@endsection

@section('content')

<div class="profile-main">

    <!-- 画面タイトル -->
    <h2 class="profile-title">プロフィール設定</h2>

    <h3 class="profile-description">
        アプリ内で使用する情報を設定しましょう！
    </h3>

    <form action="{{ route('profile.store') }}" method="post" class="profile-form">
        @csrf
        <!-- ニックネーム -->
        <div class="nickname">
            <label for="nickname" class="nickname-title">ニックネーム</label>
            <input type="text" name="nickname" value="{{ old('nickname', $profile->nickname ?? '') }}" id="nickname" class="nickname-input" placeholder="バイク太郎">
            @error('nickname')
            <p class="error">{{ $message }}</p>
            @enderror
        </div>
        <!-- 性別 -->
        <div class="gender">
            <p class="gender-title">性別</p>
            <div class="gender-select">
                <input type="radio" name="gender" value="male" id="male" class="gender-input" {{ old('gender', $profile->gender_id ?? '') == '1' ? 'checked' : '' }}>
                <label for="male" class="gender-check">男性</label>

                <input type="radio" name="gender" value="female" id="female" class="gender-input" {{ old('gender', $profile->gender_id ?? '') == '2' ? 'checked' : '' }}>
                <label for="female" class="gender-check">女性</label>

                <input type="radio" name="gender" value="other" id="other" class="gender-input" {{ old('gender', $profile->gender_id ?? '') == '3' ? 'checked' : '' }}>
                <label for="other" class="gender-check">その他</label>
            </div>
            @error('gender')
            <p class="error">{{ $message }}</p>
            @enderror
        </div>
        <!-- 年代 -->
        <div class="age">
            <label for="age" class="age-title">該当する年代</label>
            <select name="age" id="age" class="age-select">
                <option disabled selected>選択してください</option>
                @foreach($ages as $age)
                <option value="{{ $age->id }}" {{ old('age', $profile->age_id ?? '') == $age->id ? 'selected' : '' }}>{{ $age->age }}</option>
                @endforeach
            </select>
            @error('age')
            <p class="error">{{ $message }}</p>
            @enderror
        </div>
        <!-- ボタン -->
        <div class="button">
            <button type="submit" class="button-submit">設定する</button>
        </div>
    </form>

</div>

@endsection