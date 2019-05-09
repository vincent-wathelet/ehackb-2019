@extends('layouts.app')


@section('content')

@isset($activity)
<div class="jumbotron container mt-5">
    <table>
        <tr>
            <td><h1>{{$activity->name}} lijst</h1></td>
            <td><div class="btn btn-warning "><a href="{{ URL::previous() }}">Back</a></div></td>
        </tr>
    </table>
    <table class="table table-bordered">
        <tr>
            <th>email</th>
            <th>naam </th>
        </tr>
        @isset($inschrijving)
        @foreach ($inschrijving as $item)
        @isset($item->users()->first()->email)
        <tr>
            <td>@isset($item->users()->first()->email){{$item->users()->first()->email}}@endisset</td>
            <td>@isset($item->users()->first()->firstName){{$item->users()->first()->firstName}}@endisset @isset($item->users()->first()->lastName){{$item->users()->first()->lastName}}@endisset</td>
        </tr>
        @endisset
        @endforeach
        @endisset
    </table>
</div>

@endisset

@endsection