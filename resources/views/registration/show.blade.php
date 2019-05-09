@extends('layouts.app')

@section('title')
    <title>Profiel</title>
@endsection

@section('content')

    <div class="card px-0  mx-auto py-5 my-5 col-md-8">
        
                <div class=" card-image-top mx-auto ">
                    <img class="rounded-circle" src="img/ehackbv6logo.png" alt="EhackB Logo">
                </div>
                <div class="card-body">
            <h2 class="text-center">Profiel</h2>
            <ul class="list-group">
                <li class="list-group-item"><b>Voornaam: </b>{{ $user->firstName }}</li>
                <li class="list-group-item"><b>Achternaam: </b>{{ $user->lastName }}</li>
                
                <li class="list-group-item"><b>E-mailadres: </b>{{ $user->email }}</li>
                @if(!empty($user->reminderMail))
                    <li class="list-group-item"><b>Reminder E-mailadres: </b>{{ $user->reminderMail }}</li>
                @endif
            </ul>
            <h2 class="text-center">Gaming</h2>
            @if(!empty($game))
            <form method="POST" action="editGaming">
		<div class="alert alert-danger" role="alert">
                        <p>Toegang tot de lan-party met computer kost de deelnemer <strong>&euro; 5</strong>. 
                            Hiervoor krijg je een zitplaats met 1 stopcontact, 1 netwerkkabels en 1 consumptie. </p>
                        </div>
                    {{ csrf_field() }}
                    <div class="form-group ">
                    <label for="typeSelect" class="control-label ">inschrijvingtype</label>
                            <select class="form-control typeprofiel" id="typeSelect" name="inschrijvingtype">
                                <option @if($game->typeGamer == "niet-competitieve") selected='selected' @endif value="niet-competitieve">niet-competitieve</option>
                                <option @if($game->typeGamer == "competitieve") selected='selected' @endif value="competitieve">competitieve</option>
                            </select>
                    </div>
                    <div class="gameselection">
                    <div class="form-group ">
                            <label for="formSelect" class="control-label">Game</label>
                                    <select class="form-control" id="gameSelect" name="Game">
                                        @foreach ($games as $item)
                                    <option @if($game->gameID == $item->id) selected='selected' @endif value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                    </div>
                    <div class="form-group">
                        <label for="Teamname">Teamname</label>
                    <input name="teamname" type="text" class="form-control" id="Teamname" placeholder="Teamname" @if(!empty($game->teamname)) value="{{$game->teamname}}"@endif>
                    </div>
                    </div>                
            <button id="submitbutton" name="submitbtton" type="submit" class="btn btn-primary mt-3">Wijziging oplsaan</button>
            </form>
            @if(isset($team)) 
            <div class="gameselection">
                     
            <h4 class="my-3">teamleden 
                @if(!empty($game->teamname))
                {{$game->teamname}}
                @endif</h4>
            <ul class="list-group">
                @foreach ($team as $item)
                <li class="list-group-item"><b>name: </b>{{$item->user()->first()->firstName}} {{$item->user()->first()->lastName}}  <b>Email:</b> {{$item->user()->first()->email}}</li>
                @endforeach
     
               {{-- @if(!empty($user->reminderMail))
                    <li class="list-group-item"><b>Reminder E-mailadres: </b>{{ $user->reminderMail }}</li>
                @endif--}}
            </ul>
            </div>
            @endif
            {{--
            @if(isset($user->team) && isset($user->team[0]->game))
                <h2 class="text-center">Team</h2>
                <ul id="teamProfile" class="list-group">
                    <li class="list-group-item"><b>{{ $user->team[0]->game->name . ": " . $user->team[0]->name }}</b></li>
                    @if(isset($user->team[0]->users))
                        <li class="list-group-item"><b>Leden</b></li>
                        @foreach($user->team[0]->users as $member)
                            <li class="list-group-item">{{ $member->firstName . " " . $member->lastName . " | " . $member->email }}</li>
                        @endforeach
                    @endif
                    @if(isset($user->team[0]->invites))
                        <li class="list-group-item"><b>Pending Invites</b></li>
                        @foreach($user->team[0]->invites as $invite)
                            <li class="list-group-item">{{ $invite->email }}</li>
                        @endforeach
                    @endif
                </ul>
            @endif
                --}}
                @else
                <h4 class="text-danger text-center">geen inschrijving gevonden maak hier onde een nieuwe<h4>
                        <form method="POST" action="createGaming">
                                {{ csrf_field() }}
                                <div class="form-group ">
                                <label for="typeSelect" class="control-label ">inschrijvingtype</label>
                                        <select class="form-control typeprofiel" id="typeSelect" name="inschrijvingtype">
                                            <option selected='selected' value="niet-competitieve">niet-competitieve</option>
                                            <option value="competitieve">competitieve</option>
                                        </select>
                                </div>
                                <div class="gameselection">
                                <div class="form-group ">
                                        <label for="formSelect" class="control-label">Game</label>
                                                <select class="form-control" id="gameSelect" name="Game">
                                                    @foreach ($games as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                                    @endforeach
                                                </select>
                                </div>
                                <div class="form-group">
                                    <label for="Teamname">Teamname</label>
                                <input name="teamname" type="text" class="form-control" id="Teamname" placeholder="Teamname" value="">
                                </div>
                                </div>
            
                        <button id="submitbutton" name="submitbtton" type="submit" class="btn btn-primary mt-3">Wijziging oplsaan</button>
                        </form>
                @endif
            <h2 class="text-center">Activiteiten</h2>
            <form class="profileEdit" method="POST" action="editActivities">
                {{ csrf_field() }}
                @foreach($allActivities as $activity)
                    <div class="input-group">
                        <span class="input-group-addon">
                            <input type="checkbox" value="{{$activity->id}}" name="activities[]"
                                   aria-label="Checkbox for following text input"{{ $activities->contains($activity->id) ? 'checked' : '' }} {{  ($activity->maxUsers - $activity->users->count()) <= 0 && !($activities->contains($activity->id)) ? 'disabled' : '' }}>
                         </span>
                        <input type="text" class="form-control" disabled aria-label="Text input with checkbox"
                               value="{{$activity->name}}">
                    </div>
                @endforeach
                <button id="submitbutton" name="submitbtton" type="submit" class="btn btn-primary mt-3">Activiteiten opslaan</button>
            </form>

            <h2 class="text-center">Opties</h2>
            <form class="profileEdit" method="POST" action="editOptions">
                {{ csrf_field() }}
                @foreach($allOptions as $option)
                    <div class="input-group">
                        <span class="input-group-addon">
                            <input type="checkbox" value="{{$option->id}}" name="options[]"
                                   aria-label="Checkbox for following text input"{{ $options->contains($option->id) ? 'checked' : '' }}>
                         </span>
                        <input type="text" class="form-control" disabled aria-label="Text input with checkbox"
                               value="@if ($option->hasPrice){{$option->name . ": €" . number_format($option->price,2) }}@else{{ $option->name . ": gratis" }}@endif">
                    </div>
                @endforeach
                <button id="submitbutton" name="submitbtton" type="submit" class="btn btn-primary mt-3">Opties opslaan</button>
            </form>

        </div>
    </div>

@endsection
