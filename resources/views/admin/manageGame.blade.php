@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @if($error == 0)
                    <div class="alert alert-success">
                        {{ is_null($errormsg) ? "De activiteit werd opgeslagen." : $errormsg }}
                    </div>
                @elseif($error == 1)
                    <div class="alert alert-danger">
                        {{ is_null($errormsg) ? "Er ging iets mis!" : $errormsg }}
                    </div>
                @endif
                <div class="panel panel-default">
                    <div class="panel-heading">Manage</div>
                    <div class="panel-body">
                        <h4>Nieuwe game</h4>
                        <form method="POST" class="form">

                            {{ csrf_field() }}

                            <input type="hidden" name="formtype" value="newgame">

                            <div class="form-group col-md-12">
                                <label for="newgame_name">Naam van de game</label>
                                <input type="text" id="newgame_name" class="form-control" name="name" autocomplete="off"
                                       required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="newgame_maxpersons">Aantal personen per team</label>
                                <input type="number" id="newgame_maxpersons" class="form-control" name="maxpersons"
                                       min="0" value="5" autocomplete="off" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="newgame_maxteams">Maximum aantal teams</label>
                                <input type="number" id="newgame_maxteams" class="form-control" name="maxteams"
                                       min="0" value="15" autocomplete="off" required>
                            </div>


                            <div class="form-check col-md-12">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="isSingle" value="">
                                    Dit spel is single player
                                </label>
                            </div>
                            <div class="clearfix"></div>
                            <br>

                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-primary">Verzenden</button>
                            </div>


                        </form>

                        <div class="clearfix"></div>
                        <hr>

                        <h4>Bewerk game</h4>
                        <form method="POST" class="form">

                            {{ csrf_field() }}

                            <input type="hidden" name="formtype" value="editgame">

                            <div class="form-group col-md-12">
                                <label for="editgame_id">Naam van de game</label>
                                <select id="editgame_id" class="form-control" name="id" required>
                                    <option value=""></option>
                                    @foreach ($games as $game)
                                        <option value="{{$game->id}}">{{$game->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="editgame_name">Naam van de game</label>
                                <input type="text" id="editgame_name" class="form-control" name="name"
                                       autocomplete="off" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="editgame_maxpersons">Aantal personen per team</label>
                                <input type="number" id="editgame_maxpersons" class="form-control" name="maxpersons"
                                       min="0" value="5" autocomplete="off" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="editgame_maxteams">Maximum aantal teams</label>
                                <input type="number" id="editgame_maxteams" class="form-control" name="maxteams"
                                       min="0" value="15" autocomplete="off" required>
                            </div>


                            <div class="form-check col-md-12">
                                <label class="form-check-label">
                                    <input id="editgame_isSingle" class="form-check-input" type="checkbox"
                                           name="isSingle" value="">
                                    Dit spel is single player
                                </label>
                            </div>
                            <div class="clearfix"></div>
                            <br>

                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-primary">Verzenden</button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script>
        $('#editgame_id').on('change', function () {
            $.ajax({
                url: "/admin/game/" + $('#editgame_id').val()
            }).done(function (msg) {
                $('#editgame_name').val(msg.name);
                $('#editgame_maxpersons').val(msg.maxPlayers);
                $('#editgame_maxteams').val(msg.maxTeams);
                if (msg.isSingleplayer == 1) {
                    $('#editgame_isSingle').prop("checked", true);
                } else {
                    $('#editgame_isSingle').prop("checked", false);
                }
            });
        });
    </script>
@stop