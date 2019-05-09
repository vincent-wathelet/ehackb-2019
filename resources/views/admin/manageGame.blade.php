@extends('layouts.app')


@section('content')
<div class="jumbotron container mt-5 text-center">
<div class="btn btn-warning "><a href="{{ url('admin/') }}">Back</a></div>
@isset($games)

    <table class="table table-bordered">
        <tr>
            <th>name</th>
            <th>Singleplayer</th>
            <th>maxPlayers</th>
            <th>maxTeams</th>
            <th>edit</th>
        </tr>
   @foreach ($games as $game)
        <tr>
            <td class="text-left">{{$game->name}}</td>
            <td>@if($game->isSingleplayer == 0)
                false
                @else
                true
                @endif
            </td>
            <td>{{$game->maxPlayers}}</td>
            <td>{{$game->maxTeams}}</td>
        <td><div class="btn btn-warning"><a href="{{ url('/admin/game') }}/{{$game->id}}">edit</a></div></td>
        </tr>
   @endforeach
    </table>
       
@endisset
</div>
@endsection

