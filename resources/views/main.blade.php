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
                <H3>Родник в Приморском районе</H3>
                <H4>07.10.2020</H4>
                <p class="post-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum quam sit amet massa sagittis, in vulputate nisi accumsan. Nulla facilisi. Nunc quis lobortis ante. Mauris nec lorem et tortor cursus sollicitudin sit amet id justo. Integer sem libero, interdum id lacinia ac, feugiat et nibh. Curabitur turpis purus, aliquet et risus nec, tincidunt dignissim nisl. Nullam eget volutpat nulla. Donec erat ipsum, condimentum... </p>
                <a class="post-link" href="#"> подробнее</a>
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