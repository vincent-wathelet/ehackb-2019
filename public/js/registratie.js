
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

            $(".typeprofiel").on('change',(function() {
                
                if($('.typeprofiel option:selected').text() == "competitieve")
                {
                    $(".gameselection").css("display", "initial");
                }
                else
                {
                    $(".gameselection").css("display",  "none");
                }
            }));
            if($('.typeprofiel option:selected').text() == "competitieve")
            {
                $(".gameselection").css("display", "initial");
            }
        });