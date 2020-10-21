<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FunkWater</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <style>
        html, body {
            background-color: #F5F7F8;
            color: #636b6f;
            font-family: 'Roboto', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        a{
            text-decoration: none;
            color: #757575 !important;
        }

        ul, li{
            list-style-type: none;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top{
            position: absolute;
            height: 70px;
            background-color: white;
            color: #757575 !important;
            width: 100%;
            top: 0px;
            font-size: 18pt;
        }

        .links{
            margin-right: 20px;
        }

        .top-right {
            position: absolute;
            right: 5%;
            top: 18px;
        }

        .top-left {
            position: absolute;
            top: 18px;
            left: 5%;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }
        .btn-welcome{
            color: white;
            background-color: #0069A7;
            border: none;
            border-radius: 60px;
            width: 372px;
            height: 80px;
            padding: 5px;
            margin-top: 80px;
            font-size: 30pt;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<div class="flex-center position-ref full-height">
    <header class="top">
    @if (Route::has('login'))
        <div class="top-right links">
            @if (Auth::check())
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

        <div class="top-left">
            <a class="links" href="{{ url('/main') }}">Главная</a>
            <a class="links" href="{{ url('/') }}">Карта</a>
            <a class="links" href="{{ url('/') }}">ЧаВо</a>
        </div>
    </header>


    <div class="content">
        <div class="title m-b-md">
            <img src="/images/FunkLogo.svg" width="481.56px" height="232px" alt="FunkWater"><br>
            <a href="/main"><button class="btn-welcome">Найти источник</button></a>
        </div>
    </div>
</div>
<!-- Scripts -->
<script src="/js/app.js"></script>
</body>
</html>