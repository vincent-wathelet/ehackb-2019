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
                        <h4>Nieuwe activiteit</h4>
                        <form method="POST" class="form">

                            {{ csrf_field() }}

                            <input type="hidden" name="formtype" value="newactivity">

                            <div class="form-group col-md-8">
                                <label for="newactivity_name">Naam van de activiteit</label>
                                <input type="text" id="newactivity_name" class="form-control" name="name"
                                       autocomplete="off" required>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="newactivity_maxpersons">Maximum aantal personen</label>
                                <input type="number" id="newactivity_maxpersons" class="form-control"
                                       name="maxpersons" min="0"
                                       value="60" autocomplete="off" required>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="newactivity_type">Type</label>
                                <select id="newactivity_type" class="form-control" name="groupid" required>
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="newactivity_desc">Beschrijving</label>
                                <textarea id="newactivity_desc" name="desc" class="form-control"
                                          rows="4"></textarea>
                            </div>

                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-primary">Verzenden</button>
                            </div>


                        </form>

                        <div class="clearfix"></div>
                        <hr>

                        <h4>Bewerk activiteit</h4>
                        <form method="POST" class="form">

                            {{ csrf_field() }}

                            <input type="hidden" name="formtype" value="editactivity">

                            <div class="form-group col-md-12">
                                <label for="editactivity_id">Naam van de activiteit</label>
                                <select id="editactivity_id" class="form-control" name="id" required>
                                    <option value=""></option>
                                    @foreach ($activities as $activity)
                                        <option value="{{$activity->id}}">{{$activity->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-8">
                                <label for="editactivity_name">Naam van de activiteit</label>
                                <input type="text" id="editactivity_name" class="form-control" name="name"
                                       autocomplete="off" required>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="editactivity_maxpersons">Maximum aantal personen</label>
                                <input type="number" id="editactivity_maxpersons" class="form-control"
                                       name="maxpersons" min="0"
                                       value="60" autocomplete="off" required>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="editactivity_type">Type</label>
                                <select id="editactivity_type" class="form-control" name="groupid" required>
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="editactivity_desc">Beschrijving</label>
                                <textarea id="editactivity_desc" name="desc" class="form-control"
                                          rows="4"></textarea>
                            </div>

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
        $('#editactivity_id').on('change', function () {
            $.ajax({
                url: "/admin/activity/" + $('#editactivity_id').val()
            }).done(function (msg) {
                $('#editactivity_name').val(msg.name);
                $('#editactivity_maxpersons').val(msg.maxUsers);
                $('#editactivity_type').val(msg.activityGroupID);
                $('#editactivity_desc').val(msg.description);
            });
        });
    </script>
@stop