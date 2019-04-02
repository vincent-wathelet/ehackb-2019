@extends('layouts.register')

@section('title')

    <title>Login</title>

@endsection

@section('content')

  <div class="card loginCard">
    <div class="card-body">
      <img class="card-img-top" src="img/ehackb.png" alt="Card image cap">
        <form method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
            <h2 class="text-center">Login</h2>

            @if(Session::has('msg'))
                <div class="alert alert-success">
                    {{ Session::get('msg') }}
                </div>
            @endif

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="control-label">E-Mail</label>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
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
                        <span class="help-block">
              <strong>{{ $errors->first('password') }}</strong>
            </span>
                    @endif
            </div>

            <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> Mij onthouden
                        </label>
                    </div>
            </div>

            <div class="form-group">
                <button type="submit" id="submitbutton" class="btn btn-primary">
                    Login
                </button>

                <a id="forgotPwd" class="btn btn-link" href="{{ url('/password/reset') }}">
                    Wachtwoord vergeten?
                </a>

                <a id="newAcc" class="btn btn-link" href="{{ url('/new') }}">
                    <strong>Nog geen account? Registreer hier.</strong>
                </a>

            </div>
        </form>

    </div>
  </div>


@endsection
