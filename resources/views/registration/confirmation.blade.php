@extends('layouts.register')

@section('content')
@if(!empty($succ))
<div class="alert alert-success confirmMessage">
    <p> {{ $succ }}</p>
</div>
@else
  <div class="alert alert-danger confirmMessage">
      <p>{{ $err }}</p>
  </div>
@endif
@stop
