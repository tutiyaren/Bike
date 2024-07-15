@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{ asset('css/favorite/food/index.css') }}">
<link rel="stylesheet" href="{{ asset('css/paginate/paginate.css') }}">
@endsection

@section('content')

<div class="favorite-main">

    <!-- 投稿ページのリンク -->
    <div class="favorite-create">
        <a href="{{ route('food.create') }}" class="favorite-create__link">おすすめの飲食を紹介する</a>
    </div>

    <!-- 検索・セレクト -->
    <form method="get" class="searchSelect" id="searchForm">
        <!-- 検索・エリア -->
        <div class="searchSelect-area">
            @csrf
            <select name="area" id="area" class="searchSelect-area__select">
                <option value="">全てのエリア</option>
                @foreach($areas as $area)
                <option value="{{ $area->id }}" {{ request('area') == $area->id ? 'selected' : '' }}>{{ $area->area }}</option>
                @endforeach
            </select>
        </div>

        <!-- 検索・ジャンル -->
        <div class="searchSelect-genre">
            @csrf
            <select name="food_genre" id="food_genre" class="searchSelect-genre__select">
                <option value="">全てのジャンル</option>
                @foreach($foodGenres as $foodGenre)
                <option value="{{ $foodGenre->id }}" {{ request('food_genre') == $foodGenre->id ? 'selected' : '' }}>{{ $foodGenre->genre }}</option>
                @endforeach
            </select>
        </div>
    </form>

    <!-- 検索・タイトル -->
    <form method="get" class="searchTitle">
        @csrf
        <label for="title" class="searchTitle-label">
            <i class="fa-solid fa-magnifying-glass"></i>
        </label>
        <input type="text" id="title" name="title" placeholder="タイトルで検索" class="searchTitle-input" value="{{ request('title') }}">
    </form>

    <hr class="custor-hr">

    <!-- 投稿一覧 -->
    <div class="favorite-cards">
        @foreach ($foodPosts as $foodPost)
        <div class="favorite-card" data-id="{{ $foodPost->id }}" data-title="{{ $foodPost->title }}" data-description="{{ $foodPost->content }}" data-area="{{ $foodPost->area->area }}" data-genre="{{ $foodPost->food_genre->genre }}" data-image="{{ asset('storage/' . $foodPost->image) }}" data-profile-image="{{ $foodPost->profile->profile_image ? asset($foodPost->profile->profile_image->my_image) : asset('/storage/center.jpg') }}" data-profile-name="{{ $foodPost->profile->nickname }}" data-profile-age="{{ $foodPost->profile->age->age }}" data-profile-genre="{{ $foodPost->profile->gender->gender }}">
            <div class="favorite-card__top">
                <img src="{{ asset('storage/' . $foodPost->image) }}" alt="投稿画像" class="favorite-card__image">
                @foreach ($foodPost->food_another_images as $anotherImage)
                <img src="{{ asset('storage/' . $anotherImage->image) }}" alt="追加画像" class="favorite-card__image">
                @endforeach
            </div>
            <p class="favorite-card__title">{{ $foodPost->short_title }}</p>
        </div>
        @endforeach
    </div>

    <div class="pagination-container">
        {{ $foodPosts->appends(request()->query())->links('vendor.pagination.default') }}
    </div>

    <!-- 各投稿詳細モーダル -->
    <dialog class="favorite-detail" id="modalFavoriteDetail">

        <div class="dialog-inner">
            <div class="detail-photo">
                <!-- <img src="" alt="投稿画像" class="detail-photo__image"> -->
                <div class="detail-photo__images"></div>
            </div>
            <div class="detail-content">
                <div class="detail-content__close" id="closeFavoriteDetail">✕</div>
                <p class="detail-content__info">
                    <span class="detail-content__info-area"></span>
                    <span class="detail-content__info-genre"></span>
                </p>
                <h3 class="detail-content__title"></h3>
                <p class="detail-content__text"></p>
                <div class="detail-content__profile">
                    <div class="detail-content__profile-inner">
                        <img src="" alt="プロフィール画像" class="detail-content__profile-inner--image">
                    </div>
                    <div class="detail-content__profile-info">
                        <p class="detail-content__profile-name"></p>
                        <p class="detail-content__profile-name--other">
                            <span class="detail-content__profile-name--other-age"></span>
                            <span class="detail-content__profile-name--other-genre"></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </dialog>


</div>

@endsection

@section('js')
<script src="{{ asset('/js/favorite/detail.js') }}"></script>
<script src="{{ asset('/js/favorite/image.js') }}"></script>
<script src="{{ asset('/js/favorite/search.js') }}"></script>
@endsection