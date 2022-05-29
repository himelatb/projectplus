<!DOCTYPE html>
<html lang="lang="{{ str_replace('_', '-', app()->getLocale()) }}"">
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
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Buzzed</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" href="{{asset('css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset('css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets -->
      <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
      <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <!-- body -->
   <body>
     <div id="app">
         <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
             <div class="container">
                 <a class="navbar-brand" href="{{ url('/') }}">
                     {{ config('app.name', 'Laravel') }}
                 </a>
                 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                     <span class="navbar-toggler-icon"></span>
                 </button>

                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <!-- Left Side Of Navbar -->
                     <ul class="navbar-nav me-auto">

                     </ul>

                     <!-- Right Side Of Navbar -->
                     <ul class="navbar-nav ms-auto">
                         <!-- Authentication Links -->
                         @guest
                             @if (Route::has('login'))
                                 <li class="nav-item">
                                     <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                 </li>
                             @endif

                             @if (Route::has('register'))
                                 <li class="nav-item">
                                     <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                 </li>
                             @endif
                         @else
                             <li class="nav-item dropdown">
                                 <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                     {{ Auth::user()->name }}
                                 </a>

                                 <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
                         @endguest
                     </ul>
                 </div>
             </div>
         </nav>
      <!-- header section start -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">

            <a class="nav-item nav-link" href="{{ route('about')}}">ABOUT</a>
            <a class="nav-item nav-link" href="{{ route('index')}}">HOME</a>
          <a class="nav-item nav-link" href="{{ route('contact')}}">CONTACT US</a>
          </div>
        </div>
      </nav>
      <!-- header section end -->
      @yield('content')

      <!-- footer section start -->
      <div class="footer_section layout_padding">
        <div class="container">
          <div class="social_icon">
            <ul>
              <li><a href="#"><img src="images/fb-icon.png"></a></li>
              <li><a href="#"><img src="images/twitter-icon.png"></a></li>
              <li><a href="#"><img src="images/linkdin-icon.png"></a></li>
              <li><a href="#"><img src="images/instagram-icon.png"></a></li>
            </ul>
          </div>
          <p class="lorem_ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate</p>
        </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
        <div class="container">
          <p class="copyright_text">Copyright 2019 All Right Reserved By.<a href="https://html.design"> Free  html Templates</a></p>
        </div>
      </div>
      <!-- copyright section end -->
   <!-- Javascript files-->
   <script src="{{asset('js/jquery.min.js')}}"></script>
   <script src="{{asset('js/popper.min.js')}}"></script>
   <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
   <script src="{{asset('js/jquery-3.0.0.min.js')}}"></script>
   <script src="{{asset('js/plugin.js')}}"></script>
   <!-- sidebar -->
   <script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
   <script src="{{asset('js/custom.js')}}"></script>
   <!-- javascript -->
   <script src="{{asset('js/owl.carousel.js')}}"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   <script>
     $('#myCarousel').carousel({
            interval: false
        });

        //scroll slides on swipe for touch enabled devices

        $("#myCarousel").on("touchstart", function(event){

            var yClick = event.originalEvent.touches[0].pageY;
            $(this).one("touchmove", function(event){

                var yMove = event.originalEvent.touches[0].pageY;
                if( Math.floor(yClick - yMove) > 1 ){
                    $(".carousel").carousel('next');
                }
                else if( Math.floor(yClick - yMove) < -1 ){
                    $(".carousel").carousel('prev');
                }
            });
            $(".carousel").on("touchend", function(){
                $(this).off("touchmove");
            });
        });
   </script>
   </body>
   </html>
