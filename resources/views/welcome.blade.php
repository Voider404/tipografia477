<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Rocket Core</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <style>
        html, body {
            background: url(/images/background.png);
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
            background-color: black;
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
            <a class="links" href="{{ url('/main') }}">News</a>
            <a class="links" href="{{ url('/events') }}">Events</a>
            <a class="links" href="{{ url('/roster') }}">Roster</a>
            <a class="links" href="{{ url('/contact') }}">Contact</a>
        </div>
    </header>


    <div class="content">

        <h2>Who are we?</h2>
        <p>
            Rocket Core is a Rocket League and League of Legends Tournament and Esports Organisation that fosters an enjoyable environment for all its staff, members and everyone involved. Our aim is to run successful and enjoyable events for the community and have fun doing so!
        </p>

        <h2>Rocket Core Esports</h2>
        <p>
            Here at Rocket Core we also have our very own Rocket League and League of Legends teams. We call it Rocket Core Esports! To see the current roster <a href="roster">click here</a> or join our <a href="http://discord.rocketcorerl.com" target="_blank">discord <i class="fab fa-discord"></i></a><BR>If you see a spot open in one of our teams contact one of our Team Managers!</p>
        <p>
            We also have Lower Ranked League of Legends teams for those who want to play games more casually, we feature a wide range of lower-ranked teams. We host squads for players of all levels.<a href="https://forms.gle/8yHogkd5LP4LUXmt5" target="_blank">Click here</a> to Sign up.
        </p>

        <h2>League of Legends</h2>
        <p>
            For our League of Legends community, we offer a highly accurate tier list for players eager to climb in solo Q, based on intel from a large variety of partnerships and external sources, such as ProGuides Challenger League of Legends Guides, Skill Capped Challenger LoL Guides, Mobalytics and more.
        </p>

        <div class="title m-b-md">
            <img src="/images/LOGO.svg" width="481.56px" height="232px" alt="RocketCore"><br>

            <a href="/main"><button class="btn-welcome"> DON'T PRESS </button></a>
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
        ©rocketcore 2020
    </div>
</footer

</body>
</html>