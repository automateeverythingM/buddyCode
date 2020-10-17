<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Code Buddy</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#responsive-navbar-nav" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="responsive-navbar-nav">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Explore</a>
                    </li>
                </ul>
                 @guest
                    <div class="navbar-nav">
                    <li class="nav-item">
                                <a class="nav-link btn btn-link mr-1" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white btn btn-danger" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                     
                    </div>
                     @else
                     <div class="navbar-nav">
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"  role="button"  aria-haspopup="true" aria-expanded="false">
                            <span class="d-inline-block mr-1" style="width: 2em; height: 2em;">
                            <img class="mr-1 border img-fluid rounded-circle" src="https://picsum.photos/50" alt="avatar user">
                            </span>
                            <span>{{ Auth::user()->name }}</span>

                        </a>
                       
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">Profile</a>
                            <a class="dropdown-item" href="#">Messages</a>
                            <a class="dropdown-item" href="#">Projects</a>
                            <a class="dropdown-item" href="#">Settings</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                            </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        </div>
                    </li>
                </div>
                @endguest
            </div>
        </nav>

        <div id="navigation"></div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>