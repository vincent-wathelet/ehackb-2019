@extends('layouts.app')

@section('title')

    <title>Wachtwoord Vergeten</title>

@endsection

@section('content')

    <div class="card  px-0  mx-auto py-5 my-5 card-with">
        
            <div class="card-image-top mx-auto">
            <img class="rounded-circle mx-auto" src="{{ URL::to('img/ehackbv6logo.png') }}" alt="EhackB">
            </div>
            <div class="card-body">
            <h3 class="text-center mt-3 mb-3"><b>Wachtwoord Resetten</b></h3>
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
                <div >
                    <button type="submit" id="submitbutton" class="btn btn-primary ">
                        Reset link versturen
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
