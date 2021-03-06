﻿<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>EhackBv6</title>
    <meta name="description" content="EhackBv6">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon-16x16.png">
    <meta name="apple-mobile-web-app-title" content="EHackB6">
    <meta name="application-name" content="EHackB6">
    <meta name="theme-color" content="#1D1D1B">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
          crossorigin="anonymous">

    <link rel="stylesheet" href="css/style2019.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
            integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
            integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
            crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</head>

<body id="top">
<header>
    <nav class="navbar fixed-top navbar-expand-md navbar-dark mb-5" style="background-color: #1D1D1B;">
        <a class="navbar-brand" href="#top">
            <img src="img/EhackBLogo.png" width="30" height="30" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse pixText" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link smooth-scroll" href="#top">Start</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link smooth-scroll" href="#registreren">Registreren</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link smooth-scroll" href="#programma">Programma</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link smooth-scroll" href="#gaming">Gaming</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link smooth-scroll" href="#corners">Corners</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link smooth-scroll" href="#locatie">Locatie</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<main>
    <section class="welcome">
        <img id="bg" src="img/background.png" alt="Background">
        <div class="tv-container">
            <div class="tv">
                <img src="img/tv.png">
                <div class="logo-nav-container">
                    <div class="logo-container">
                        <img src="img/EhackBLogo.png" alt="logo">
                        <h3 class="pixText eventdatum"> 3 - 4 mei</h3>
                    </div>
                    <div class="selectors pixText">
                        <ul>
                            <li><a href="#registreren">Registreren</a></li>
                            <li><a href="#programma">Programma</a></li>
                            <li><a href="#gaming">Gaming</a></li>
                            <li><a href="#corners">Corners</a></li>
                            <li><a href="#locatie">Locatie</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="pc-container">
            <img src="img/pc.png" alt="computer-img">
        </div>
    </section>

    <section id="registreren">
        <img id="fade" src="img/registreren/fade.png" alt="fade">
        <div class="register_center">
            <div class="pixText">
                <img src="img/registreren/logoSimple.svg" alt="Logo"/>`
                
                <p>EhackBv6 is afgelopen,</p>
                <p>hou de website in de gaten voor de volgende editie!</p>
                {{--
                @if(Auth::guest())
                <div class="pixText" style="font-size: 20pt">
                    <a class="p-5" href="{{ url('/login') }}" >Login</a>
                    <a class="p5" href="{{ url('new') }}">Registreer</a>
                </div>
                    
                @else
                    <div class="pixText" style="font-size: 20pt">
                        <p class="text-warning">U bent al geregistreerd</p>
                        <a class="p-5 " href="{{ url('/show') }}" >Wijzig inschrijving</a>
                    </div>
                @endif
                --}}
            </div>
        </div>

    </section>

    <section id="programma">
        <div class="program_center">
            <div class="program_header">
                <img src="img/programma/sprekers.svg" alt="" class="icon"/>
                <h2 class="pixText">SPREKERS</h2>
            </div>
            <hr>

            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="{{asset('img/programma/datasecurity.png')}}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Kris Bijnens (VARONIS)</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Security vanuit het data standpunt </h6>
                        <p class="card-text">Inclusief demo van een hack en detection met Varonis</p>
                        <div class="btn  btn-warning"><a class="pixText text-dark" href="/download/VARONIS">Powerpoint</a></div>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">3 mei 15:00 - 16:00 / Audi 1</small>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{asset('img/programma/Linux.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Kenny Van de Maele (INUITS)</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Waarom Linux zo’n belangrijk platform is
                            voor development en system engineering.</h6>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">3 mei 15:00 - 16:00 / Audi 4</small>
                    </div>
                </div>

            </div>

            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="img/programma/PaltoAltoNetworks.png" alt="Irasara Senarathne">
                    <div class="card-body">
                        <h4 class="card-title">Rutger Truyers (PALO ALTO NETWORKS)</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Enterprise Security Evolved, Break the security Silo's.</h6>
                            <p class="card-text">Cloud security in IaaS, SaaS, PaaS &
                                Next Generation Firewalls today</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">3 mei 16:00 - 17:00 / Audi 1</small>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="img/programma/NOC.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Jordy Blommaert (DELAWARE)</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Secure your digital workplace environment</h6>
                        <!--                            <a href="" id="cegeka" class="card-link showOverlay">Meer info...</a>-->
                        <p class="card-text">More and more customers are choosing for a cloud solution where
                            all services are managed in the Microsoft Cloud. The main question of this
                            functionality is: “Is a Cloud environment secure?”. This workshop demonstrates
                            how to secure your digital workplace environment and shows you to benefits of a
                            secure digital workplace</p>

                    </div>
                    <div class="card-footer">
                        <small class="text-muted">3 mei 16:00 - 17:00 / Audi 4</small>
                    </div>
                </div>

            </div>

            <div class="card-deck">
		
                <div class="card">
                    <img class="card-img-top" src="img/programma/internet-of-things-IoT.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Matts Devriendt (DELAWARE) </h4>
                        <h6 class="card-subtitle mb-2 text-muted">IoT & security in IoT: Why before how</h6>
                        <p class="card-text">Connected is not enough in today’s successful iot stories. Start with why before how. The how part is maybe influenced by the why. 
                            Combine vision, strategy and iot for strong industry 4.0 business cases. 
                            During the talk an existing smart farming solution will function as a reference case.
                            In Roeselare, "Potato valley" for the locals, potato growers make grateful use of AVR’s machines and technology to make planting potatoes and harvesting more efficient.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">3 mei 17:00 - 18:00 / Audi 1</small>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{asset('img/programma/https.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Flavius Bura</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Public Key Infrastructure</h6>
                        <p class="card-text">Meer dan 50% van alle websites gebruiken Secure HTTP (HTTPS).
                            Hierbij wordt er gebruik gemaakt van de “Public Key Infrastructure” en digitale
                            certificaten. De volgende componenten van de “Public Key Infrastructure” komen aan bod:
                            Asymmetric Key Encryption, Hash Algorithms, Trusted Root Certificate Authorities,
                            Certificate Revocation methods, enz.

                            Inclusief demo over hoe je een website beveiligd door gebruik te maken van
                            digitale certificaten.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">3 mei 17:00 - 18:00 / Audi 4</small>
                    </div>
                </div>

            </div>

            <div class="card-deck">

                <div class="card">
                    <img class="card-img-top" src="{{asset('img/programma/Code-Attacking-Injecting-XL.jpg')}}"
                         alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Inti De Ceukelaire (INTIGRITI) </h4>
                        <h6 class="card-subtitle mb-2 text-muted">Creative Hacking: finding unique bugs </h6>
                        <p class="card-text">Bedrijven zoals Google en Facebook belonen duizenden dollars aan
                            wie hun systemen kan kraken. Hoe begin je eraan? Veilige frameworks lossen veel op,
                            maar wat glipt er nog door de mazen van het net? In deze sessie leer je denken als
                            een hacker met een tal van voorbeelden uit de praktijk! </p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">3 mei 18:00 - 19:00 / Audi 1</small>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top d-block" src="{{asset('img/logo/Hogent/HOGENT_Logo_Pos_rgb.jpg')}}"
                         alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Wim De Bruyn (HOGENT)</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Hoe kan je de klant tevreden stellen en sneller je doel bereiken?</h6>
                        <p class="card-text">
				Business canvas model, de customer journey, scrum sprints en nexus : 
				hoe de klant tevredenstellen en sneller en beter het doel te bereiken.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">3 mei 19:00 - 20:00 / Audi 4</small>
                    </div>
                </div>
		<div class="card-deck">
			<div class="col-lg-6 mx-auto">
			<div class="card">
                    <img class="card-img-top d-block" src="{{asset('img/programma/social-engineering.jpg')}}"
                         alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Erik Vanderhasselt</h4>
                        <h6 class="card-subtitle mb-2 text-muted">OSINT workshop</h6>
                        <p class="card-text">OSINT is de verzamelnaam voor een reeks technieken die gebruikt
                            worden voor het verzamelen van informatie over het doelwit. Dit kan gaan van media
                            artikels tot social media. Op het einde van de workshop kan de deelnemer een reeks
                            bronnen ondervragen die toelaten een analyse uit te voeren om een social engineering
                            aanval en/of een hacking campagne op te zetten. </p>
                    	</div>
                    	<div class="card-footer">
                       		 <small class="text-muted">3 mei 19:00 - 20:00 / C.209</small>
                    	</div>
                </div>
		</div>
		</div>
            </div>

            <div class="program_header">
                <img src="img/programma/workshops.svg" alt="" class="icon"/>
                <h2 class="pixText">WORKSHOPS/EXPERIENCES</h2>
            </div>
            <hr>

            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="img/programma/rest.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Inti De Ceukelaire (INTIGRITI)</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Hacking workshop</h6>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">3 mei Vanaf 20:00 / Grote zaal</small>
                    </div>
                </div>

                <div class="card">
                    <img class="card-img-top" src="img/programma/create.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Create corner</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Fablab & Medialab</h6>
                        <p class="card-text">Van een game maken in Unity tot robots bouwen: Leef je uit in onze
                            create corner, voorzien van de laatste nieuwe technologie!</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">3 mei Vanaf 20:00 / Grote zaal</small>
                    </div>
                </div>
            </div>

            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="img/programma/vr.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">VR Room</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Immerse yourself!</h6>
                        <p class="card-text">Kom langs bij de stand van ons enige echt Medialab en ervaar VR
                            aan de hand van de vele headsets die beschkbaar zijn: HTC Vive Pro, Oculus,
                            Playstation VR,... Van kogels ontwijken in Superhot tot ritmisch dansen met
                            lightsabers in Beatsaber, alles is mogelijk in VR.
                            Come get your mind blown!
                        </p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">3 mei Vanaf 20:00 / Grote zaal</small>
                    </div>
                </div>

            </div>
            <div id="gaming">
                <br><br><br>
            </div>
            <div class="program_header">
                <img src="img/programma/gaming.svg" alt="game controller" class="icon"/>
                <h2 class="pixText">GAMING COMPETITION</h2>
            </div>
            <hr>

            <br>
            <div class="alert alert-info program_alert">
                <strong>Opgelet!</strong> Er wordt 1 stopcontact en 1 internetkabel voorzien per persoon. Zorg dus voor
                een extra stekkerblok indien je deze nodig hebt.
            </div>

            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="{{asset('img/programma/csgo-photo.png')}}" alt="CS:GO">
                    <div class="card-body">
                        <h4 class="card-title">CS:GO</h4>
                        <h6 class="card-subtitle mb-2 text-muted">PC</h6>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">3 mei Vanaf 20u / Grote zaal</small>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{asset('img/programma/lol-photo.png')}}" alt="League of Legends">
                    <div class="card-body">
                        <h4 class="card-title">League of Legends</h4>
                        <h6 class="card-subtitle mb-2 text-muted">PC</h6>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">3 mei Vanaf 20u / Grote zaal</small>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{asset('img/programma/rocketleague-photo.jpg')}}"
                         alt="Rocket League">
                    <div class="card-body">
                        <h4 class="card-title">Rocket League 2 vs 2</h4>
                        <h6 class="card-subtitle mb-2 text-muted">PC</h6>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">3 mei Vanaf 20u / Grote zaal</small>
                    </div>
                </div>
            </div>

            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="{{asset('img/programma/fifa-photo.jpg')}}" alt="FIFA 19">
                    <div class="card-body">
                        <h4 class="card-title">FIFA 2019</h4>
                        <h6 class="card-subtitle mb-2 text-muted">PS4</h6>

                    </div>
                    <div class="card-footer">
                        <small class="text-muted">3 mei Vanaf 20u / Grote zaal</small>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{asset('img/programma/smash.jpg')}}" alt="Super Smash Bros">
                    <div class="card-body">
                        <h4 class="card-title">Super Smash Bros Ultimate</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Nintendo Switch</h6>

                    </div>
                    <div class="card-footer">
                        <small class="text-muted">3 mei Vanaf 20u / Grote zaal</small>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="img/programma/hearthstone-photo.jpg" alt="Hearthstone">
                    <div class="card-body">
                        <h4 class="card-title">Hearthstone</h4>
                        <h6 class="card-subtitle mb-2 text-muted">PC</h6>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">3 mei Vanaf 20u / Grote zaal</small>
                    </div>
                </div>
                
            </div>
            <div class="card-deck">
                    <div class="card ">
                            <img class="card-img-top" src="img/programma/fortnite.jpg" alt="Hearthstone">
                            <div class="card-body">
                                <h4 class="card-title">Fortnite</h4>
                                <h6 class="card-subtitle mb-2 text-muted">Cross-platform</h6>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">3 mei Vanaf 20u / Grote zaal</small>
                            		</div>
                        	</div>
			<div class="card ">
                            <img class="card-img-top" src="img/programma/olsdschool.jpg" alt="Hearthstone">
                            <div class="card-body">
                                <h4 class="card-title">Runscape Old School</h4>
                                <h6 class="card-subtitle mb-2 text-muted">PC</h6>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">3 mei Vanaf 20u / Grote zaal</small>
                            </div>
                        </div>
            </div>
        </div>
    </section>

    <section id="corners">
        <div class="sectionwrapper">
            <h2 class="pixText">CORNERS</h2>
            <ul>
                <li>
                    <button id="hack" class="showOverlay corner">
                        <img src="img/corners/hack.png" alt="" class="corner-image"/>
                        <div class="corner-text">Hack</div>
                    </button>
                </li>
                <li>
                    <button id="casual" class="showOverlay corner">
                        <img src="img/corners/casual.png" alt="" class="corner-image"/>
                        <div class="corner-text">Casual</div>
                    </button>
                </li>
                <li>
                    <button id="create" class="showOverlay corner">
                        <img src="img/corners/create.png" alt="" class="corner-image"/>
                        <div class="corner-text">Create</div>
                    </button>
                </li>
                <li>
                    <button id="competitive" class="showOverlay corner">
                        <img src="img/corners/play.png" alt="" class="corner-image"/>
                        <div class="corner-text">Competitive</div>
                    </button>
                </li>
                <li>
                    <button id="food" class="showOverlay corner">
                        <img src="img/corners/food.png" alt="" class="corner-image"/>
                        <div class="corner-text">Food</div>
                    </button>
                </li>
                <li>
                    <button id="learn" class="showOverlay corner">
                        <img src="img/corners/learn.png" alt="" class="corner-image"/>
                        <div class="corner-text">Learn</div>
                    </button>
                </li>
                <li>
                    <button id="vr" class="showOverlay corner">
                        <img src="img/corners/VR.png" alt="" class="corner-image"/>
                        <div class="corner-text">VR</div>
                    </button>
                </li>
                <li>
                    <button id="teamspeak" class="showOverlay corner">
                        <img src="img/corners/teamspeak.png" alt="" class="corner-image"/>
                        <div class="corner-text">Teamspeak</div>
                    </button>
                </li>
            </ul>
        </div>
    </section>

    <section id="video">
        <iframe class="fbvideo"
                width="560" height="314" src="https://www.youtube.com/embed/rbi8jBNGLMw" 
                 style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                allowTransparency="true" allowFullScreen="true"></iframe>
    </section>

    <section id="locatie">
        <div class="layer">
            <div class="locatie_center">
                <div>
                    <h2 class="pixText">LOCATIE</h2>
                    <p>Nijverheidskaai 170
                        <br>1070 Anderlecht</p>
                    <ul>
                        <li>
                            <a href="https://www.google.com/maps/dir/?api=1&destination=Nijverheidskaai+170,+1070+Anderlecht&travelmode=bicycling"
                               target="_blank" id="fietsen" class="showOverlay">
                                <img src="img/locatie/fiets.svg" alt=""/>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.google.com/maps/dir/?api=1&destination=Nijverheidskaai+170,+1070+Anderlecht&travelmode=transit"
                               target="_blank" id="openbaar" class="showOverlay">
                                <img src="img/locatie/trein.svg" alt=""/>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.google.com/maps/dir/?api=1&destination=Nijverheidskaai+170,+1070+Anderlecht&travelmode=driving"
                               target="_blank" id="auto" class="showOverlay">
                                <img src="img/locatie/auto.svg" alt=""/>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>

<footer>
    <div class="footer-logo">
        <div class="master_logo">
            <a href="https://www3.lenovo.com/be/nl/" target="_blank"><img src="img/logo/Lenovo/lenovo.png" alt="Lenovo"></a>

            <a href="http://www.signpost.be/" target="_blank"><img src="img/logo/Signpost/signpost.jpg" alt="Signpost"></a>
                    
            <a href="http://www.academicshop.be/" target="_blank"><img src="img/logo/Signpost/Acedemic_Software.gif" alt="AcademicShop"></a>
            
            <a href="https://www.erasmushogeschool.be/" target="_blank"><img src="img/logo/EhB/ehb-logo.jpg" alt="EhB"></a>
            
            
            <a href="#" target="_blank"><img src="img/logo/Alliantiefonds/alliantie-metketting.png" alt="Alliantiefonds"></a>      
            
            <a href="https://www.hogent.be/" class="hogent" target="_blank"><img src="img/logo/Hogent/HOGENT_Logo_Pos_rgb.jpg"
                                                                  alt="Hogent"></a>
              
        </div>
        <div class="mid_logo">
            
            
           <a href="https://www.axxes.com/" target="_blank"><img src="img/logo/axxes/axxes.png" alt="Cisco"></a>
           <a href="http://www.innoviris.be/nl" target="_blank"><img src="img/logo/Innoviris/innoviris.png"
            alt="Innoviris Brussels"></a> 
            <a href="https://www.erasmushogeschool.be/nl/stuvo" target="_blank"><img src="img/logo/Stuvo/stuvo-ehb.png" alt="Cisco"></a>
		<a href="https://www.accenture.com/be-en" target="_blank"><img src="img/logo/accenture/accenture.png" alt="Accenture"></a>
        </div>
        <div class="basic_logo">
            <a href="https://www.netacad.com/" target="_blank"><img src="img/logo/Cisco Networking Academy/cisco_logo_large.png" alt="Cisco"></a>   
            <a href="https://www.paloaltonetworks.com" target="_blank"><img src="img/logo/Palo Alto/pan-logo-badge-blue-light-kick-up.jpg" alt="Cisco"></a>
            <a href="http://www.delaware.pro/nl-nl" target="_blank"><img src="img/logo/Delaware/Delaware.jpg" alt="Delaware"></a>
            <a href="https://www.belnet.be/nl" target="_blank"><img src="img/logo/Belnet/Belnet.jpg" alt="Belnet"></a>
            <a href="https://meraki.cisco.com/nl/content" target="_blank"><img src="img/logo/Cisco - Meraki/cisco_meraki.jpg" alt="Cisco - Meraki"></a>
            <a href="https://honim.typepad.com/biasc/" target="_blank"><img src="img/logo/BIASC/BIASC.png" alt="BIASC"></a>
        </div>
    </div>
</footer>
</body>
</html>
