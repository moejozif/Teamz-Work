<!DOCTYPE html>
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
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
    .registerphoto {
        background-image: url('../img/register.svg');
        background-position: center; /* Center the image */
        background-repeat: no-repeat; /* Do not repeat the image */
        height: 350px;
        background-size: cover;
    
    /* max-height: 400px; */
    }
    .projecticon{
        background-image: url('../img/register.svg');
        background-position: center; /* Center the image */
        background-repeat: no-repeat;
        height: 110px;
        background-size: cover;
    }
    .divbg{
        
        border-style: double;
        border-width: 2px;
        border-color: gray;
        border-radius: 5%;
        
    }
    .divbgr{
        
        border-style: double;
        border-top: none;
        border-left: none;
        border-right: none;
        border-color: gray;
        padding-bottom: 4%;
        border-radius:20%;
        
    }
    .aramco{
        background-image: url('../img/aramco.jpg');
        background-position: center; /* Center the image */
        background-repeat: no-repeat;
        height: 100px;
        
        background-size: cover;
    }
    .ncb{
        background-image: url('../img/ncb.jpg');
        background-position: center; /* Center the image */
        background-repeat: no-repeat;
        height: 110px;
        background-size: cover;
    }
    .raji{
        background-image: url('../img/raji.jpg');
        background-position: center; /* Center the image */
        background-repeat: no-repeat;
        height: 110px;
        background-size: cover;
    }
    .dropdown-item{
        font-size: 16px !important;
        color:cadetblue;
    }
    .engineericon{
        background-image: url('../img/eng.png');
        background-position: center; /* Center the image */
        background-repeat: no-repeat;
        background-size: cover;
        height: 80px;

    }
    .nav-link{
        font-size: 16px !important;
        font-weight: bold !important;
        color: rgb(0, 128, 128) !important;
    }
    .teamzwork{
        font-family: sans-serif;
        line-height: 5% !important;
        font-size: 18px;
        font-weight: bold;
        color: rgb(0, 128, 128) !important;
    }
    .colorgreen{
        background-color: rgb(0, 128, 128) !important;
    }
    .custom-tooltip+.tooltip>.tooltip-inner {
        padding: 15px;
        font-size: 1.2em;
        background-color: #FFEB6C;
        color: #374D40;
      }
    </style>
    <script>
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
              })
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                    <img src="{{ asset('img/3anet5.png') }}" width="50" height="30" alt="">
                </a>
                <a class="navbar-brand teamzwork" href="{{ url('/') }}">
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                    <b>TeamzWork</b>
                </a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    @guest
                    @else
                    @switch(Auth::user()->role)
                        @case('Admin')
                        <ul class="navbar-nav">
                                <li class="nav-item active">
                                  <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="/mngusers">Users</a>
                                </li>
                                {{-- <li class="nav-item">
                                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                </li> --}}
                                <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Manage</a>
                                  <div class="dropdown-menu" aria-labelledby="dropdown10">
                                    <a class="dropdown-item" href="#">Projects Categories</a>
                                    <a class="dropdown-item" href="#">Task Categories</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                  </div>
                                </li>
                              </ul>
                            @break
                        @case('Owner')
                        <ul class="navbar-nav">
                                <li class="nav-item active">
                                  <a class="nav-link" href="/home">Projects <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="/tasks">Tasks</a>
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link" href="/mngusers">Teams</a>
                                      </li>
                                      <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Reports</a>
                                            <div class="dropdown-menu" aria-labelledby="dropdown10">
                                                <a class="dropdown-item" href="#">Engineers</a>
                                                <a class="dropdown-item" href="#">Projects</a>
                                              <a class="dropdown-item" href="#">Task Categories</a>
                                              
                                            </div>
                                          </li>
                              </ul>
                            @break
                        @default
                        <ul class="navbar-nav">
                                <li class="nav-item active">
                                  <a class="nav-link" href="/home">Pending Tasks <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="/tasks">Tasks OverDue</a>
                                </li>
                                
                                      
                              </ul>
                    @endswitch
                    @endguest
                   

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li> --}}
                        @else
                        <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <img src="{{ asset('img/noti.jpg') }}" width="35" height="30" alt="">
                                </a>
                              </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->role }}  {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
