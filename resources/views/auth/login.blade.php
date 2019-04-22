@extends('layouts.app')

@section('head')

    <title>Login</title>

@endsection

@section('content')

  <div class="card  px-0  mx-auto py-5 my-5 card-with">
    
        <div class=" card-image-top mx-auto ">
            <img class="rounded-circle" src="img/ehackbv6logo.png" alt="ehackb logo v6">
        </div>
        <form class="col-md-10 mx-auto mt-5 " method="POST" action="{{ url('/login') }}">
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
                            <div class="text-danger row mt-3">
                                <strong>{{ $errors->first('email') }}</strong>
                            </div>
                    @endif
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="control-label">Wachtwoord</label>
                    <input id="password" type="password" class="form-control" name="password" required>
                    @if ($errors->has('password'))
                        <div class="alert alert-danger mt-5 inline-box">
              <strong>{{ $errors->first('password') }}</strong>
                        </div>
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
                    <div class="row ">
                        <button type="submit" id="submitbutton" class="btn btn-primary mx-auto">
                            Login
                        </button>
                    </div>
                    
                    <div class="row">
                        <a id="forgotPwd" class="btn btn-link mx-auto" href="{{ url('/password/reset') }}">
                            Wachtwoord vergeten?
                        </a>
                    </div>
                    <div class="row ">
                        <a id="newAcc" class="btn btn-link mx-auto" href="{{ url('/new') }}">
                            <strong>Nog geen account? Registreer hier.</strong>
                        </a>
                    </div>
            </div>
        </form>

    
  </div>

@endsection
