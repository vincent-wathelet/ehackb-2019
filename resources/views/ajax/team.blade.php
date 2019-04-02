@if(!empty($teams))
@foreach($teams as $team)
      <div class="input-group">
          <span class="input-group-addon">
              <input type="radio" value="{{$team->id}}" name="team" >
          </span>
          <input type="text" class="form-control publicTeam" disabled aria-label="Text input with checkbox" value=" {{$team->name}} - Plaatsen: {{ ($team->game->maxPlayers) - $team->invites()->count() - $team->users()->count() }}">
      </div>
      <a class="btn btn-info" href="mailto:{{ $team->leader->email }}" target="_top">Mail naar de teamleader</a>
@endforeach
@else
  <p>Geen publieke teams beschikbaar voor deze game</p>
@endif
