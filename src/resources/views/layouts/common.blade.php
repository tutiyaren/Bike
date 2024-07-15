<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BikeLife</title>
    <link href="https://use.fontawesome.com/releases/v6.2.0/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/layouts/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layouts/common.css') }}">
    @yield('css')
</head>

<body>
    <!-- header -->
    <header class="header">

        <!-- アプリタイトル -->
        <h1 class="header-title"><a href="{{ route('top') }}" class="topPage-link">バイフ</a></h1>

        <!-- ドロワーメニュー -->
        <div class="drawerMenu">
            <input type="checkbox" id="drawerMenu_toggle" class="drawerMenu-toggle">
            <nav class="drawerMenu-nav">
                <ul class="drawerMenu-ul">
                    <li class="drawerMenu-li"><a href="{{ route('top') }}" class="drawerMenu-link">Home</a></li>
                    @guest
                    <li class="drawerMenu-li"><a href="{{ route('login') }}" class="drawerMenu-link">Login</a></li>
                    @endguest
                    <li class="drawerMenu-li"><a href="{{ route('know.app') }}" class="drawerMenu-link">What is バイフ？</a></li>
                    <li class="drawerMenu-li"><a href="{{ route('profile') }}" class="drawerMenu-link">プロフィール</a></li>
                    <li class="drawerMenu-li"><a href="#" class="drawerMenu-link">My Page</a></li>
                    <li class="drawerMenu-li"><a href="#" class="drawerMenu-link">つぶやきのバイク</a></li>
                    <li class="drawerMenu-li"><a href="#" class="drawerMenu-link">マスツーリングへ行こう</a></li>
                    <li class="drawerMenu-li"><a href="{{ route('food.index') }}" class="drawerMenu-link">おすすめの飲食</a></li>
                    <li class="drawerMenu-li"><a href="#" class="drawerMenu-link">おすすめの風景</a></li>
                    <li class="drawerMenu-li"><a href="{{ route('contact') }}" class="drawerMenu-link">お問い合わせ</a></li>
                    @auth
                    <form action="{{ route('logout') }}" method="post" class="logout-form">
                        @csrf
                        <button type="submit" class="logout-button">Logout</button>
                    </form>
                    @endauth
                </ul>
            </nav>
            <label for="drawerMenu_toggle" class="drawerMenu-button">
                <span class="drawerMenu-bar"></span>
                <span class="drawerMenu-bar"></span>
                <span class="drawerMenu-bar"></span>
            </label>
        </div>

    </header>

    <!-- main -->
    <main class="main">
        @yield('content')
    </main>

    <!-- footer -->
    <footer class="footer">

        <!-- コピーライト -->
        <p class="footer-myname">
            <small class="footer-myname__copyright">&copy; 2024 Ren Tsuchiya</small>
        </p>

    </footer>

    <div class="cursor" id="cursor">

    </div>

    <script src="{{ asset('/js/cursor.js') }}"></script>
    @yield('js')
</body>

</html>