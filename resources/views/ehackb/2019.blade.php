<<<<<<< HEAD
<!doctype html>

<html lang="nl">

<head>
    <meta charset="utf-8">
    <title>EhackBv6</title>
    <meta name="description" content="EhackBv6">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon-16x16.png">
    <link rel="manifest" href="img/favicons/manifest.json">
    <link rel="mask-icon" href="img/favicons/safari-pinned-tab.svg" color="#0d0d35">
    <meta name="apple-mobile-web-app-title" content="EHackB6">
    <meta name="application-name" content="EHackB6">
    <meta name="theme-color" content="#0d0d35">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
          crossorigin="anonymous">
    <link rel="stylesheet" href="css/style2017.css">


</head>

<body id="top">

<header>
    <nav class="navbar fixed-top navbar-expand-md navbar-dark" style="background-color: #0D0D35;">
        <a class="navbar-brand" href="#top">
            <img src="img/logo5.svg" width="30" height="30" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
    <div id="overlay" class="overlay">
        <span class="close">x</span>
        <div>
            <div class="title"></div>
            <div class="text"></div>
        </div>
    </div>

    <section id="home">
        <h1 style="margin: 0;margin-left: -99999px;height: 0;">EHackB</h1>
        <div class="home_center">
            <div>
                <img src="img/home/LogoEHackB.png" alt="Logo EHackB5"/>
                <p id="countdown"></p>
            </div>
        </div>
    </section>

    <section id="registreren">
        <div class="register_center">
            <div>
                <img src="img/registreren/logoSimple.svg" alt="Logo"/>
                <p>EhackBv5 is afgelopen,</p>
                <p>hou de website in de gaten voor de volgende editie!</p>
            </div>
        </div>

    </section>

    <section id="programma">
        <div class="program_center">
            <img src="img/programma/sprekers.svg" alt="" class="icon"/>
            <h2>SPREKERS</h2>
            <hr>

            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="img/programma/internet-of-things-IoT.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Bart Keybergh (Userfull)</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Internet Of Things</h6>
                        <!--<p class="card-text"></p>-->
                        <a href="" id="userfull" class="card-link showOverlay">Meer info...</a>
                        <a target="_blank" href="{{asset("publications/2017_Userfull.pdf")}}">
                            <button type="button" class="btn btn-primary">Download presentatie</button>
                        </a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">15:00 - 16:00 / NL / Audi 4</small>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="img/programma/cloudsecurity.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Koert Martens (Kappa Data, Barracuda)</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Security &amp; Networking in the Cloud Generation</h6>
                        <!--<p class="card-text"></p>-->
                        <a href="" id="barracuda" class="card-link showOverlay">Meer info...</a>
                        <a target="_blank" href="{{asset("publications/2017_KappaData.pdf")}}">
                            <button type="button" class="btn btn-primary">Download presentatie</button>
                        </a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">15:00 - 16:00 / NL / Audi 5</small>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="img/programma/ira.jpg" alt="Irasara Senarathne">
                    <div class="card-body">
                        <h4 class="card-title">Irasara Senarathne (Guardsquare)</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Mobile application protection &amp; reverse
                            engineering</h6>
                        <!--<p class="card-text"></p>-->
                        <a href="" id="guardsquare" class="card-link showOverlay">Meer info...</a>
                        <a target="_blank" href="{{asset("publications/2017_Guardsquare.pdf")}}">
                            <button type="button" class="btn btn-primary">Download presentatie</button>
                        </a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">16:00 - 17:00 / EN / Audi 1</small>
                    </div>
                </div>
            </div>

            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="img/programma/NOC.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Koen Vanhees (Cegeka)</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Een Security Operation Center – voorbeelden ‘from the
                            field’</h6>
                        <!--<p class="card-text"></p>-->
                        <a href="" id="cegeka" class="card-link showOverlay">Meer info...</a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">16:00 - 17:00 / NL / Audi 4</small>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="img/programma/toreon_sebastien.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Sebastien Deleersnyder (Toreon)</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Whiteboard Hacking aka Hands-on Threat Modeling</h6>
                        <!--<p class="card-text"></p>-->
                        <a href="" id="toreon1" class="card-link showOverlay">Meer info...</a>
                        <a target="_blank" href="{{asset("publications/2017_Toreon_1.pdf")}}">
                            <button type="button" class="btn btn-primary">Download presentatie</button>
                        </a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">17:15 - 18:15 / NL / Audi 5</small>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="img/programma/zerodayexploit.png" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Rutger Truyers (Checkpoint)</h4>
                        <h6 class="card-subtitle mb-2 text-muted">ZERO-Day prevention</h6>
                        <!--<p class="card-text"></p>-->
                        <a href="" id="checkpoint" class="card-link showOverlay">Meer info...</a>
                        <a target="_blank" href="{{asset("publications/2017_Checkpoint.pdf")}}">
                            <button type="button" class="btn btn-primary">Download presentatie</button>
                        </a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">17:15 - 18:15 / NL / Audi 1</small>
                    </div>
                </div>
            </div>

            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="img/programma/gamedevelopment.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Dirk Van Welden</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Indie Game Development</h6>
                        <!--<p class="card-text"></p>-->
                        <a href="" id="welden" class="card-link showOverlay">Meer info...</a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">18:15 - 19:15 / NL / Audi 4</small>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="img/card.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Accenture Security Team</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Security war stories from the trenches</h6>
                        <!--<p class="card-text"></p>-->
                        <a href="" id="accenture" class="card-link showOverlay">Meer info...</a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">19:30 - 20:30 / NL / Audi 4</small>
                    </div>
                </div>
            </div>

            <img src="img/programma/workshops.svg" alt="" class="icon"/>
            <h2>WORKSHOPS</h2>
            <hr>
            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="img/programma/rest.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Sebastien Deleersnyder (Toreon)</h4>
                        <h6 class="card-subtitle mb-2 text-muted">STRIDE analysis of an B2B web and mobile applications,
                            sharing the same REST backend (hands-on)</h6>
                        <!--<p class="card-text"></p>-->
                        <a href="" id="toreon2" class="card-link showOverlay">Meer info...</a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">18:15 - 19:15 / NL / Lokaal A.0.011</small>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="img/programma/wireshark.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Erik Vanderhasselt (Wireshark)</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Analyzing network traffic (hands-on)</h6>
                        <!--<p class="card-text"></p>-->
                        <a href="" id="wireshark" class="card-link showOverlay">Meer info...</a>
                        <a target="_blank" href="{{asset("publications/2017_Wireshark.pdf")}}">
                            <button type="button" class="btn btn-primary">Download presentatie</button>
                        </a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">19:30 - 20:30 / NL / Lokaal C.2.209</small>
                    </div>
                </div>
            </div>

            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="img/programma/capturetheflag.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Capture the flag</h4>
                        <h6 class="card-subtitle mb-2 text-muted"></h6>
                        <!--<p class="card-text"></p>-->
                        <a href="" id="ctf" class="card-link showOverlay">Meer info...</a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Vanaf 20:30 - doorlopend // Grote zaal</small>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="img/programma/create.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Create corner</h4>
                        <h6 class="card-subtitle mb-2 text-muted"></h6>
                        <!--<p class="card-text"></p>-->
                        <a href="" id="createcorner" class="card-link showOverlay">Meer info...</a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Vanaf 15u - doorlopend // Create corner</small>
                    </div>
                </div>
            </div>

            <img src="img/programma/gaming.svg" alt="" class="icon"/>
            <h2>GAMING</h2>
            <hr>
            <br>
            <div class="alert alert-info program_alert">
                <strong>Opgelet!</strong> Er wordt 1 stopcontact en 1 internetkabel voorzien per persoon. Zorg dus voor
                een extra stekkerblok indien je deze nodig hebt.
            </div>

            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="img/programma/csgo-photo.png" alt="CS:GO">
                    <div class="card-body">
                        <h4 class="card-title">CS:GO</h4>
                        <h6 class="card-subtitle mb-2 text-muted">PC</h6>
                        <a href="" id="csgo" class="card-link showOverlay">Meer info...</a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Vanaf 21u // Grote zaal</small>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="img/programma/lol-photo.png" alt="League of Legends">
                    <div class="card-body">
                        <h4 class="card-title">League of Legends</h4>
                        <h6 class="card-subtitle mb-2 text-muted">PC</h6>
                        <a href="" id="lol" class="card-link showOverlay">Meer info...</a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Vanaf 21u // Grote zaal</small>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="img/programma/rocketleague-photo.jpg" alt="Rocket League">
                    <div class="card-body">
                        <h4 class="card-title">Rocket League</h4>
                        <h6 class="card-subtitle mb-2 text-muted">PC</h6>
                        <a href="" id="rl" class="card-link showOverlay">Meer info...</a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Vanaf 21u // Grote zaal</small>
                    </div>
                </div>
            </div>

            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="img/programma/fifa-photo.jpg" alt="FIFA 18">
                    <div class="card-body">
                        <h4 class="card-title">FIFA</h4>
                        <h6 class="card-subtitle mb-2 text-muted">PS4</h6>
                        <a href="" id="fifa" class="card-link showOverlay">Meer info...</a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Vanaf 21u // Grote zaal</small>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="img/programma/supersmashbros-photo.jpg" alt="Super Smash Bros">
                    <div class="card-body">
                        <h4 class="card-title">Super Smash Bros</h4>
                        <h6 class="card-subtitle mb-2 text-muted">WII U</h6>
                        <a href="" id="ssb" class="card-link showOverlay">Meer info...</a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Vanaf 21u // Grote zaal</small>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="img/programma/hearthstone-photo.jpg" alt="Hearthstone">
                    <div class="card-body">
                        <h4 class="card-title">Hearthstone</h4>
                        <h6 class="card-subtitle mb-2 text-muted">PC</h6>
                        <a href="" id="hearthstone" class="card-link showOverlay">Meer info...</a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Vanaf 21u // Grote zaal</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="corners">
        <div class="sectionwrapper">
            <h2>CORNERS</h2>
            <ul>
                <li>
                    <button id="hack" class="showOverlay">
                        <img src="img/corners/hack.png" alt=""/>
                    </button>
                </li>
                <li>
                    <button id="casual" class="showOverlay">
                        <img src="img/corners/casual.png" alt=""/>
                    </button>
                </li>
                <li>
                    <button id="create" class="showOverlay">
                        <img src="img/corners/create.png" alt=""/>
                    </button>
                </li>
                <li>
                    <button id="competitive" class="showOverlay">
                        <img src="img/corners/play.png" alt=""/>
                    </button>
                </li>
                <li>
                    <button id="food" class="showOverlay">
                        <img src="img/corners/food.png" alt=""/>
                    </button>
                </li>
                <li>
                    <button id="learn" class="showOverlay">
                        <img src="img/corners/learn.png" alt=""/>
                    </button>
                </li>
                <li>
                    <button id="vr" class="showOverlay">
                        <img src="img/corners/VR.png" alt=""/>
                    </button>
                </li>
                <li>
                    <button id="teamspeak" class="showOverlay">
                        <img src="img/corners/teamspeak.png" alt=""/>
                    </button>
                </li>
            </ul>
        </div>
    </section>

    <section id="video">
        <iframe class="fbvideo"
                src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FEhackB%2Fvideos%2F1923912754497269%2F&show_text=0&width=560"
                width="560" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                allowTransparency="true" allowFullScreen="true"></iframe>
    </section>

    <section id="locatie">
        <div class="layer">
            <div class="locatie_center">
                <div>
                    <h2>LOCATIE</h2>
                    <p>Nijverheidskaai 170
                        <br>1070 Anderlecht</p>
                    <ul>
                        <li>
                            <button id="fietsen" class="showOverlay">
                                <img src="img/locatie/fiets.svg" alt=""/>
                            </button>
                        </li>
                        <li>
                            <button id="openbaar" class="showOverlay">
                                <img src="img/locatie/trein.svg" alt=""/>
                            </button>
                        </li>
                        <li>
                            <button id="auto" class="showOverlay">
                                <img src="img/locatie/auto.svg" alt=""/>
                            </button>
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
            <a href="https://www.erasmushogeschool.be/" target="_blank"><img src="img/logo/ehb-logo.jpg" alt="EhB"></a>
            <a href="http://www.signpost.be/" target="_blank"><img src="img/logo/signpost.jpg" alt="Signpost"></a>
            <a href="http://www.academicshop.be/" target="_blank"><img src="img/logo/Acedemic_Software.gif"
                                                                       alt="AcademicShop"></a>
            <a href="https://www.agoria.be/" target="_blank"><img src="img/logo/agoria.jpg" alt="Agoria"></a>
            <a href="http://www.switchpoint.be/" target="_blank"><img
                        src="img/logo/switchpoint-logo-color-no_border-final.jpg" alt="Switchpoint"></a>
            <a href="http://www.apc.com/be/en/" target="_blank"><img src="img/logo/APC_by_Schneider_Electric_3.png"
                                                                     alt="APC"></a>
            <div class="stylelabs-container">
                <p>Join us:<a href="https://careers.stylelabs.com/" target="_blank">careers.stylelabs.com</a></p>
                <a href="https://stylelabs.com/" target="_blank"><img class="stylelabs" src="img/logo/stylelabs.png"
                                                                      alt="Stylelabs"></a>
            </div>
            <a href="https://www3.lenovo.com/be/nl/" target="_blank"><img src="img/logo/lenovo.png" alt="Lenovo"></a>
        </div>
        <div class="mid_logo">
            <a href="http://www.innoviris.be/nl" target="_blank"><img src="img/logo/innoviris.png"
                                                                      alt="Innoviris Brussels"></a>
            <a href="https://www.netacad.com/" target="_blank"><img src="img/logo/cisco_logo_large.png" alt="Cisco"></a>
            <a href="http://www.teamspeak.com/?tour=yes" target="_blank"><img src="img/logo/teamspeak_horizontal.png"
                                                                              alt="Teamspeak"></a>
        </div>
        <div class="basic_logo">
            <a href="https://www.belnet.be/nl" target="_blank"><img src="img/logo/Belnet.png" alt="Belnet"></a>
            <a href="https://meraki.cisco.com/nl/content" target="_blank"><img src="img/logo/cisco_meraki.jpg"
                                                                               alt="Cisco - Meraki"></a>
            <a href="https://www.redcorp.com/nl/Home/Index" target="_blank"><img src="img/logo/Redcorp_logo.png"
                                                                                 alt="Redcorp"></a>
        </div>
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
        integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
        integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
        crossorigin="anonymous"></script>
<script src="js/navbar-fixed.js"></script>
<script src="js/script2017.js"></script>

</body>

</html>
=======
@extends("layouts/app")

@section('head')



@endsection


@section('content')

@endsection
>>>>>>> d357e98fcc51df1a5f9a69ea6b5a436dbe872701
