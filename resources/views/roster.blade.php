<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RC Roster</title>

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
    <link href="css/roster.css" rel="stylesheet">
    <script src="js/script.js"></script>
</head>

<body>

<nav>
    <div class="logo">
        <a href="./"><img src="images/logo.png" height="40" width="40"></a>
    </div>
    <div class="topnav" id="myTopnav">
        <a  href="./">Home</a>
        <a  href="news">News</a>
        <a  href="events">Events</a>
        <!-- <a  href="scrims">Scrims</a> -->
        <a  href="roster">Roster</a>
        <a  class="active" href="contact">Contact</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fas fa-bars"></i>
        </a>
    </div>
</nav>

<!-- TOP -->
<a name="top"></a>

<!-- Content -->
<!--copy past player template
<a href="https://twitter.com/BlitzLeague" target="_blank">BlitzLeague <i class="fab fa-twitter"></i></a>
<li class="open">open</li>
-->

<section>
    <h1>Roster</h1>
    <article>
        Follow our Official Rocket Core Esports Twitter <a href="https://twitter.com/RocketCore_E" target="_blank">@RocketCore_E <i class="fab fa-twitter"></i></a>
    </article>
    <div class="rosterNav">
        <a href="#RL" onclick="roster('RL');return false;" class="gameActive" id="ButtonRL">Rocket League</a>
        <a href="#LOL" onclick="roster('LOL');return false;" class="!gameActive" id="ButtonLOL">League of Legends</a>

    </div>

    <!-- RL Roster -->
    <div class="RL">
        <div class="collumn" id="esports">
            <h2>Esports
                <img src="images/RC_logo.png">
            </h2>
            <ul>
                <li class="cap"><a href="https://twitter.com/Krisi_rl" target="_blank">Krisic <i class="fab fa-twitter"></i></a></li>
                <li class="open">open</li>
                <li class="open">open</li>
            </ul>
        </div>
        <div class="collumn" id="topTeam">
            <h2>Saturn
                <img src="img/saturn_emoji.png">
            </h2>
            <ul>
                <li class="cap"><a href="https://twitter.com/reen_rl" target="_blank">Reen <i class="fab fa-twitter"></i></a></li>
                <li><a href="https://twitter.com/AnacaPlays" target="_blank">Anaca <i class="fab fa-twitter"></i></a></li>
                <li><a href="https://twitter.com/sv_pigey" target="_blank">sv_pigey <i class="fab fa-twitter"></i></a></li>
                <li class="sub"><a href="https://twitter.com/GalacticQ_" target="_blank">GalacticQ <i class="fab fa-twitter"></i></a></li>
            </ul>
        </div>

        <div class="collumn" id="topTeam">
            <h2>Venus
                <img src="img/venus_emoji.png">
            </h2>
            <ul>
                <li class="cap"><a href="https://twitter.com/its_Xynal" target="_blank">Xynal <i class="fab fa-twitter"></i></a></li>
                <li><a href="https://twitter.com/tvylics" target="_blank">tvylics <i class="fab fa-twitter"></i></a></li>
                <li class="open">open</li>
            </ul>
        </div>
        <div class="collumn">
            <h2>Neptune
                <img src="img/neptune_emoji.png">
            </h2>
            <ul>
                <li class="cap">Majora</li>
                <li><a href="https://twitter.com/GledhillWill14" target="_blank">Will <i class="fab fa-twitter"></i></a></li>
                <li>mirsa</li>
                <li>Ju4life</li>
                <li>Zillion</li>
            </ul>
        </div>
        <div class="collumn">
            <h2>Jupiter
                <img src="img/jupiter_emoji.png">
            </h2>
            <ul>
                <li class="open">open</li>
            </ul>
        </div>
        <div class="collumn">
            <h2>Pluto
                <img src="img/pluto_emoji.png">
            </h2>
            <ul>
                <li class="cap"><a href="https://twitter.com/BlitzLeague_" target="_blank">BlitzLeague <i class="fab fa-twitter"></i></a></li>
                <li><a href="https://twitter.com/Jariz_RL" target="_blank">Jariz <i class="fab fa-twitter" target="_blank"></i></a></li>
                <li><a href="https://twitter.com/Kevster098" target="_blank">Kevster098 <i class="fab fa-twitter"></i></a></li>
                <li class="sub"><a href="https://twitter.com/KageruRL" target="_blank">Kageru <i class="fab fa-twitter"></i></a></li>
            </ul>
        </div>
    </div>
    <!-- LOL Roster -->
    <div class="LOL">
        <div class="collumn" id="esports">
            <h2>Nova
                <img src="img/rook_emoji.png">
            </h2>
            <ul>
                <li class="cap"><a href="https://twitter.com/TedGuru2" target="_blank">Ted Guru (Coach)<i class="fab fa-twitter"></i></a></li>
                <li class="cap"><a href="https://twitter.com/RC_DragonRage" target="_blank">DragonRage <i class="fab fa-twitter"></i></a></li>
                <li><a href="https://twitter.com/RC_Alurian" target="_blank">Alurian <i class="fab fa-twitter"></i></a></li>
                <li>Keizer</li>
                <li>Elijah</li>
                <li><a href="https://twitter.com/LordKypower" target="_blank">LordKyPower <i class="fab fa-twitter"></i></a></li>
            </ul>
        </div>
        <!-- <div class="collumn" id="topTeam">
            <h2>Cosmos
                <img src="img/warrior_emoji.png">
            </h2>
            <ul>
                <li class="cap">Inobilx </li>
                <li>Keithoa </li>
                <li>Koekwous122 </li>
                <li>Lichtje </li>
                <li>Dark Rose</li>

            </ul>
        </div>
        <div class="collumn" id="topTeam">
            <h2>Flare
                <img src="img/flare_emoji.png">
            </h2>
            <ul>
                <li class="cap">Splitterino (Coach)</li>
                <li class="cap">Jeffrey </li>
                <li>Woodpamp </li>
                <li>Lookatableflip </li>
                <li>DunkMaster Irfan </li>
                <li>Raket Kroket</li>
            </ul>
        </div> -->
    </div>
</section>
<!-- Back to top -->
<div id="backTopDiv">
    <a href="#top" id="backTop">Back to the top</a>
</div>



<!--- footer -->
<footer>
    <div class="column" id="c1">
        <img src="img/logo.png" height="40" width="40">
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
</footer></body>

</html>