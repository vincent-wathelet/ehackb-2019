@extends('layouts.app')


@section('content')
<div class="btn btn-warning "><a href="{{ URL::previous() }}">Back</a></div>
@isset($game)

<p>{{$game}}</p>

<form>
    
</form>
@endisset

@endsection