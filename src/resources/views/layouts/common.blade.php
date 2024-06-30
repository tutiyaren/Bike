<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BikeLife</title>
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
                    <li class="drawerMenu-li"><a href="#" class="drawerMenu-link">Home</a></li>
                    <li class="drawerMenu-li"><a href="#" class="drawerMenu-link">Login</a></li>
                    <li class="drawerMenu-li"><a href="#" class="drawerMenu-link">What is バイフ？</a></li>
                    <li class="drawerMenu-li"><a href="#" class="drawerMenu-link">プロフィール</a></li>
                    <li class="drawerMenu-li"><a href="#" class="drawerMenu-link">My Page</a></li>
                    <li class="drawerMenu-li"><a href="#" class="drawerMenu-link">つぶやきのバイク</a></li>
                    <li class="drawerMenu-li"><a href="#" class="drawerMenu-link">マスツーリングへ行こう</a></li>
                    <li class="drawerMenu-li"><a href="#" class="drawerMenu-link">おすすめの飲食</a></li>
                    <li class="drawerMenu-li"><a href="#" class="drawerMenu-link">おすすめの風景</a></li>
                    <li class="drawerMenu-li"><a href="#" class="drawerMenu-link">お問い合わせ</a></li>
                    <li class="drawerMenu-li"><a href="#" class="drawerMenu-link">Logout</a></li>
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

</body>

</html>