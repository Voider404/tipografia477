@extends('layouts.app')



@section('content')

 <section>
        <h1>Contact</h1>
        <div class="table">
            <ul class="coll">
                <li>
                    <a href="http://discord.rocketcorerl.com/" target="_blank">
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
                <form action="https://www.rocketcorerl.com/contact.php" method="post">
                    <span class="formTitle">Send us a message.</span>
                    <input type="text" name="name" id="name" placeholder="NAME *" required="">
                    <input type="email" name="email" id="email" placeholder="EMAIL *" required="">
                    <input type="text" name="subject" id="subject" placeholder="SUBJECT" required="">
                    <textarea type="text" name="message" id="message" placeholder="MESSAGE" required=""></textarea>
                    <input type="submit" name="submit" id="submit" value="SEND IT">
                </form>
                <span id="done-message"></span>
                <img src="./RC Contact_files/logo_o.png" width="50%">
            </div>
        </div>

    </section>

    <!-- Back to top -->
    <div id="backTopDiv">
        <a href="https://www.rocketcorerl.com/contact#top" id="backTop">Back to the top</a>
    </div>