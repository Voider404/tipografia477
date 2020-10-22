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

</div>

@endsection

@section('info')

    <div class="middle-col">
        <h4>фильтр тут</h4>
        <input>
        <input>
    </div>

@endsection