@extends('layouts.app')


@section('head')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">  
@endsection

@section('content')
    <div class="container">
    <div class="row my-5 mx-5">
        <div class="card mx-auto text-center">
            <div class="card-body">
                <a class="nav-link" href="{{ url('/admin/gamereg') }}">
                    <div class="card-titel" ><h5>Inschrijving games</h5></div>
                </a>
            </div>
        </div>
        <div class="card mx-auto">
            <div class="card-body">
                <a class="nav-link" href="{{ url('/admin/activityreg') }}">
                    <div class="card-titel" >
                        <h5>inschrijving activiteiten</h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="card mx-auto">
                <div class="card-body">
                    <a class="nav-link" href="{{ url('/admin/usersaldo') }}">
                        <div class="card-titel" >
                            <h5>User saldo</h5>
                        </div>
                    </a>
                </div>
         </div>
    </div>
    
    </div>
@stop