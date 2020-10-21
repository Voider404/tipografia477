<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <header class="top">
        <a href="/main"><img src="images/FunkLogo.svg" class="logo"></a>
    @if (Route::has('login'))
        <div class="top-right links">
        @if (Auth::check())
            <!--avatar will be here -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ url('/profile') }}">Profile</a>
                            <a href="{{ url('/logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @else
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
            @endif
        </div>
    @endif
    </header>

    <div class="container-fluid">
        <div class="row">
            <div class="col col-lg-2">
                <div class="menu">
                    <a href="{{ url('/main') }}">Главная</a><br>
                    <a href="{{ url('/') }}">Карта</a><br>
                    <a href="{{ url('/') }}">Чёрный список</a><br>
                    <a href="{{ url('/') }}">ЧаВо</a><br>
                </div>
            </div>
            <div class="col-md-7">
                @yield('content')
            </div>
            <div class="col col-lg-3">
                @yield('info')
            </div>
        </div>
    </div>


    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
