@extends('layouts.register')

@section('content')

    <div class="card">
        <div class="card-body">
            <img class="card-img-top" src="{{ URL::to('img/ehackb.png') }}" alt="Card image cap">

            @if (count($errors) > 0)
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger text-center">{{ $error }}</div>
                @endforeach
            @endif


            @if(Session::has('err'))
                <div class="alert alert-danger">
                    {{ Session::get('err') }}
                </div>
            @endif

            <form method="post" action="{{ route('registermail') }}">
                {{ csrf_field() }}
                <input type="hidden" name="token" value="{{$invite->token}}"/>

                <div id="register1">

                    <h2 class="text-center">Persoonlijke Gegevens</h2>

                    <div class="form-row">
                        <div class="col">

                            <!-- EMAIL -->

                            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="inputEmail" class="control-label">E-mail</label>
                                <input type="email" name="email" class="form-control" id="inputEmail"
                                       placeholder="E-mail" value="{{ $invite->email }}" readonly="readonly"/>
                            </div>
                        </div>

                        <div class="col">

                            <!-- REMINDER EMAIL -->

                            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="inputReminderEmail" class="control-label">Reminder E-mail</label>
                                <input type="email" value="{{ old('reminderemail') }}" name="reminderemail"
                                       class="form-control" id="inputReminderEmail" placeholder="Reminder E-mail">
                            </div>
                        </div>

                    </div>

                    <div class="form-row">

                        <div class="col">

                            <!-- FIRST NAME -->

                            <div class="form-group  {{ $errors->has('firstname') ? ' has-error' : '' }}">
                                <label for="inputFirstName" class="control-label">Voornaam*</label>
                                <input type="text" value="{{old('firstname')}}" name="firstname" class="form-control"
                                       id="inputFirstName" placeholder="Voornaam" required/>
                                @if ($errors->has('firstname'))
                                    <span class="help-block"><strong>{{ $errors->first('firstname') }}</strong></span>
                                @endif
                            </div>

                        </div>

                        <div class="col">

                            <!-- LAST NAME -->

                            <div class="form-group {{ $errors->has('lastname') ? ' has-error' : '' }}">
                                <label for="inputReminderEmail" class="control-label">Achternaam*</label>
                                <input type="text" name="lastname" value="{{old('lastname')}}" class="form-control"
                                       id="inputLastName"
                                       placeholder="Achternaam" required/>
                                @if ($errors->has('lastname'))
                                    <span class="help-block"><strong>{{ $errors->first('lastname') }}</strong></span>
                                @endif
                            </div>

                        </div>

                    </div>

                    <div class="form-row">

                        <div class="col">

                            <!-- PASSWORD -->

                            <div class="form-group">
                                <label for="inputReminderEmail" class="control-label">Wachtwoord*</label>
                                <input type="password" name="password" class="form-control" id="inputPassword"
                                       placeholder="Wachtwoord" required/>
                            </div>

                        </div>

                        <div class="col">

                            <!-- PASSWORD CHECK -->

                            <div class="form-group">
                                <label for="inputReminderEmail" class="control-label">Wachtwoord Verificatie*</label>
                                <input type="password" name="verifypassword" class="form-control" id="inputVerifyPassword"
                                       placeholder="Wachtwoord Verificatie" required/>
                            </div>

                        </div>

                    </div>

                </div>

                <div id="register2">

                    <!-- ACTIVITIES -->

                    <h2 class="text-center">Keynotes</h2>

                    @foreach($talks as $talk)
                        <div class="input-group">
                        <span class="input-group-addon">
                            <input type="checkbox" value="{{$talk->id}}" name="activities[]"
                                   aria-label="Checkbox for following text input" {{  ($talk->maxUsers - $talk->users->count()) <= 0 ? 'disabled' : '' }}>
                         </span>
                            <input type="text" class="form-control" disabled aria-label="Text input with checkbox"
                                   value="{{$talk->name}} ({{date("H:i",strtotime($talk->startDate)) }} - {{date("H:i",strtotime($talk->endDate)) }})@if($talk->maxUsers != 9999) - Plaatsen: {{ $talk->maxUsers - $talk->users->count() }} @endif">
                        </div>
                    @endforeach

                    <h2 class="text-center">Workshops</h2>

                    @foreach($workshops as $workshop)
                        <div class="input-group">
                        <span class="input-group-addon">
                            <input type="checkbox" value="{{$workshop->id}}" name="activities[]"
                                   aria-label="Checkbox for following text input" {{  ($workshop->maxUsers - $workshop->users->count()) <= 0 ? 'disabled' : '' }}>
                         </span>
                            <input type="text" class="form-control" disabled aria-label="Text input with checkbox"
                                   value="{{$workshop->name}} ({{date("H:i",strtotime($workshop->startDate)) }} - {{date("H:i",strtotime($workshop->endDate))}})@if($workshop->maxUsers != 9999) - Plaatsen: {{ $workshop->maxUsers - $workshop->users->count() }} @endif">
                        </div>
                    @endforeach

                    <h2 class="text-center">Extra Opties</h2>

                    @foreach($options as $option)

                        <div class="input-group">
                        <span class="input-group-addon">
                            <input type="checkbox" value="{{$option->id}}" name="options[]"
                                   aria-label="Checkbox for following text input">
                         </span>
                            <input type="text" class="form-control" disabled aria-label="Text input with checkbox"
                                   value=" {{$option->name}} - Prijs: €{{ number_format($option->price,2) }}">
                        </div>
                    @endforeach

                </div>

                <div id="register3">

                    <h2 class="text-center">Games</h2>

                    <div class="form-group">
                            <select name="game" id="game" class="form-control">
                                <option value='{{ $team->game->id }}'>{{$team->game->name}}</option>
                            </select>
                    </div>
                    <h2 class="text-center">Team</h2>
                    <div id="teamholder" class="form-group">
                        <p class="text-center">Je gaat jezelf bij het team <strong>{{ $team->name }}</strong> voegen.</p>
                    </div>



                    <input type="submit" name="submitbutton" id="submit" class="btn btn-primary" value="Inschrijven">

                </div>

                <nav aria-label="Registration Navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled" id="itemRegisterPrevious"><a class="page-link" href="">←</a></li>
                        <li class="page-item active" id="itemRegister1"><a class="page-link" href="">1</a></li>
                        <li class="page-item" id="itemRegister2"><a class="page-link" href="">2</a></li>
                        <li class="page-item" id="itemRegister3"><a class="page-link" href="">3</a></li>
                        <li class="page-item" id="itemRegisterNext"><a class="page-link" href="">→</a></li>
                    </ul>
                </nav>

            </form>

        </div>
    </div>
@endsection

