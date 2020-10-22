@extends('layouts.app')



@section('content')

    <div class="middle-col">
    <div class="search">
        <input placeholder="Поиск" type="text" class="search-form" name="search" required autofocus>
        <button type="submit" class="search-btn"></button>

{{--        @if ($errors->has('email'))--}}
{{--            <span class="help-block">--}}
{{--                                        <strong>{{ $errors->first('email') }}</strong>--}}
{{--                                    </span>--}}
{{--        @endif--}}
    </div>
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

</div>

@endsection

@section('info')

    <div class="middle-col">
        <h4>фильтр тут</h4>
        <input>
        <input>
    </div>

@endsection