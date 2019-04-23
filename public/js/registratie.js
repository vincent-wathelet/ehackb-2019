
        $(document).ready(function(){
    
            $(".inschrijvingtype").on('change',(function() {
                
                if($('.inschrijvingtype option:selected').text() == "Ik schrijf mij ook in voor een competitieve game.")
                {
                    $(".gameselection").css("display", "initial");
                }
                else
                {
                    $(".gameselection").css("display",  "none");
                }
            }));
        });