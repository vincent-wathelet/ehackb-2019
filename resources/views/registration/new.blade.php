@extends('layouts.app')

@section('head')

    <title>Registratie</title>

    
@endsection

@section('content')

    <div class="card container mt-5">
        <div class="card-body">
            <div class="row ">
            <img class="card-image-top mx-auto rounded-circle my-3" src="img/ehackbv6logo.png" alt="ehackb logo v6">
            </div>
            <p class="text-center">
                Bij problemen tijdens het registreren kan je steeds contact opnemen via
                <a href="https://www.facebook.com/EhackB/">Facebook</a> <strong>(snel)</strong>
                of via <a href="mailto:ehackb@ehb.be">ehackb@ehb.be</a> <strong>(traag)</strong>.
            </p>

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
                                   value="{{$talk->name}}">
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
                                   value="{{$workshop->name}}">
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
			<div class="alert alert-danger" role="alert">
                        <p>Toegang tot de lan-party met computer kost de deelnemer <strong>&euro; 5</strong>. 
                            Hiervoor krijg je een zitplaats met 1 stopcontact, 1 netwerkkabels en 1 consumptie. </p>
                        </div>

                    <div class="form-group ">
                        <label for="formSelect" class="control-label">Maak je keuze</label>
                        <select class="form-control inschrijvingtype" id="formSelect" name="inschrijvingtype">
                            <option selected value="niet-competitieve">Ik schrijf mij enkel in (zonder competitieve game)</option>
                            <option value="competitieve">Ik schrijf mij ook in voor een competitieve game.</option>
                            {{--<option value="3">Ik schrijf mij in voor competitive gaming en sluit mij aan bij een publiek
                                team.
                            </option>--}}
                        </select>
                    </div>
                    

                    <div class="form-group gameselection">
                        <div class="alert alert-danger mt-2" role="alert">
                            In het geval van een team van 5 spelers moeten er minstens 2 van EhB of HOGENT zijn.<br>
                            In het geval van een team van 2 spelers moet er minstens 1 van EhB of HOGENT zijn.<br>
                            Schrijf je ter controle verplicht in met je EhB of Hogent e-mailadres, anders zal je team geweigerd worden.<br>
                            <b>We openen de resterende plaatsen voor de gamecontests voor iedereen vanaf 30/04</b>
                            </div>
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

                        <div class="alert alert-warning" role="alert">
                            <strong>Let op!</strong> De plaatsen voor de computitie zijn beperkt. Enkel wanneer het volledig team ingschreven is, is je inschrijving geldig.
                            </div>

                        <label for="inputReminderEmail" class="control-label">Team name</label>
                                <input type="text" name="teamname" class="form-control" id="teamname"
                                       placeholder="teamname" />

                                       <div class="alert alert-warning" role="alert">
                                        Gelieve een team invullen als je deelneemt aan een teamcompitie
                                        <strong>Let op!</strong> De schrijfwijze dient indentiek te zijn bij alle teamspelers.
                                    </div>
                    

                        
                    </div>
                    <!-- NEW TEAM -->

                    {{--<div id="createTeam">

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
                    </div>--}}
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


                    <input type="submit" name="submitbutton" id="submit" class="btn btn-primary mt-3" value="Inschrijven">

                </div>

            

            </form>
        </div>
    </div>
    

@endsection

