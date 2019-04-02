$(document).ready(function () {

    countDown();
    overlays();
    menuActiveState();
    closeMenuOnClick();

});

function overlays() {

    $(".showOverlay").click(function (event) {

        event.preventDefault();

        if ($(this).attr("id") == "userfull") {
            $("#overlay .title").html("Internet of Things (Audi 4)");
            $("#overlay .text").html("Bart heeft een passie voor technologie en mensen, werkt als Business Alignement Manager bij Userfull. Hij is oprichter van Internet of Things Leuven en tracht via die weg verschillende stakeholders uit het IoT-landschap samen aan tafel te brengen (zoals bedrijven, fabrikanten, eindgebruikers en ontwikkelaars).<br><br>Met Internet of Things Leuven wil Bart peer-to-peerdiscussie aanmoedigen en zorgen voor kennisdeling.<br><br>Over de presentatie?<br><br>Antwoorden op vragen zoals:<br><ul><li>Wat is de echte waarde van IoT?</li><li>Wat is de impact van IoT?</li><li>Grote uitdagingen?</li><li>Hoe start je met het designen van een IoT oplossing?</li></ul>");
        }
        if ($(this).attr("id") == "createcorner") {
            $("#overlay .title").html("Create Corner");
            $("#overlay .text").html("In de CREATE-corner kunnen de creatieve breinen aan de slag om in hackathon stijl met de nieuwste technologieën aan de slag te gaan. Microcontrollers, IOT en AI behoren tot de mogelijkheden. Doorlopend is er een photoshop contest waar ludieke prijzen worden uitgedeeld, en verschillende showcases rond virtual reality en fysieke opstellingen om de verbeelding helemaal los te laten gaan.");
        }
        if ($(this).attr("id") == "accenture") {
            $("#overlay .title").html("Security war stories from the trenches (Audi 4)");
            $("#overlay .text").html("Join Accenture’s team of security consultants and learn how they help Fortune 500 companies solve their latest security challenges.<br><br>In this session you will be immersed into first-hand stories  about the security challenges Accenture’s clients are struggling with. You will get a direct insight into what security consulting looks like and how consultants blend people, process and technology to achieve enterprises that are resilient to today’s evolving threat landscape.");
        }
        if ($(this).attr("id") == "welden") {
            $("#overlay .title").html("Indie Game Development (Audi 4)");
            $("#overlay .text").html("Een blik achter de schermen van een independent gamebedrijf. Het verhaal achter het populaire VR-spel \"Space Pirate Trainer\", de vele facetten van het concept tot versie 1.0, en het overleven als bedrijf in een leuke, maar harde, sector.");
        }
        if ($(this).attr("id") == "ctf") {
            $("#overlay .title").html("Capture the flag (Grote zaal)");
            $("#overlay .text").html("This is a CTF geared towards students without or with a basic knowledge about software security. We will discuss at Three subjects, SQL Injection, cross site scripting and authentication systems. We will start with an explanation (assuming zero security knowledge) after which there will be time for exercises that are presented in a CTF format. This will enable students to work together and measure their progress against their peers. There will be people guiding the students. There will be a separate CTF with different challenges without explications for those who have some knowledge or who want to try other challenges as well. <br><br>Steven Wierckx is application security expert and trainer at Toreon. He is also the project leader for the OWASP threat model project. Steven is a software and security Tester with 15 years of experience in programming, training, security testing, source code review, test automation, functional and technical analysis, development and database design. Steven has a passion for web application security. He is instructor for several secure coding, mobile app testing and threat modeling courses.");
        }
        if ($(this).attr("id") == "checkpoint") {
            $("#overlay .title").html("ZERO-Day prevention (Audi 1)");
            $("#overlay .text").html("Hackers passen hun strategieën en technieken voortdurend aan om detectie te omzeilen en bedrijfsgegevens te ontvreemden.<br><br>Zero-day en advanced persistent threats gebruiken het verrassingselement om de traditionele beveiliging te omzeilen, waardoor deze bedreigingen moeilijk te beveiligen zijn en erg populair zijn bij hackers. Traditionele sandboxing is ontworpen om te helpen met dit soort bedreigingen, maar cybercriminelen hebben hun technieken ontwikkeld en ontwikkelden ontwijkende malware die detectie door veel sandbox-oplossingen kan voorkomen. Ten gevolge vinden veel organisaties stappen om infecties tegen te gaan, in plaats van het te voorkomen.<br><br>Om vooruit te komen, hebben bedrijven een veelzijdige preventiestrategie nodig die proactieve bescherming combineert die bedreigingen elimineert voordat ze gebruikers bereiken, en ultramoderne detectie van CPU-niveaus om zelfs de meest gecamoufleerde bedreigingen bloot te leggen.<br><br>Zero-day bescherming van Check Point biedt een dieper niveau van inspectie, zodat u meer malware en zero-day-aanvallen kunt voorkomen, terwijl u zorgt voor een snelle levering van veilige inhoud aan uw gebruikers.<br><br><br>Als security engineer bij Check Point ben ik verantwoordelijk voor de technische kant van het verhaal in de pre-sales fase.<br><br>Een van de belangrijkste verantwoordelijkheden is adviseren van zowel nieuwe als bestaande klanten in het toepassen van de best practice in hun security infrastructuur in datacenters, virtuele datacenters, cloud, endpoint en mobile. In 2009 ben ik afgestuurd aan de Eramushogeschool in Toegepast informatica.<br><br>Na mijn studies heb ik mij steeds verder verdiept in netwerk en security engineering bij zowel integratoren als distributeurs en heb ik enkele jaren als Trainer gewerkt.");
        }
        if ($(this).attr("id") == "toreon1") {
            $("#overlay .title").html("Whiteboard Hacking aka Hands-on Threat Modeling (Audi 5)");
            $("#overlay .text").html("Threat modeling is a structured activity for identifying and evaluating application threats and vulnerabilities. It also allows consideration of security issues at the component or application level. The threat modeling session will teach you to perform threat modeling through a series of workshops, where our trainer will guide you through the different stages of a practical threat model.<br><br>Threat modeling introduction (1 hour):<br><br>Threat modeling in a secure development lifecycle<br>What is threat modeling<br>Why threat modeling?<br>Threat modeling stages<br>Diagrams<br>Identify threats<br>Addressing threats<br>Document a threat model");
        }
        if ($(this).attr("id") == "toreon2") {
            $("#overlay .title").html("STRIDE analysis of an B2B web and mobile applications, sharing the same REST backend (hands-on) (Lokaal A.0.011)");
            $("#overlay .text").html("Hands-on (1 hour):<br>STRIDE analysis of an B2B web and mobile applications, sharing the same REST backend<br>The students will be challenged to perform practical threat modeling in groups of 3 to 4 people covering the different stages of threat modeling.<br><br>Before attending this course, students should be familiar with basic knowledge of web, mobile applications and development principles.<br><br>Sebastien Deleersnyder (<a href=\"https://www.linkedin.com/in/sebadele/\">www.linkedin.com/in/sebadele/</a> - lead application security consultant Toreon) led engagements in the domain of ICT-security, Web and Mobile Security with several customers in the private and public sector. Sebastien is the Belgian OWASP Chapter Leader and is co-project leader of OWASP SAMM.");
        }
        if ($(this).attr("id") == "wireshark") {
            $("#overlay .title").html("Analyzing network traffic (hands-on) (Lokaal C.2.209)");
            $("#overlay .text").html("From packet zero to packet hero<br><br>Erik Vanderhasselt is de managing director van Xiobe. Erik is zijn carriere begonnen op een helpdesk waar hij de waarde van communicatie en overtuiging leerde. Nadien werd hij Database Administrator waar hij de wereld van de consultancy leerde kennen en zijn technische kennis heeft ontwikkeld. Erik zette zijn eerste stappen in security in de 2e helft van de jaren 90, en toen de opportuniteit zich stelde heeft hij ze gegrepen om van zijn hobby zijn beroep te maken.<br><br>Toen hij bij CERT.be werkt werd hem gevraagd om voor EHB een presentatie te doen en tijdens deze presentatie stelde hij de studenten voor om samen met het onderwijzend personeel eventueel te kijken naar legale opties rond hacken om de studenten hun kennis over security te ontwikkelen. Ondertussen zijn we enkele jaren verder en EHackB is een jaarlijks gebeuren.<br><br>Wireshark, elke IT-er heeft er al van gehoord. Een packet trace openen en een beetje kijken naar de packets is de standard ervaring. In deze workshop neemt Erik je mee en gaan we dieper in op een tool die je Zwitsers zakmes zal worden als je weet wat je er mee kan. Op het programma:<br><br>- Profiles<br>- Filters<br>- Data Extraction<br>- Analysis & reporting<br>- Expert information<br>- Troubleshooting Exercises (hands-on)<br><br>Om deel te nemen breng je een laptop mee met daarop een werkende installatie van wireshark indien mogelijk. Er zullen ook pc’s voorzien worden. De traces zullen enkele dagen voor EHackB worden aangeleverd via de Erasmushogeschool. Netwerk protocol kennis is vereist maar we gaan over de basics.");
        }
        if ($(this).attr("id") == "barracuda") {
            $("#overlay .title").html("Koert Martens (Kappa Data) (Audi 5)");
            $("#overlay .text").html("Security & Networking in the Cloud Generation.");
        }
        if ($(this).attr("id") == "guardsquare") {
            $("#overlay .title").html("Mobile application protection & reverse engineering (Audi 1)");
            $("#overlay .text").html("A mobile application in the wild is exposed to a multitude of threats that are quite easy to orchestrate. In this presentation, I will discuss how static and dynamic analysis opens up different attack vectors for mobile applications. I will discuss common threats to mobile apps, and outline how code hardening techniques and run-time application self-protection (RASP) mechanisms can mitigate such threats.<br><br>Irasara Senarathne is a Pre-sales and services engineer at GuardSquare. She holds an M.Sc. in Computer Science and specializes in mobile security. Irasara is one of the technical specialists at GuardSquare, she offers assistance to customers, performs penetration testing and contributes to product R&D.");
        }
        if ($(this).attr("id") == "cegeka") {
            $("#overlay .title").html("Een Security Operation Center – voorbeelden ‘from the field’ (Audi 4)");
            $("#overlay .text").html("Het principe van een NOC (Network Operations Center) is al wijdverspreid: aan de hand van next generation firewalls, web application firewalls, web en mail gateways, antivirus,… investeren vele bedrijven al jaren fortuinen aan maatregelen die instaan voor “protect”.  Desondanks worden er dagelijks nog bedrijven gehackt, met grote reputatie- en financiële verliezen tot gevolg.  De cyberbedreigingen worden steeds meer geavanceerd en het wordt steeds meer een uitdaging om een cyberaanval te vermijden.  Vandaar dat er steeds meer wordt gefocust op “detect” en “respond” – naast “protect” – om een impact van een onvermijdelijke cyberaanval zoveel mogelijk te verminderen.  Dit gebeurt typisch in een SOC (Security Operations Center) en in dit seminarie bekijken we hoe zo een SOC zich organiseert aan de hand van voorbeelden “from the field”.");
        }

        if ($(this).attr("id") == "csgo") {
            $("#overlay .title").html("CS:GO");
            $("#overlay .text").html("Voor het Counter Strike: Global Offensive starten we met een poulesysteem waarbij er 2 poules van 5 teams zijn. Elk team zal eenmaal tegen elk team spelen en de 2 teams die het meeste hebben gewonnen gaan door naar de volgende ronde. In deze ronde zal er met een bracket systeem gewerkt worden voor de 4 overblijvende teams. Als je wint ga je door naar de volgende ronde in de bracket als je verliest is het gedaan. De games worden gespeeld op servers voorzien door de organisatie.");
        }
        if ($(this).attr("id") == "hearthstone") {
            $("#overlay .title").html("Hearthstone");
            $("#overlay .text").html("Voor het Hearthstone toernooi zal er gespeeld worden met een bracket systeem voor 16 spelers. Om naar de volgende ronde te kunnen gaan zullen de spelers de overwinning moeten behalen in een Best ou of 5.");
        }
        if ($(this).attr("id") == "fifa") {
            $("#overlay .title").html("FIFA");
            $("#overlay .text").html("<ul><li>Round of 32: 6 minuten</li><li>Quarterfinal: 6 minuten</li><li>Semifinals: 8 </li><li>Third place: 8 minuten</li><li>Final: 8 minuten</li></ul>");
        }
        if ($(this).attr("id") == "lol") {
            $("#overlay .title").html("League of Legends");
            $("#overlay .text").html("Voor het League of Legends tornooi gaan we werken met een poulesysteem waarbij er 2 poules van 4 teams zijn. Elk team zal eenmaal tegen elk team spelen en de 2  teams die het meeste hebben gewonnen gaan door naar de volgende ronde. In deze ronde zal er met een bracket systeem gewerkt worden voor de 4 overblijvende teams. Als je wint ga je door naar de volgende ronde in de bracket als je verliest is het gedaan. We gebruiken de custom draft game mode provided door het spel zelf. Er zullen ook vaak mods en streamers aanwezig zijn in deze games om zo het tornooi vlot te laten verlopen. Ben je geïnteresseerd schrijf je dan hieronder in. Who will be the last one standing on the Rift?");
        }
        if ($(this).attr("id") == "ssb") {
            $("#overlay .title").html("Super Smash Bros");
            $("#overlay .text").html("<ul><li>2 levens, 3 minuten timer (+ sudden death)</li><li>Items zijn uitgeschakeld</li><li>Geen custom moves</li><li>Geen custom equips</li><li>Default mii’s zijn toegelaten</li><li>Mii’s overzetten is verboden</li><li>DLC characters zijn toegelaten</li><li>Er wordt niet gewisseld van character tussen verschillende rondes</li><li>Alleen “Omega’ maps zijn toegelaten en worden random geselecteerd</li></ul>");
        }
        if ($(this).attr("id") == "rl") {
            $("#overlay .title").html("Rocket League");
            $("#overlay .text").html("Denk jij tegen de pro's op te kunnen? Laat dan jouw skills zien op ons 2v2 rocket league toernooi. Samen met een vriend kan je je inschrijven en kans maken op mooie prijzen. Het toernooi zal gespeeld worden op eigen computer.");
        }

        if ($(this).attr("id") == "hack") {
            $("#overlay .title").html("Hack");
            $("#overlay .text").html("");
        }
        if ($(this).attr("id") == "casual") {
            $("#overlay .title").html("Casual");
            $("#overlay .text").html("");
        }
        if ($(this).attr("id") == "create") {
            $("#overlay .title").html("Create");
            $("#overlay .text").html("");
        }
        if ($(this).attr("id") == "competitive") {
            $("#overlay .title").html("Competitive Gaming");
            $("#overlay .text").html("");
        }
        if ($(this).attr("id") == "food") {
            $("#overlay .title").html("Food &amp; Drinks");
            $("#overlay .text").html("");
        }
        if ($(this).attr("id") == "learn") {
            $("#overlay .title").html("Learn");
            $("#overlay .text").html("");
        }
        if ($(this).attr("id") == "vr") {
            $("#overlay .title").html("Virtual Reality");
            $("#overlay .text").html("");
        }
        if ($(this).attr("id") == "teamspeak") {
            $("#overlay .title").html("Teamspeak");
            $("#overlay .text").html("");
        }

        if ($(this).attr("id") == "fietsen") {
            $("#overlay .title").html("Stappen - Fietsen");
            $("#overlay .text").html("Stappen<br> De Nijverheidskaai 170 bevindt zich aan het kanaal Brussel - Charleroi, naast de slachthuizen in Anderlecht.<br><br> Trappen<br> Met de fiets gebruik je het best de 'flat track' routes. Als je geen fiets hebt, kan je er altijd één huren bij Villo of Blue Bike.");
        }

        if ($(this).attr("id") == "openbaar") {
            $("#overlay .title").html("Openbaar vervoer");
            $("#overlay .text").html("Trein<br> Campus Kaai is snel bereikbaar vanaf het Zuidstation dankzij metrolijnen 2 en 6. Afstappen in metrostation Delacroix.<br><br> Metro<br> Delacroix: lijn 2 en lijn 6.<br><br> Bus en tram<br> Trams 31 en 81 vanaf Brussel-Zuid. Bus 46 vanaf De Brouckère of Washuis. Voor meer informatie over de tram en bus in Brussel kan je terecht op de website van de MIVB. Meer informatie over de bussen van De Lijn vind je op de website.");
        }

        if ($(this).attr("id") == "auto") {
            $("#overlay .title").html("Auto");
            $("#overlay .text").html("Parkeren kan gemakkelijk voor of achter de campus. De binnenparking tussen A &amp; B zijn dit jaar ook toegankelijk. (Beperkte &amp; onbewaakte parking)");
        }

        $("#overlay").css("display", "flex");
    });

    $("#overlay").click(function () {
        $("#overlay").css("display", "none");
        $("#overlay .title").html("");
        $("#overlay .text").html("");
    });

}

function countDown() {
    var countDownDate = new Date("Fri Dec 15 2017 15:00:00 GMT+0100").getTime();
    var x = setInterval(function () {
        var now = new Date().getTime();
        var distance = countDownDate - now;
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        if (hours < 10) {
            hours = "0" + hours;
        }
        if (minutes < 10) {
            minutes = "0" + minutes;
        }
        if (seconds < 10) {
            seconds = "0" + seconds;
        }
        var dag = " dagen<br>";
        if (days == 1) {
            dag = " dag<br>";
        }
        if (days == 0) {
            days = "";
            dag = "";
        }
        document.getElementById("countdown").innerHTML = days + dag + hours + "&nbsp;&nbsp;:&nbsp;&nbsp;" + minutes + "&nbsp;&nbsp;:&nbsp;&nbsp;" + seconds;

        if (distance < 0) {
            clearInterval(x);
            document.getElementById("countdown").innerHTML = "";
        }
    }, 1000);
}

function menuActiveState() {
    $(window).scroll(function () {
        var scrollDistance = $(window).scrollTop() + 100;
        $('section').each(function (i) {
            if ($(this).position().top <= scrollDistance) {
                if (i == 1) {
                    $('header li a.active').removeClass('active');
                }
                $('header li a.active').removeClass('active');
                $('header li a').eq(i).addClass('active');
            }
        });
    }).scroll();
}

function closeMenuOnClick() {
    $('.navbar-nav>li>a').on('click', function () {
        $('.navbar-collapse').collapse('hide');
    });
}

