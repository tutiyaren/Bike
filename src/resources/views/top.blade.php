@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{ asset('css/top.css') }}">
@endsection

@section('content')

<div class="top-main">

    <article class="menu-cards">

        <!-- バイフとは -->
        <section class="menu-card">
            <h2 class="menu-card__title">
                <a href="{{ route('know.app') }}" class="menu-card__link">What is バイフ？</a>
            </h2>
        </section>

        <!-- プロフィール -->
        <section class="menu-card">
            <h2 class="menu-card__title">
                <a href="{{ route('profile') }}" class="menu-card__link">プロフィール</a>
            </h2>
        </section>

        <!-- マイページ -->
        <section class="menu-card">
            <h2 class="menu-card__title">
                <a href="#" class="menu-card__link">My Page</a>
            </h2>
        </section>

        <!-- つぶやきのバイク -->
        <section class="menu-card">
            <h2 class="menu-card__title">
                <a href="#" class="menu-card__link">つぶやきのバイク</a>
            </h2>
        </section>

        <!-- マスツーリングへ行こう -->
        <section class="menu-card">
            <h2 class="menu-card__title">
                <a href="#" class="menu-card__link">マスツーリングへ行こう</a>
            </h2>
        </section>

        <!-- おすすめの～ -->
        <section class="menu-card menu-card__recommendations">
            <div class="menu-card__favorite">
                <h2 class="menu-card__title">
                    おすすめの
                </h2>
            </div>
            <div class="menu-card__item">
                <div class="menu-card__food">
                    <h2 class="menu-card__title">
                        <a href="#" class="menu-card__link">飲食</a>
                    </h2>
                </div>
                <div class="menu-card__scenery">
                    <h2 class="menu-card__title">
                        <a href="#" class="menu-card__link">風景</a>
                    </h2>
                </div>
            </div>
        </section>

    </article>

</div>

@endsection