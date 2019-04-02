@extends('layouts.print')

@section('content')

    <section class="sheet padding-10mm">

        <img src="{{asset('img/ehackb.png')}}" alt="EhackB Logo">
        <h1>Programma EhackB </h1>
        <h3>{{$user->firstName . ' ' . $user->lastName}}</h3>
        <table>
            <tr>
                <td>Activiteit</td>
                <td>Begin</td>
                <td>Einde</td>
                <td>Locatie</td>
            </tr>
        @foreach($activities as $activity)
            <tr>
                <td>{{$activity->name}}</td>
                <td>{{date("H:i",strtotime($activity->startDate))}}</td>
                <td>{{date("H:i",strtotime($activity->endDate))}}</td>
                <td>{{$activity->location}}</td>
            </tr>
        @endforeach
        </table>

        <p>Deze keuzes kunnen nog naar wens aangepast worden.</p>

    </section>

@endsection