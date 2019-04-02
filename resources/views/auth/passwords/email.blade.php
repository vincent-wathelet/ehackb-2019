@extends('layouts.register')

@section('title')

    <title>Wachtwoord Vergeten</title>

@endsection

@section('content')

    <div class="card loginCard">
        <div class="card-body">
            <img class="card-img-top" src="{{ URL::to('img/ehackb.png') }}" alt="EhackB">
            <h2 class="text-center">Wachtwoord Resetten</h2>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <form role="form" method="POST" action="{{ url('/password/email') }}">
                {{ csrf_field() }}

                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="control-label">E-Mail</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                            <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                </div>
                <div class="form-group">
                    <button type="submit" id="submitbutton" class="btn btn-primary">
                        Reset link versturen
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
