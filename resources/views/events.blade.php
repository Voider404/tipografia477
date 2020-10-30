@extends('layouts.app')



@section('content')

        <!DOCTYPE html>
<html lang="en">

<head>
    <meta name="author" content="Joren Nagels">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/black.png" />
    <title>RC Events</title>
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
    <link href="css/events.css" rel="stylesheet">
    <script src="js/script.js"></script>
</head>

<body>


<!-- TOP -->
<a name="top"></a>

<!-- Content -->
<section>
    <h1>Events</h1>

    <!--  TEMPLATE -----------------------
        <article>
            <h2>Coming Soon!</h2>
            <ul>
                <li>Format</li>
                <li>Time</li>
                <li>Date <a class="button" href="http://discord.rocketcorerl.com" target="_blank">Let's go</a></li>
            </ul>
        </article>
    -->
    <!-- <article>
        <h2>We are currently not running any events</h2>
        <ul>
            <li>But you can always check our discord!<a class="button" href="http://discord.rocketcorerl.com" target="_blank">Let's go</a></li>
        </ul>
    </article> ------------------------------------------>
    <article>
        <h2>Rocket Core Weekly!</h2>
        <img src="img/RCWeekly_cm.png">
        <ul>
            <li>Registration ends @ 5pm BST<a class="button" href="http://weekly.rocketcorerl.com" target="_blank">Sign up!</a></li>
            <li>Every Monday!</li>
        </ul>
    </article>



</section>

<!-- Back to top -->
<div id="backTopDiv">
    <a href="#top" id="backTop">Back to the top</a>
</div>


</body>

</html>