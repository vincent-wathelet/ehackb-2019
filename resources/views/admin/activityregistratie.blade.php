@extends('layouts.app')


@section('content')
<div class="jumbotron container mt-5">
        <div class="btn btn-warning "><a href="{{ url('admin/') }}">Back</a></div>
        <div class="btn btn-success mx-2 "><a href="{{ url('admin/excelactivity') }}">export</a></div>
@isset($activitygroup)

@foreach ($activitygroup as $item)
    @if($item->id != 4)
    <h1>{{$item->name}}</h1>
    <table class="table table-bordered">
            <tr>
                <th>name</th>
                <th>description</th>
                <th>show List</th>
            </tr>
    @foreach ($item->activity()->get() as $activity)
        <tr>
        <td>{{$activity->name}}</td>
        <td>{{$activity->description}}</td>
        <td><div class="btn btn-warning"><a class="no-style" href="{{ url('admin/activityreg') }}/{{$activity->id}}">show</a></div></td>
        </tr>
    
    @endforeach
    </table>
    @endif
@endforeach


@endisset
</div>
@endsection