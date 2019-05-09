@extends('layouts.app')

<title>Wachtwoord Vergeten</title>
@section('content')

    <div class="card  px-0  mx-auto py-5 my-5 card-with ">
            <div class="card-image-top mx-auto">
                    <img class="rounded-circle mx-auto" src="{{ URL::to('img/ehackbv6logo.png') }}" alt="EhackB">
                    </div>
        <div class="card-body">
            <h3 class="text-center"><b>Wachtwoord Resetten</b></h3>

            <form role="form" method="POST" action="{{ url('/password/reset') }}">
            {{ csrf_field() }}

            <input type="hidden" name="token" value="{{ $token }}">
                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="control-label">E-Mail</label>
                    <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>


            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="control-label">Wachtwoord</label>
                <input id="password" type="password" class="form-control" name="password" required>
                @if ($errors->has('password'))
                    <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <label for="password-confirm" class="control-label">Wachtwoord bevestigen</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                @if ($errors->has('password_confirmation'))
                    <span class="help-block"><strong>{{ $errors->first('password_confirmation') }}</strong></span>
                @endif
            </div>

                <div class="form-group">
                    <button type="submit" id="submitbutton" class="btn btn-primary">
                        Wachtwoord Resetten
                    </button>
                </div>

            </form>

        </div>
    </div>
@endsection
