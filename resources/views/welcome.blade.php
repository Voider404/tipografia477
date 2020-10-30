@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Rocket Core</title>

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <script type="text/javascript">
        (function() {
            var css = document.createElement('link');
            css.href = 'https://use.fontawesome.com/releases/v5.1.0/css/all.css';
            css.rel = 'stylesheet';
            css.type = 'text/css';
            document.getElementsByTagName('head')[0].appendChild(css);
        })();
    </script>

    <link href="css/rc.css" rel="stylesheet">
  <!--  <link href="css/style.css" rel="stylesheet">  -->

</head>
<body background="images/background.png">

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

        <nav>
            <div class="logo">
                <a href="./"><img src="images/RC_logo.png" height="40" width="40"></a>
            </div>
            <div class="topnav" id="myTopnav">
                <a  class="active" href="./">Home</a>
                <a  href="main">News</a>
                <a  href="events">Events</a>
                <!-- <a  href="scrims">Scrims</a> -->
                <a  href="roster">Roster</a>
                <a  href="contact">Contact</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fas fa-bars"></i>
                </a>
            </div>
        </nav>

        <!-- TOP -->
        <a name="top"></a>
        <a href="news.php">
            <section class="news">
                <marquee behavior="scroll" direction="left" scrollamount="11">NEWS! We are back with the Rocket Core Weekly tournaments! This upcoming monday a €75 prize pool! Sign up now!</marquee>
            </section>
        </a>

        <section>
            <article>
                <h2>Who are we?</h2>
                <p>Rocket Core is a Rocket League and League of Legends Tournament and Esports Organisation that fosters an enjoyable environment for all its staff, members and everyone involved. Our aim is to run successful and enjoyable events for the community and have fun doing so!
                    <BR><a class="button" href="http://discord.rocketcorerl.com" target="_blank">Join</a>
                </p>
                <!-- <h2>Rocket League</h2>
                <p>
                    <BR><a class="button" href="http://discord.rocketcorerl.com" target="_blank">Sign Up</a>
                </p> -->

                <h2>Rocket Core Esports</h2>
                <p>Here at Rocket Core we also have our very own Rocket League and League of Legends teams. We call it Rocket Core Esports! To see the current roster <a href="roster">click here</a> or join our <a href="http://discord.rocketcorerl.com" target="_blank">discord <i class="fab fa-discord"></i></a><BR>If you see a spot open in one of our teams contact one of our Team Managers!</p>
                <p>
                    We also have Lower Ranked League of Legends teams for those who want to play games more casually, we feature a wide range of lower-ranked teams. We host squads for players of all levels.<a href="https://forms.gle/8yHogkd5LP4LUXmt5" target="_blank">Click here</a> to Sign up.
                </p>
                <h2>League of Legends</h2>
                <p>For our League of Legends community, we offer a highly accurate tier list for players eager to climb in solo Q, based on intel from a large variety of partnerships and external sources, such as ProGuides Challenger League of Legends Guides, Skill Capped Challenger LoL Guides, Mobalytics and more.
                </p>
            </article>

        </section>

        <!-- Back to top -->
        <div id="backTopDiv">
            <a href="#top" id="backTop">Back to the top</a>
        </div>


<!-- Scripts -->
<script src="/js/app.js"></script>


</body>
</html>