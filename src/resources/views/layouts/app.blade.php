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
     <!-- Bootstrap Font Icon CSS -->
    <!--Bootstrap Style-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"/>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
     <!-- Custom Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Caveat&family=Poppins&family=Prompt&family=Tajawal&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Raleway&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@900&display=swap');


.hero-section{
    position: absolute;
    z-index: -1;
    top: 0;
    left:0;
    width: 100%;
    height: calc(100% + 0px); 
    background-size: cover;
    background: url("../img/bg image.jpg") no-repeat;
    background-position: center;
    background-attachment: fixed;
}

.content{
    margin-top: 10px;
    position: relative; 
    z-index: 1; 
}
.brand_name{
    font-family: 'Prompt';
    text-transform: uppercase;
}
.bnd-name-size{
    font-size: 50px;
}
.mgn-brand{
    margin-left: 0;
}
.auth-mgn{
    margin-right: -60px;
}
.tagline{
    font-family: 'Caveat';
    margin-top: 60px;
    font-size: 40px;
}
.vis{
    margin-top: 150px;
}

.capsurelogo{
    height: 50px;
    width: 82px;
    margin-left: -100px;
    margin-right: 0;
}
body{
    background-color: #ffffff;
    font-family: 'Poppins';
}
.nav-link{
    color: #221459;
    font-weight: 33px;
}
.navbar-nav .active{
    border-bottom: #073535 solid 3px;
}

.loginbutton{
    background-color: #221459;
    color: #ffffff;
    font-family: 'Poppins';
    text-transform: uppercase ;
    border: rgb(131, 128, 128) solid 1px;
    text-align: center;
}

.lgn-p{
    padding-left: 125px;
    padding-right: 125px;
}
.fg-m{
    margin-left: 65px;
    margin-right: 65px;
}
.signbutton{
    background-color: #073535;
    color: #ffffff;
    font-family: 'Poppins';
    text-transform: uppercase ;
    border: rgb(131, 128, 128) solid 1px;
}

.btn-dark-purple{
    background-color: #221459;
    color: #ffffff;
}

.txt-color{
    color: #221459;
}
.bor{
    border: #221459 solid 1px;
}
.bor2{
    border-bottom: #ffffff solid 1px;
}
.lgn-mgn {
    margin-top: 60px;
    margin-bottom: 60px;
}
.ppn-fnt{
    font-family: 'Poppins';
    letter-spacing: 0.3em;
}
.mgn-card{
    margin-right: 80px;
}

/*SignUp Style */

.avl-color{
    color: green;
}
.navl-color{
    color:red;
}
.mgn-ser{
    margin-left: 1130px;
}

.navbar-nav .form-inline {
    width: 140%;
}

.navbar-nav .form-inline .form-control {
    width: 50%;
}

.avatar{
    width: 50px;
    height: 50px;
    border-radius: 75%;
    border: #073535 solid 1px;
}

/* Profile Stylesheets*/
.profile-size{
    width: 320px;
    height: 300px;
    border: gray solid 0.5px ;
}
.fnt-style{
    font-family: 'Poppins';
    color: #66645E;
}
.opac{
    opacity: 12%;
}
.opac-0{
    border-radius: 75%;
}
.excess-sdw{
    box-shadow: 0 0 5px 5px rgba(13, 6, 31, 0.13);
}
.ltr-spng{
   letter-spacing: 0.1em;
}
.carousel-size{
    width: 670px;
    height: 493px;
}
.brd-trans{
    border-color: white;
}
.btn-avail{
    color: rgb(255, 255, 255);
    background-color: #028A0f;
    border: gray solid 1px;
}
.text-blue{
    color: #221459;
}
.profile-font{
    font-family: 'Raleway';
}
.carousel-control-prev-icon,
.carousel-control-next-icon {
  width: 50px;
  height: 50px;
}
.email-clr{
    color: #0A3EC6;
}

/*Appointment Style */


.btn-red{
    background-color: #D21010;
    color: #ffffff;
}
.btn-aqua{
    background-color: #023047;
    color: #ffffff;
}
.app-fnt{
    font-family: 'Poppins';
}
.border-black{
    border: #66645E solid 1px;
}
.appnt-mgn-lf{
    margin-left: -40px;
}
.appnt-mgn-rt{
    margin-right: 10px;
}
.table-brd-clr{
    background-color: #221459;
}
.create-appointment {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 1000;
    background-color: #ffffff;
    padding: 50px;
    border: 1px solid #ffffff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
  }
.edit-appointment{
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 1000;
    background-color: #ffffff;
    padding: 50px;
    border: 1px solid #ffffff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}
.no-scroll {
    overflow: hidden;
  }
.column-actions{
    width:12%;
}
.column-cus_name{
    width: 20%;
}
.confirmation-dialog {
    display: flex;
    justify-content: center;
    align-items: center;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 9999;
  }
  
  .confirmation-dialog-content {
    background-color: white;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }

/*About */

.bag-img{
    position: absolute;
    z-index: -1;
    top: 0;
    left:0;
    width: 100%;
    height: calc(100% + 0px); 
    background-size: cover;
    background-attachment: fixed;
    background: url("../img/bg-about.jpg") no-repeat;
    background-position: center;
    background-attachment: fixed;
}
.about_info{
    color: #221459;
}
.size{
    font-family: 'Roboto';
    font-size: 70px;
}
.mv{
    text-align: justify;
}

/*Setting*/

.bg-setting{
    background-color: #c6c5c7;
    height: 88%;
    width: 75%;
    background-size: cover;
    background-attachment: fixed;
    position: absolute;
    
}

.img-up{
    max-width:100%;
    height:auto;
}

.content-st{
    margin-bottom: -100px;
}

.nav-pills .nav-link.active {
    background-color: #023047;
  
}

/*Event*/

.event-css{
  width: 600px; 
  height: 400px; 
  background-color: #f1f3f2;
  display: flex;
  justify-content: center;
  align-items: center;
  opacity: 85%;
}

.mgn-eve{
    margin-top: 230px;
}
.bg-events {
    position: absolute;
    z-index: -1;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    background-image: url("../img/bg-events.jpg");
    background-repeat: no-repeat;
  }
  
  .event-text{
    font-size: 71px;
    font-family: 'Caveat', serif;
  }

  /*Service*/
  .avatar-ser{
    width:100px;
    height:100px;
    border-radius: 75%;
    border: #073535 solid 1px;
  }

  .setting-mgn{
    margin-top: 170px;
    opacity:75%;
  }
  .no-und{
    text-decoration: none;
    color: #221459;
    font-weight: bold;
  }
    </style>
 <script src="{{ mix('js/app.js') }}"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{asset('img/CapSure.png')}}" class=" capsurelogo" alt="..."/><span class="m-2 brand_name mgn-brand ">CapSure</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                    <li class="nav-item text-uppercase fw-bold"><a href="/" class="nav-link {{request()->is('/') ? 'active' : ''}}">Home</a></li>
                    <li class="nav-item text-uppercase fw-bold"><a href="/services" class="nav-link {{request()->is('services') ? 'active' : ''}}">Services</a></li>
                    <li class="nav-item text-uppercase fw-bold"><a href="/events" class="nav-link {{request()->is('events') ? 'active' : ''}}">Events</a></li>
                    <li class="nav-item text-uppercase fw-bold"><a href="/about" class="nav-link {{request()->is('about') ? 'active' : ''}}">About</a></li>    
                    </ul>


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto auth-mgn">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}"><button type="button" class="btn btn-sm rounded loginbutton">{{ __('Log in') }}</button></a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}"><button type="button" class="btn signbutton btn-sm rounded">{{ __('Sign Up') }}</button></a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <strong>{{ Auth::user()->name }}</strong>
                                <img class="avatar ms-2" src="{{asset('/img/'.Auth::user()->avatar)}}">
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/profile">Profile</a>
                                    <a class="dropdown-item" href="/appointment">Appointment</a>
                                    <a class="dropdown-item" href="/setting">Setting</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Log out') }}
                                    </a>
                                    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
