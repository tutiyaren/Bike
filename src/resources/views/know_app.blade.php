@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{ asset('css/know_app.css') }}">
@endsection

@section('content')

<div class="know-main">

    <div class="know-inner">
        <!-- 画面タイトル -->
        <h2 class="know-title">バイクのある生活</h2>

        <p class="know-inner__life">
            バイクに乗ったら人生が変わったという話を聞いたことがあります。私自身、その一人です。おいしい食べ物はもちろん、ふと通った道の風景や匂い、出先のトラブル、巡る四季を楽しみに感じ、全身で風を感じる非日常感、私の人生に生きる楽しさを教えてくれました。
        </p>

    </div>

    <div class="know-image">
        <img src="{{ '/storage/center.jpg' }}" alt="バイクの画像" class="know-image__bike">
    </div>

    <div class="know-app">

        <p class="know-app__app">
            ライダーのために特化したWebアプリがこの「バイフ」です。「バイフ」とは、バイクライフの略称で、バイクに関するつぶやきや、マスツーリングの募集、おすすめの飲食、風景を投稿して共有することができます。
        </p>

        <p class="know-app__lastMessage">
            多くのライダーに体験していただければ幸いです。ぜひ、ご活用ください！
        </p>

        <p class="know-app__bye">
            よいバイフを👍
        </p>

    </div>

    <div class="app-image">
        <img src="{{ '/storage/umi.jpg' }}" alt="海の画像" class="app-image__bike">
    </div>

</div>

@endsection

@section('js')
<script src="{{ asset('js/know_app.js') }}"></script>
@endsection