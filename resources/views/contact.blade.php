@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <title>RC Contact</title>
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
    <link href="css/contact.css" rel="stylesheet">
    <script src="js/script.js"></script>
</head>

<body>

<!-- Navigation -->

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
<section>
    <h1>Contact</h1>
    <div class="table">
        <ul class="coll">
            <li>
                <a href="http://discord.rocketcorerl.com" target="_blank">
                    Discord <i class="fab fa-discord"></i>
                    <span class="link">discord.rocketcorerl.com</span>
                </a>
            </li>
            <li>
                <a href="https://twitter.com/rc_rocketcore" target="_blank">
                    Twitter <i class="fab fa-twitter"></i>
                    <span class="link">@rc_rocketcore</span>
                </a>
            </li>
            <li>
                <a href="https://instagram.com/rocket_core" target="_blank">
                    Instagram <i class="fab fa-instagram"></i>
                    <span class="link">instagram.com/rocket_core</span>
                </a>
            </li>
            <li>
                <a href="https://twitch.tv/rocket_core" target="_blank">
                    Twitch <i class="fab fa-twitch"></i>
                    <span class="link">twitch.tv/rocket_core</span>
                </a>
            </li>
            <li>
                <a href="https://www.youtube.com/channel/UCI_eLjh_rFn0f4mL8HCztww" target="_blank">
                    Youtube <i class="fab fa-youtube"></i>
                    <span class="link">Rocket Core Youtube</span>
                </a>
            </li>
            <li>
                <a href="https://forms.gle/aBqGvZxMC1UKjBBk8" target="_blank">
                    Want to work with us?
                    <span class="link">Submit a form here</span>
                </a>
            </li>
            <li>
                <a href="https://forms.gle/8yHogkd5LP4LUXmt5" target="_blank">
                    Join a League of Legends team
                    <span class="link">Submit a form here</span>
                </a>
            </li>
        </ul>
        <div class="coll">
            <form action="contact.php" method="post">
                <span class="formTitle">Send us a message.</span>
                <input type="text" name="name" id="name" placeholder="NAME *" required />
                <input type="email" name="email" id="email" placeholder="EMAIL *" required />
                <input type="text" name="subject" id="subject" placeholder="SUBJECT" required />
                <textarea type="text" name="message" id="message" placeholder="MESSAGE" required></textarea>
                <input type="submit" name="submit" id="submit" value="SEND IT" />
            </form>
            <span id="done-message"></span>
            <img src="images/RC_logo_o.png" width="50%">
        </div>
    </div>

</section>

<!-- Back to top -->
<div id="backTopDiv">
    <a href="#top" id="backTop">Back to the top</a>
</div>




</body>

</html>