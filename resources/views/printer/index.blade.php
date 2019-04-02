@extends('layouts.kassa')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="form-group col-sm-12">
                            <select data-placeholder="Klik om te zoeken"
                                    class="form-control chosen-select form-control-lg" id="search" name="search">
                                <option value=""></option>
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->firstName }} {{ $user->lastName }}
                                        ({{ $user->email }})
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <input type="hidden" id="selected-id" value="0">
                        <input type="hidden" id="isPresent" value="0">
                        <div class="form-group col-sm-6">
                            <label for="firstname">Voornaam</label>
                            <input type="text" class="form-control disabled" id="firstname" disabled>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="lastname">Achternaam</label>
                            <input type="text" class="form-control disabled" id="lastname" disabled>
                        </div>
                        <div class="form-group col-sm-12">
                            <label for="email">Email</label>
                            <input type="email" class="form-control disabled" id="email" disabled>
                        </div>
                        <div class="clearfix"></div>
                        <br>
                        <div class="form-group col-sm-6">
                            <button id="present-button" class="btn btn-success" disabled>
                                <span id="present-icon" class="fa fa-check"></span>
                                <span id="present-text">Markeer als aanwezig</span>
                            </button>

                            <button id="print-button" class="btn btn-primary" disabled>
                                <span class="fa fa-print"></span>
                                <span> Print agenda</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script src="/js/jquery.min.js" type="text/javascript"></script>
    <script src="/js/chosen.jquery.min.js" type="text/javascript"></script>
    <script src="/js/docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
    <script src="/js/docsupport/init.js" type="text/javascript" charset="utf-8"></script>

    <script>
        $("#search").on('change', function () {
            $.ajax({
                type: "GET",
                url: "/print/users",
                data: {"id": $(this).val()},
                success: function (json) {
                    $("#selected-id").val(json[0].id);
                    $("#firstname").val(json[0].firstName);
                    $("#lastname").val(json[0].lastName);
                    $("#email").val(json[0].email);
                    $("#isPresent").val(json[0].isPresent);
                    $("#present-button").prop("disabled", false);
                    $("#print-button").prop("disabled", false);

                    if (json[0].isPresent === 1) {
                        $("#present-button").removeClass("btn-success");
                        $("#present-icon").removeClass("fa-check");

                        $("#present-button").addClass("btn-danger");
                        $("#present-icon").addClass("fa-times");

                        $("#present-text").text("Markeer als niet aanwezig")
                    } else {
                        $("#present-button").removeClass("btn-danger");
                        $("#present-icon").removeClass("fa-times");

                        $("#present-button").addClass("btn-success");
                        $("#present-icon").addClass("fa-check");

                        $("#present-text").text("Markeer als aanwezig")
                    }

                    console.log(json);
                }
            });
        });

        $("#present-button").on('click', function () {
            $.ajax({
                type: "POST",
                url: "/print/users",
                data: {
                    "id": $("#selected-id").val(),
                    "isPresent": $("#isPresent").val() == 0 ? 1 : 0
                },
                success: function (json) {
                    $("#selected-id").val(json[0].id);
                    $("#firstname").val(json[0].firstName);
                    $("#lastname").val(json[0].lastName);
                    $("#email").val(json[0].email);
                    $("#isPresent").val(json[0].isPresent);
                    $("#present-button").prop("disabled", false);
                    $("#print-button").prop("disabled", false);

                    if (json[0].isPresent === 1) {
                        $("#present-button").removeClass("btn-success");
                        $("#present-icon").removeClass("fa-check");

                        $("#present-button").addClass("btn-danger");
                        $("#present-icon").addClass("fa-times");

                        $("#present-text").text("Markeer als niet aanwezig")
                    } else {
                        $("#present-button").removeClass("btn-danger");
                        $("#present-icon").removeClass("fa-times");

                        $("#present-button").addClass("btn-success");
                        $("#present-icon").addClass("fa-check");

                        $("#present-text").text("Markeer als aanwezig")
                    }

                    console.log(json);
                }
            });
        });

        $("#print-button").on("click", function () {
            var printWindow = window.open("/print/" + $("#selected-id").val(), 'Print', 'left=200, top=200, width=600, height=630, toolbar=0, resizable=0');
            printWindow.addEventListener('load', function(){
                printWindow.print();
                printWindow.close();
            }, true);
        })
    </script>
@stop