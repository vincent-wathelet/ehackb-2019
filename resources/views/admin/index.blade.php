@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Welkom, {{ $name }}!</div>
                    <div class="panel-body">
                        <a href="{{ url('admin/statistics') }}">Bekijk statistieken voor EhackBv5.</a>
                    </div>
                    <div class="panel-body">
                        <a href="{{ url('admin/manage') }}">Beheer het EhackB platform.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop