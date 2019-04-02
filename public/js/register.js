$(document).ready(function () {

    formPages();
    formSelect();
    publicTeams();
    checkForm();
    updateTeam();

    $("#inputGameID").change(function(){
        updateTeam();
    });

});

function formPages() {

    $("#itemRegisterPrevious").click(function(event) {
        event.preventDefault();
        if(!$(this).hasClass("disabled")) {
            if($(this).parent().find(".active").text() == "2") {
                $("#register1").show();
                $("#register2").hide();
                $("#register3").hide();
                $("#itemRegister1").addClass("active");
                $("#itemRegister2").removeClass("active");
                $("#itemRegister3").removeClass("active");
                $("#itemRegisterPrevious").addClass("disabled");
                $("#itemRegisterNext").removeClass("disabled");
            }
            else if($(this).parent().find(".active").text() == "3") {
                $("#register1").hide();
                $("#register2").show();
                $("#register3").hide();
                $("#itemRegister1").removeClass("active");
                $("#itemRegister2").addClass("active");
                $("#itemRegister3").removeClass("active");
                $("#itemRegisterPrevious").removeClass("disabled");
                $("#itemRegisterNext").removeClass("disabled");
            }
        }
    });

    $("#itemRegisterNext").click(function(event) {
        event.preventDefault();

        if(!$(this).hasClass("disabled")) {

            if($(this).parent().find(".active").text() == "1") {
                $("#register1").hide();
                $("#register2").show();
                $("#register3").hide();
                $("#itemRegister1").removeClass("active");
                $("#itemRegister2").addClass("active");
                $("#itemRegister3").removeClass("active");
                $("#itemRegisterPrevious").removeClass("disabled");
                $("#itemRegisterNext").removeClass("disabled");
            }

            else if($(this).parent().find(".active").text() == "2") {
                $("#register1").hide();
                $("#register2").hide();
                $("#register3").show();
                $("#itemRegister1").removeClass("active");
                $("#itemRegister2").removeClass("active");
                $("#itemRegister3").addClass("active");
                $("#itemRegisterPrevious").removeClass("disabled");
                $("#itemRegisterNext").addClass("disabled");
            }
        }
    });

    $(".page-link").click(function(event) {
        event.preventDefault();

        if($(this).html() == "1") {
            $("#register1").show();
            $("#register2").hide();
            $("#register3").hide();
            $("#itemRegister1").addClass("active");
            $("#itemRegister2").removeClass("active");
            $("#itemRegister3").removeClass("active");
            $("#itemRegisterPrevious").addClass("disabled");
            $("#itemRegisterNext").removeClass("disabled");
        }

        if($(this).html() == "2") {
            $("#register1").hide();
            $("#register2").show();
            $("#register3").hide();
            $("#itemRegister1").removeClass("active");
            $("#itemRegister2").addClass("active");
            $("#itemRegister3").removeClass("active");
            $("#itemRegisterPrevious").removeClass("disabled");
            $("#itemRegisterNext").removeClass("disabled");
        }

        if($(this).html() == "3") {
            $("#register1").hide();
            $("#register2").hide();
            $("#register3").show();
            $("#itemRegister1").removeClass("active");
            $("#itemRegister2").removeClass("active");
            $("#itemRegister3").addClass("active");
            $("#itemRegisterPrevious").removeClass("disabled");
            $("#itemRegisterNext").addClass("disabled");
        }


    });

}

function formSelect() {

    $("#formSelect").val("1");

    $("#formSelect").on('change', function() {
        console.log( this.value );

        if(this.value == "2") {
            $("form").attr("action", "storeteam");
            $("#createTeam").show();
            $("#joinTeam").hide();
            $("#members input").prop("required",true);
        } else if(this.value == "3") {
            $("form").attr("action", "registerpublic");
            $("#createTeam").hide();
            $("#joinTeam").show();
            $("#members input").prop("required",false);
        } else if(this.value == "1") {
            $("form").attr("action", "storecasual");
            $("#createTeam").hide();
            $("#joinTeam").hide();
            $("#members input").prop("required",false);
        }

    })

}

function publicTeams() {
    $('#game').on('change', function() {

        console.log(this.value);

        $.ajax({
            url: "/get/teams/"+$(this).val(),
            cache: false,
            success: function(html){
                $("#teamholder").empty().append(html);
            }
        });
    });
}

function checkForm() {
    $("#registerForm #submit").click(function(event){

        console.log("test");

        $("#register1").show();
        $("#register2").hide();
        $("#register3").hide();
        $("#itemRegister1").addClass("active");
        $("#itemRegister2").removeClass("active");
        $("#itemRegister3").removeClass("active");
        $("#itemRegisterPrevious").addClass("disabled");
        $("#itemRegisterNext").removeClass("disabled");


    });
}

function updateTeam(){

    $("#members").html('');


    var gameID = $("#inputGameID").val();
    var teammembers = $("#inputGameID option:selected").data('maxplayers');


    console.log(gameID);
    console.log(teammembers);

    if(teammembers!=1) {
        for (var i = 0; i < teammembers-1; i++) {
            var html2 = "<input type='email' class='form-control' placeholder='E-mail' name='teammembers[]'>";
            $("#members").append(html2);
        }
    }
}

