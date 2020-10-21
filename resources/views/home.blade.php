@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
                @section('content')
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Добавить данные пользователя</div>
                                    <div class="panel-body">
                                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/home') }}">
                                            {{ csrf_field() }}

                                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                <label for="email" class="col-md-4 control-label">Номер телефона</label>

                                                <div class="col-md-6">
                                                    <input id="phone" type="phone" class="form-control" name="phone" value="{{ old('phone') }}" >

                                                    @if ($errors->has('phone'))
                                                        <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('adres') ? ' has-error' : '' }}">
                                                <label for="adres" class="col-md-4 control-label">Адрес</label>

                                                <div class="col-md-6">
                                                    <input id="adres" type="text" class="form-control" name="adres" required>

                                                    @if ($errors->has('adres'))
                                                        <span class="help-block">
                                        <strong>{{ $errors->first('adres') }}</strong>
                                    </span>
                                                    @endif
                                                </div>
                                            </div>



                                            <div class="form-group">
                                                <div class="col-md-8 col-md-offset-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        Дополнить
                                                    </button>


                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endsection

            </div>
        </div>
    </div>
</div>
@endsection
