@extends('layouts.register')

@section('title')

    <title>Registratie</title>

@endsection

@section('content')

    <div class="card">
        <div class="card-body">
            <img class="card-img-top" src="img/ehackb.png" alt="Card image cap">
            <br><br>
            <p class="text-center">
                Bij problemen tijdens het registreren kan je steeds contact opnemen via
                <a href="https://www.facebook.com/EhackB/">Facebook</a> <strong>(snel)</strong>
                of via <a href="mailto:ehackb@ehb.be">ehackb@ehb.be</a> <strong>(traag)</strong>.
            </p>
            <div class="alert alert-warning text-center">
                Registreer niet als je een invite verwacht van je teamleider! Je emailadres kan slechts 1 keer gebruikt
                worden.
            </div>

            @if (count($errors) > 0)
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger text-center">{{ $error }}</div>
                @endforeach
            @endif

            @if(Session::has('err'))
                <div class="alert alert-danger text-center">
                    {{ Session::get('err') }}
                </div>
            @endif


            <form id="registerForm" method="post" action="storecasual">
                {{ csrf_field() }}
                <div id="register1">

                    <h2 class="text-center">Persoonlijke Gegevens</h2>

                    <div class="form-row">
                        <div class="col">

                            <!-- EMAIL -->

                            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="inputEmail" class="control-label">E-mail*</label>
                                <input type="email" name="email" class="form-control" id="inputEmail"
                                       placeholder="E-mail" required autofocus value="{{old('email')}}"/>
                                @if ($errors->has('email'))
                                    <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                                @endif
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

                        <div class="col">

                            <!-- STEAM ID -->

                            <div class="form-group {{ $errors->has('steamid') ? ' has-error' : '' }}">
                                <label for="steamid" class="control-label">SteamID</label>
                                <input type="text" name="steamid" class="form-control" id="steamid"
                                       placeholder="SteamID" value="{{ old('steamid') }}"/>
                                @if ($errors->has('steamid'))
                                    <span class="help-block"><strong>{{ $errors->first('steamid') }}</strong></span>
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
                                @if ($errors->has('password'))
                                    <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
                                @endif
                            </div>

                        </div>

                        <div class="col">

                            <!-- PASSWORD CHECK -->

                            <div class="form-group">
                                <label for="inputReminderEmail" class="control-label">Wachtwoord Verificatie*</label>
                                <input type="password" name="verifypassword" class="form-control" id="inputPassword"
                                       placeholder="Wachtwoordverificatie" required/>
                                @if ($errors->has('verifypassword'))
                                    <span class="help-block"><strong>{{ $errors->first('verifypassword') }}</strong></span>
                                @endif
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

                    <div class="alert alert-warning" role="alert">
                        <strong>Let op!</strong> Deze keuze is definitief.
                    </div>

                    <div class="form-group">
                        <label for="formSelect" class="control-label">Maak je keuze</label>
                        <select class="form-control" id="formSelect">
                            <option selected value="1">Ik schrijf mij enkel in (zonder competitieve game)</option>
                            <option value="2">Ik schrijf mij ook in voor een competitieve game.</option>
                            {{--<option value="3">Ik schrijf mij in voor competitive gaming en sluit mij aan bij een publiek
                                team.
                            </option>--}}
                        </select>
                    </div>

                    <!-- NEW TEAM -->

                    <div id="createTeam">

                        <h4 class="text-center">Maak je team aan</h4>

                        <div class="form-group">
                            <label for="inputGameID" class="control-label">Game</label>
                            <select class="form-control" id="inputGameID" name="gameid">
                                @foreach(App\Game::all() as $game)
                                    @if($game->isFull())
                                        <option value={{$game->id}} disabled>{{$game->name}} - volzet</option>
                                    @else
                                        <option id="optionID" data-maxplayers="{{$game->maxPlayers}}"
                                                value={{$game->id}}>{{$game->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="inputTeamName" class="control-label">Teamnaam</label>
                            <input type="text" name="teamname" class="form-control" id="inputTeamName"
                                   placeholder="Teamnaam">
                        </div>
                        <div class="form-group">
                            <label for="inputTeamName" class="control-label">Teamleden</label>
                            <!-- Hier ontbreken nog div tags members die in register.js worden aangeroepen. Wanneer deze erbij worden gezet zien we geen emailvelden meer -->
                            <div id="members">
                                <div id="team">
                                    <input type="email" class="form-control" placeholder="E-mail" name="teammembers[]"
                                           >
                                    <input type="email" class="form-control" placeholder="E-mail" name="teammembers[]"
                                           >
                                    <input type="email" class="form-control" placeholder="E-mail" name="teammembers[]"
                                           >
                                    <input type="email" class="form-control" placeholder="E-mail" name="teammembers[]"
                                           >
                                </div>
                            </div>
                            <small id="reminderHelp" class="form-text text-muted"><strong>Opgepast:</strong> Alle velden
                                moeten ingevuld zijn!
                            </small>
                        </div>
                    </div>

                    {{--<div id="joinTeam">

                        <h4 class="text-center">Sluit je aan bij een bestaand team</h4>

                        <div class="form-group {{ $errors->has('game') ? ' has-error' : '' }}">
                            <label for="game" class="control-label">Game</label>
                            <select name="game" id="game" class="form-control">
                                @foreach($games as $game)
                                    <option value='{{$game->id}}'>{{$game->name}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('game'))
                                <span class="help-block"><strong>{{ $errors->first('game') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="team" class="control-label">Publieke teams</label>
                            <div id="teamholder">
                                @if(isset($teams))
                                    @include('ajax.team', array('teams' => $teams))
                                @else
                                    Geen publieke teams beschikbaar voor deze game
                                @endif
                            </div>
                        </div>
                    </div>--}}


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

