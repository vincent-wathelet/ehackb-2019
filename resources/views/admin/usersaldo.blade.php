@extends('layouts.app')


@section('content')
<div class="jumbotron container mt-5">
    <div class="btn btn-warning "><a href="{{ url('admin/') }}">Back</a></div>
    <div class="btn btn-success mx-2 "><a href="{{ url('admin/excelsaldo') }}">export</a></div>
    <h1>betaal lijst</h1>
    @isset($users)
    <table class="table table-bordered">
            <tr>
                <th>name</th>
                <th>email</th>
                <th>type</th>
                <th>betalen</th>
            </tr>
        @foreach ($users as $user)
        @php
           $saldo = 0.00; 
        @endphp
        <tr>
                <td>{{$user->firstName}} {{$user->lastName}}</td>
                <td>{{$user->email}}</td>
                <td>
                        {{$user->game()->first()->typeGamer ?? "niet-competitieve"}}
                    
                    @isset($user->game()->first()->typeGamer)
                        
                        @if ($user->game()->first()->typeGamer == 'competitieve')
                        @php
                        $saldo += 5; 
                        @endphp
                        @endif
                @endisset
                </td>
                <td>
                @foreach ($user->options()->get() as $option)
                @isset($option->price)
                @php
                $saldo += $option->price;
                @endphp
                    
                @endisset
                
                @endforeach
                @if($saldo <= 0)
                    <p>0,00 &euro;</p>
                    @else
                    <p>{{$saldo}} &euro;</p>
                    @endif
                </td>
            </tr>
        @endforeach
    @endisset


</div>
@endsection