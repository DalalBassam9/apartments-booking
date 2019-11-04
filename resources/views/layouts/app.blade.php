<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Apartment Booking') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Stylesheets -->
    <link href="{{asset('frontend/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
  
    <!-- Responsive -->
    <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">

</head>
<body>
<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header-->
    <header class="main-header">
        
        <div class="main-box">
            <div class="outer-container clearfix">
                
   
                <!--Nav Outer-->
                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->    	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                           
                          <li><a href="{{route('home')}}">Home</a></li>       
                     @auth
                    <li><a href="{{route('bookings.index')}}">Booking {{ Auth::user()->name }}</a></li>
@endauth
     @guest
@if (Route::has('register'))
                               
                                   <li> <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                                
                            @endif
                                <li ><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
   
                           
      
                        @else  

                             
                         <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                              
                            </li>
                        @endguest                      
                            
</ul>
                        </div>
                    </nav><!-- Main Menu End-->
                    
                </div>
                <!--Nav Outer End-->
                
            </div>
        </div>
    
    </header>
    <!--End Main Header -->

        <main class="py-4">
            @yield('content')
        </main>
    </div>

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div>

<!--/Footer-->
<footer class="main-footer ">
<!--/Footer-->
<div class="footer-bottom"  >

    <div class="row">
        <div class="col-lg-12 text-center">
            <p>Copyright © 2019 Apartments.</p>
        </div>
    </div>
</div>
</footer>


<script src="{{asset('frontend/js/jquery.js')}}"></script> 
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery-ui.js')}}"></script>
<script src="{{asset('frontend/js/jquery.fancybox.pack.js')}}"></script>
<script src="{{asset('frontend/js/jquery.fancybox-media.js')}}"></script>
<script src="{{asset('frontend/js/mixitup.js')}}"></script>
<script src="{{asset('frontend/js/owl.js')}}"></script>
<script src="{{asset('frontend/js/wow.js')}}"></script>
<script src="{{asset('frontend/js/appear.js')}}"></script>
<script src="{{asset('frontend/js/script.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</body>
</html>
