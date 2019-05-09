@extends('layouts.app')


@section('content')
<div class="jumbotron container mt-5">
<div class="btn btn-warning "><a href="{{ url('admin/') }}">Back</a></div>
<div class="btn btn-success mx-2 "><a href="{{ url('/admin/excelgame') }}">export</a></div>
@isset($games)

    @foreach ($games as $item)
        <h1>{{$item->name}}</h1>
        <table class="table table-bordered">
            <tr>
                <th>name</th>
                <th>email</th>
                <th>teamname</th>
            </tr>
        @foreach ($item->game()->get()->sortBy('teamname') as $enrty)
        <tr>
            <td>
                    @isset($enrty->user()->first()->firstName){{$enrty->user()->first()->firstName}}@endisset @isset($enrty->user()->first()->lastName){{$enrty->user()->first()->lastName}}@endisset</td>
            <td>@isset($enrty->user()->first()->email){{$enrty->user()->first()->email}}@endisset</td>
            <td>{{$enrty->teamname}}</td>
        </tr>
            
        @endforeach
        </table>
    @endforeach
       
@endisset
</div>
@endsection