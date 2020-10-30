<!DOCTYPE html>
<html lang="ru">
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
    <link href="css/news.css" rel="stylesheet">

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



            <hr>

            <div class="post">
                <img class="post-image" src="images/RCWeekly_cm.png">
                <div class="post-info">
                    <H3>Rocket Core Weeklies</H3>
                    <H4>07.10.2020</H4>
                    <p class="post-text"> We are back with our Rocket League Weekly tournaments! every Monday at 6pm BST Teams from all over the EU region fight over the title "RC Weekly Champions!" </p>
                    <a class="post-link" href="http://discord.rocketcorerl.com">Click here for more info.</a>
                </div>
                <hr>
            </div>
            <div class="post">
                <img class="post-image" src="images/es.png">
                <div class="post-info">
                    <H3>The Elemental Series</H3>
                    <H4>07.10.2020</H4>
                    <p class="post-text"> For the past few months we have been working very hard together with Templar Leagues, Slipstream and Your Throwing to present to you The Elemental Series! With a €3000 prize pool sponsored by Challenger mode! </p>
                    <a class="post-link" href="http://discord.rocketcorerl.com">Click here for more info.</a>
                </div>
                <hr>
            </div>
            <div class="post">
                <img class="post-image" src="images/rc_lol.png">
                <div class="post-info">
                    <H3>RC joins League of Legends!</H3>
                    <H4>07.10.2020</H4>
                    <p class="post-text"> We are proud to announce that we have joined the League of Legends Esports scene! With 3 competitive teams and multiple community teams Rocket Core will be expanding in the League of Legends universe! </p>
                    <a class="post-link" href="http://discord.rocketcorerl.com">Click here for more info.</a>
                </div>
                <hr>
            </div>
            <div class="post">
                <img class="post-image" src="images/banner_venus.png">
                <div class="post-info">
                    <H3>Introducing RC Venus</H3>
                    <H4>07.10.2020</H4>
                    <p class="post-text"> We are happy to announce That Jack and Matrix will be joining the Rocket Core Esports family. They will be playing under the name RC Venus and are looking for a third player! If you are interested contact one of the RC Managers or the captain. </p>
                    <a class="post-link" href="http://discord.rocketcorerl.com">Click here for more info.</a>
                </div>
                <hr>
            </div>

