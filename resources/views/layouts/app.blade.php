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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

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

        <div class="top-left">
            <a class="links" href="{{ url('/index') }}">Home</a>
            <a class="links" href="{{ url('/main') }}">News</a>
            <a class="links" href="{{ url('/events') }}">Events</a>
            <a class="links" href="{{ url('/roster') }}">Roster</a>
            <a class="links" href="{{ url('/contact') }}">Contact</a>
        </div>

        <a href="/main"><img src="images/RC_logo.png" class="logo"></a>
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
                    <a href="{{ url('/main') }}">Home</a><br>
                    <a href="{{ url('/') }}">News</a><br>
                    <a href="{{ url('/') }}">Events</a><br>
                    <a href="{{ url('/') }}">Roster</a><br>
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

    <!--- footer -->
    <footer>
        <div class="column" id="c1">
            <img src="images/LOGO.svg" height="40" width="40">
            <span id="RCFooter">Rocket Core</span><BR>
                <a href="https://www.twitch.tv/rocket_core/" target="_blank"><i class="fab fa-twitch"></i></a>
                <a href="http://discord.rocketcorerl.com" target="_blank"><i class="fab fa-discord"></i></a>
                <a href="https://twitter.com/rc_rocketcore" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://instagram.com/rocket_core" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.youtube.com/channel/UCI_eLjh_rFn0f4mL8HCztww" target="_blank"><i class="fab fa-youtube"></i></a>
        </div>
        <div class="column" id="c2">
            <table>
                <tr>
                    <th><a href="index.php">Home</a></th>
                    <th><a href="news.php">News</a></th>
                    <!-- <th><a href="scrims.php">Scrims</a></th> -->
                </tr>
                <tr>

                    <th><a href="roster.php">Roster</a></th>
                    <th><a href="events.php">Events</a></th>
                </tr>
                <tr>

                    <th><a href="contact.php">Contact</a></th>
                </tr>
            </table>
        </div>
        <div id="c3">
            ©Rocket Core 2020
        </div>
    </footer>

</body>
</html>
