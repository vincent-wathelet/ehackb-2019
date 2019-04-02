/**
 * Created by Kamiel Klumpers on 20/11/2016.
 */

function updateView(){
     $("#members").html('');

    var value = $("#inputGameID").val();
    var myArray = value.split(",");
    var gameID = myArray[0];

    var teammembers = myArray[1];
    console.log("teammembers" + teammembers);

    if(teammembers!=1) {
        for (var i = 0; i < teammembers-1; i++) {
            var html2 = "<input type='text' class='form-control' placeholder='E-mail' name='teammembers[]' required>";
            $("#members").append(html2);
        }
    }
}

$(function(){
    window.alert("sometext");
    updateView();

    $("#inputGameID").change(function(){
        updateView();
    });

    $("#submitbutton").click(function(){
        $("form#registerteamform").submit();
    });

});
