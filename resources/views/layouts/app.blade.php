<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('head')
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<div id="app" >
    <nav class="navbar navbar-dark bg-dark navbar-expand-md sticky-top">
        <div class="container">
            <div class="navbar-header">

               

                <!-- Branding Image -->

                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>
            <!-- Collapsed Hamburger -->
            <button class="navbar-toggler"  type="button" data-toggle="collapse"
                        data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="app-navbar-collapse">
               
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link smooth-scroll" href="{{ url('/')}}#top">Start</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link smooth-scroll" href="{{ url('/')}}#programma">Programma</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link smooth-scroll" href="{{ url('/')}}#corners">Corners</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link smooth-scroll" href="{{ url('/')}}#locatie">Locatie</a>
                </li>
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li class="nav-item"><a class="nav-link" href="{{ url('/login') }}">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('new') }}">Registreren</a></li>
                    @else
                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->firstName. " ".Auth::user()->lastName }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @if (Auth::user()->isAdmin) 

                            <a class="dropdown-item" href="{{ url('/admin') }}">admin</a> 
                                
                            @endif
                                <a class="dropdown-item" href="{{ url('/show') }}">Profiel</a> 
                                <a class="dropdown-item" href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                
                            </div>
                        </li>
                    @endif
                </ul>
                
                
            </div>
            
        </div>
    </nav>

    @yield('content')
</div>

<!-- Scripts -->
<script src="/js/app.js"></script>
@yield('scripts')
</body>
</html>