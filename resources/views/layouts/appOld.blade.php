<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SPARKER - Premium directory and listings template by Ansonika.">
    <meta name="author" content="Ansonika">
    <title>SPARKER | Premium directory and listings template by Ansonika.</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{ asset('main/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('main/css/style.css')}}" rel="stylesheet">
	<link href="{{ asset('main/css/vendors.css')}}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{ asset('main/css/custom.css')}}" rel="stylesheet">

</head>

<body>
		
        <div id="page">
            
        <header class="header menu_fixed">
            <div id="logo">
                <a href="index.html" title="Sparker - Directory and listings template">
                    <img src="img/logo.svg" width="165" height="35" alt="" class="logo_normal">
                    <img src="img/logo_sticky.svg" width="165" height="35" alt="" class="logo_sticky">
                </a>
            </div>
            <ul id="top_menu">
                <li><a href="account.html" class="btn_add">Add Listing</a></li>
                <li><a href="#sign-in-dialog" id="sign-in" class="login" title="Sign In">Sign In</a></li>
            </ul>
            <!-- /top_menu -->
            <a href="#menu" class="btn_mobile">
                <div class="hamburger hamburger--spin" id="hamburger">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </a>
            <nav id="menu" class="main-menu">
                <ul>
                    <li><span><a href="#0">Home</a></span>
                        <ul>
                            <li><a href="index.html">Home version 1</a></li>
                            <li><a href="index-2.html">Home version 2</a></li>
                            <li><a href="index-3.html">Home version 3</a></li>
                            <li><a href="index-4.html">Home version 4</a></li>
                            <li><a href="index-5.html">Home version 5</a></li>
                            <li><a href="index-6.html">Home version 6 (GDPR)</a></li>
                        </ul>
                    </li>
                    <li><span><a href="#0">Listings</a></span>
                        <ul>
                            <li>
                                <span><a href="#0">Grid Layout</a></span>
                                <ul>
                                    <li><a href="grid-listings-filterscol-search-aside.html">Sidebar+Search mobile 1</a></li>
                                    <li><a href="grid-listings-filterstop-search-aside.html">Full+Search mobile 1</a></li>
                                    <li><a href="grid-listings-filterscol.html">Sidebar+Search mobile 2</a></li>
                                    <li><a href="grid-listings-filterstop.html">Full+Search mobile 2</a></li>
                                    <li><a href="grid-listings-isotope.html">Full+Isotope filter</a></li>
                                </ul>
                            </li>
                            <li>
                                <span><a href="#0">Row Layout</a></span>
                                <ul>
                                    <li><a href="row-listings-filterscol-search-aside.html">Sidebar+Search mobile 1</a></li>
                                    <li><a href="row-listings-filterstop-search-aside.html">Full+Search mobile 1</a></li>
                                    <li><a href="row-listings-filterscol.html">Sidebar+Search mobile 2</a></li>
                                    <li><a href="row-listings-filterstop.html">Full+Search mobile 2</a></li>
                                    <li><a href="row-listings-isotope.html">Full+Isotope filter</a></li>
                                </ul>
                            </li>
                            <li><a href="listing-map.html">Listing Map</a></li>
                            <li>
                                <span><a href="#0">Detail pages</a></span>
                                <ul>
                                    <li><a href="detail-hotel.html">Detail page 1</a></li>
                                    <li><a href="detail-restaurant.html">Detail page 2</a></li>
                                    <li><a href="detail-shop.html">Detail page 3</a></li>
                                </ul>
                            </li>
                            <li><a href="bookings.html">Bookings - Purchases</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="confirm.html">Confirm</a></li>
                        </ul>
                    </li>
                    <li><span><a href="#0">Pages</a></span>
                        <ul>
                            <li><a href="admin_section/index.html">Admin section</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="account.html">Account</a></li>
                            <li><a href="help.html">Help Section</a></li>
                            <li><a href="faq.html">Faq Section</a></li>
                            <li><a href="wishlist.html">Wishlist page</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                            <li>
                                <span><a href="#0">Icon Packs</a></span>
                                <ul>
                                    <li><a href="icon-pack-1.html">Icon pack 1</a></li>
                                    <li><a href="icon-pack-2.html">Icon pack 2</a></li>
                                    <li><a href="icon-pack-3.html">Icon pack 3</a></li>
                                    <li><a href="icon-pack-4.html">Icon pack 4</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="media-gallery.html">Media gallery</a></li>
                        </ul>
                    </li>
                    <li><span><a href="#0">Extra</a></span>
                        <ul>
                            <li><a href="404.html">404 page</a></li>
                            <li><a href="contacts-2.html">Contacts 2</a></li>
                            <li><a href="pricing-tables.html">Pricing tables</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Register</a></li>
                            <li><a href="menu-options.html">Menu Options</a></li>
                            <li><a href="invoice.html">Invoice</a></li>
                            <li><a href="coming_soon/index.html">Coming Soon</a></li>
                        </ul>
                    </li>
                    <li><span><a href="#0">Buy template</a></span></li>
                </ul>
            </nav>
        </header>
        <!-- /header -->





















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
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
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
