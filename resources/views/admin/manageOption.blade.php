@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @if($error == 0)
                    <div class="alert alert-success">
                        {{ is_null($errormsg) ? "De activiteit werd opgeslagen." : $errormsg }}
                    </div>
                @elseif($error == 1)
                    <div class="alert alert-danger">
                        {{ is_null($errormsg) ? "Er ging iets mis!" : $errormsg }}
                    </div>
                @endif
                <div class="panel panel-default">
                    <div class="panel-heading">Manage</div>
                    <div class="panel-body">
                        <h4>Nieuwe optie</h4>
                        <form method="POST" class="form">

                            {{ csrf_field() }}

                            <input type="hidden" name="formtype" value="newoption">

                            <div class="form-group col-md-8">
                                <label for="newoption_name">Naam van de optie</label>
                                <input type="text" id="newoption_name" class="form-control" name="name"
                                       autocomplete="off" required>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="newoption_price">Prijs</label>
                                <input type="number" id="newoption_price" step="0.01" min="0" class="form-control" name="price" value="5"
                                       autocomplete="off" required>
                            </div>

                            <div class="form-check col-md-12">
                                <label class="form-check-label">
                                    <input id="newoption_hasPrice" class="form-check-input" type="checkbox"
                                           name="hasPrice" value="">
                                    Optie heeft een prijs
                                </label>
                            </div>
                            <div class="clearfix"></div>
                            <br>

                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-primary">Verzenden</button>
                            </div>

                        </form>

                        <div class="clearfix"></div>
                        <hr>

                        <h4>Bewerk optie</h4>
                        <form method="POST" class="form">

                            {{ csrf_field() }}

                            <input type="hidden" name="formtype" value="editoption">

                            <div class="form-group col-md-12">
                                <label for="editoption_id">Naam van de game</label>
                                <select id="editoption_id" class="form-control" name="id" required>
                                    <option value=""></option>
                                    @foreach ($options as $option)
                                        <option value="{{$option->id}}">{{$option->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-8">
                                <label for="editoption_name">Naam van de optie</label>
                                <input type="text" id="editoption_name" class="form-control" name="name"
                                       autocomplete="off" required>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="editoption_price">Prijs</label>
                                <input type="number" id="editoption_price" step="0.01" min="0" class="form-control" name="price" value="5"
                                       autocomplete="off" required>
                            </div>


                            <div class="form-check col-md-12">
                                <label class="form-check-label">
                                    <input id="editoption_hasPrice" class="form-check-input" type="checkbox"
                                           name="hasPrice" value="">
                                    Optie heeft een prijs
                                </label>
                            </div>
                            <div class="clearfix"></div>
                            <br>

                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-primary">Verzenden</button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script>
        $('#editoption_id').on('change', function () {
            $.ajax({
                url: "/admin/option/" + $('#editoption_id').val()
            }).done(function (msg) {
                $('#editoption_name').val(msg.name);
                $('#editoption_price').val(msg.price);
                if (msg.hasPrice == 1) {
                    $('#editoption_hasPrice').prop("checked", true);
                } else {
                    $('#editoption_hasPrice').prop("checked", false);
                }
            });
        });
    </script>
@stop