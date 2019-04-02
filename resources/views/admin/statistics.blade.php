@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Statistics</div>
                    <div class="panel-body">
                        <h4>Totaal ingeschreven gebruikers: {{ $useramount }}</h4>

                        <hr>

                        <h4>Inschrijvingen per Activiteit</h4>

                        <div class="panel-group col-xs-12" id="accordion222">

                            @foreach($activities as $activity)

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">
                                            <a class="clearfix" data-toggle="collapse" data-parent="#accordionaccordion222" href="#collapse222{{$activity->id}}">
                                                <div class="col-xs-4">{{$activity->name}}</div>
                                                <div class="col-xs-8">({{$activity->users()->count()}}/{{$activity->maxUsers}})</div>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse222{{$activity->id}}" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            @foreach($activity->users as $user)
                                                <p>{{$user->firstName}} {{$user->lastName}} ({{$user->email}})</p>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                        <div class="clearfix"></div>
                        <hr>

                        <h4>Games</h4>
                        @foreach($games as $game)
                            <div class="col-xs-12">
                                <h4 class="col-xs-4">{{$game->name}}:</h4>
                            </div>
                            <div class="clearfix"></div>

                            <div class="panel-group col-xs-12" id="accordion111{{$game->id}}">

                                @foreach($game->teams as $team)

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h5 class="panel-title">
                                                <a class="clearfix" data-toggle="collapse" data-parent="#accordionaccordion111{{$game->id}}" href="#collapse111{{$game->id . $team->id}}">
                                                    <div class="col-xs-4">{{$team->name}}</div>
                                                    <div class="col-xs-8">({{$team->users->count()}}/{{$game->maxPlayers}})</div>
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapse111{{$game->id . $team->id}}" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                @foreach($team->users as $user)
                                                    <p>{{$user->email}}{{ $team->leaderID == $user->id ? " (Captain)" : "" }}</p>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop