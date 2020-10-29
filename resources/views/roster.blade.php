@extends('layouts.app')
<body>

<section>
        <h1>Roster</h1>
        <article>
            Follow our Official Rocket Core Esports Twitter <a href="https://twitter.com/RocketCore_E" target="_blank">@RocketCore_E <i class="fab fa-twitter"></i></a>
        </article>
        <div class="rosterNav">
            <a href="https://www.rocketcorerl.com/roster#RL" onclick="roster(&#39;RL&#39;);return false;" class="gameActive" id="ButtonRL">Rocket League</a>
            <a href="https://www.rocketcorerl.com/roster#LOL" onclick="roster(&#39;LOL&#39;);return false;" class="!gameActive" id="ButtonLOL">League of Legends</a>

        </div>

        <!-- RL Roster -->
        <div class="RL">
            <div class="collumn" id="esports">
                <h2>Esports
                    <img src="./RC Roster_files/logo.png">
                </h2>
                <ul>
                    <li class="cap"><a href="https://twitter.com/Krisi_rl" target="_blank">Krisic <i class="fab fa-twitter"></i></a></li>
                    <li class="open">open</li>
                    <li class="open">open</li>
                </ul>
            </div>
            <div class="collumn" id="topTeam">
                <h2>Saturn
                    <img src="./RC Roster_files/saturn_emoji.png">
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
                    <img src="./RC Roster_files/venus_emoji.png">
                </h2>
                <ul>
                    <li class="cap"><a href="https://twitter.com/its_Xynal" target="_blank">Xynal <i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://twitter.com/tvylics" target="_blank">tvylics <i class="fab fa-twitter"></i></a></li>
                    <li class="open">open</li>
                </ul>
            </div>
            <div class="collumn">
                <h2>Neptune
                    <img src="./RC Roster_files/neptune_emoji.png">
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
                    <img src="./RC Roster_files/jupiter_emoji.png">
                </h2>
                <ul>
                    <li class="open">open</li>
                </ul>
            </div>
            <div class="collumn">
                <h2>Pluto
                    <img src="./RC Roster_files/pluto_emoji.png">
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
                    <img src="./RC Roster_files/rook_emoji.png">
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
        <a href="https://www.rocketcorerl.com/roster#top" id="backTop">Back to the top</a>
    </div>

</body>