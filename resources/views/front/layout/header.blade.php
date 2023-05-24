<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />


    <title>@yield('title')</title>
    <meta name="description" content="@yield('desc')">
    <meta name="keywords" content="@yield('keyw')">

    <meta name="csrf-token" content="{{ csrf_token() }}">

     <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/front/images/favicon.ico') }}" /> 

    <link rel="stylesheet" href="{{ asset('/front/css/bootstrap.min.css') }} "/>
    <link rel="stylesheet" href="{{ asset('/front/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/front/css/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('/front/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/front/css/owl.theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('/front/css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('/front/css/lightgallery.css') }}" />
    <link rel="stylesheet" href="{{ asset('/front/css/woocommerce.css') }}" />
    <link rel="stylesheet" href="{{ asset('/front/css/royal-preload.css') }}" />

    <link rel="stylesheet" href="{{ asset('/front/style.css') }}" />
    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/front/plugins/revolution/revolution/css/settings.css') }}">   
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/front/plugins/revolution/revolution/css/navigation.css') }}">



	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	

    <style>
      
   </style>


    <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-T6TBMDT');</script>
        <!-- End Google Tag Manager -->
        <meta name="facebook-domain-verification" content="0tmekyj4ujnvk75cyw4x9ne1h92ta3" />

</head>

<body class="royal_preloader">
    <div id="page" class="site">
   <header id="site-header" class="site-header header-transparent">
            <!-- Main Header start -->
            <div class="octf-main-header is-fixed">
                <div class="octf-area-wrap">
                    <div class="container-fluid octf-mainbar-container">
                        <div class="octf-mainbar">
                            <div class="octf-mainbar-row octf-row">
                                <div class="octf-col logo-col no-padding">
                                    <div id="site-logo" class="site-logo">
                                        <a href="{{ route('index') }}">
                                            <img src="{{ asset($common->icon1) }}" alt="Haus Luxury" class="">
                                        </a>
                                    </div>
                                </div>
                                <div class="octf-col menu-col no-padding">
                                    <nav id="site-navigation" class="main-navigation">
                                        <ul class="menu">
                                            <li class="menu-item-has-children current-menu-item current-menu-ancestor"><a href="{{ route('index') }}">Home</a></li>
                                            <li><a href="{{ route('about') }}">About</a></li>
                                            <li><a href="{{ route('brands') }}">Brands</a></li>
                                            {{-- <li><a href="https://haus-one.markup.az/seeAllBrands1.html">All Products</a></li> --}}
                                            <li class="menu-item-has-children mega-dropdown sub-portfolio"><a style="color:white">Portfolio</a>
                                                <ul class="mega-sub-menu mega-sub-portfolio">
                                                       <ul class="col">
                                                           <li><a href="{{ route('portfolio_images') }}">Portfolio Images</a></li>
                                                           <li><a href="{{ route('portfolio_videos') }}">Portfolio Videos</a></li>
                                                       </ul>
                                               </ul>
                                           </li>
                                            <li class="menu-item-has-children"><a href="{{ route('blogs') }}">Blog</a></li>
                                            <li><a href="{{ route('contact') }}">Contacts</a></li>
                                            
                                              <li class="menu-item-has-children mega-dropdown sub-portfolio"><a style="color:white"> {{ strtoupper(App::getLocale()) }}</a>
                                                <ul class="mega-sub-menu mega-sub-portfolio">
                                                       <ul class="col">
                                                              @foreach ($all_languages as $a_language)
                                                                 <li>
                                                              <a href="{{ route('locale', $a_language->code) }}"> {{ $a_language->name }}
                                                              </a>
                                                            </li>
                                                          @endforeach
                                                          
                                                       </ul>
                                               </ul>
                                           </li>
                                           
                                           
                                        </ul>
                                    </nav>
                                </div>
                                <div class="octf-col cta-col text-right no-padding">
                              
                                     
                                            <div class="h-search-form-field collapse">
                                                <div class="h-search-form-inner">
                                                    <form role="search" method="get" class="search-form">
                                                        <input type="search" class="search-field" placeholder="SEARCH..." value="" name="s">
                                                        <button type="submit" class="search-submit"><i class="ot-flaticon-search"></i></button>
                                                    </form>
                                                </div>                                  
                                            </div>
                                        </div>

                                        <div class="octf-sidepanel octf-cta-header">
                                            <div class="site-overlay panel-overlay"></div>
                                            <div id="panel-btn" class="panel-btn octf-cta-icons">
                                                <i class="ot-flaticon-menu"></i>
                                            </div>
                                        </div>
                                        
                                    </div>                               
                                </div>
                            </div>
                        </div>
                    </div>
         



            <div class="header_mobile">
                <div class="container-fluid">
                    <div class="octf-mainbar-row octf-row">
                        <div class="octf-col">
                            <div class="mlogo_wrapper clearfix">
                                <div class="mobile_logo">
                                    <a href="{{ route('index') }}">
                                        <img src="{{ asset($common->icon1) }}" alt="Haus Luxury">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="octf-col justify-content-end">
                            <div class="octf-search octf-cta-header">
                                <div class="toggle_search octf-cta-icons">
                                    <i class="ot-flaticon-search"></i>
                                </div>
                                <!-- Form Search on Header -->
                                <div class="h-search-form-field collapse">
                                    <div class="h-search-form-inner">
                                        <form role="search" method="get" class="search-form">
                                            <input type="search" class="search-field" placeholder="SEARCH..." value="" name="s">
                                            <button type="submit" class="search-submit"><i class="ot-flaticon-search"></i></button>
                                        </form>
                                    </div>                                  
                                </div>
                            </div>
                            <div class="octf-menu-mobile octf-cta-header">
                                <div id="mmenu-toggle" class="mmenu-toggle">
                                    <button><i class="ot-flaticon-menu"></i></button>
                                </div>
                                <div class="site-overlay mmenu-overlay"></div>
                                <div id="mmenu-wrapper" class="mmenu-wrapper on-right">
                                    <div class="mmenu-inner">
                                        <a class="mmenu-close" href="#"><i class="ot-flaticon-right-arrow"></i></a>
                                        <div class="mobile-nav">
                                            <ul id="menu-main-menu" class="mobile_mainmenu none-style">
                                            <li class="menu-item-has-children current-menu-item current-menu-ancestor"><a href="{{ route('index') }}">Home</a></li>
                                            <li><a href="{{ route('about') }}">About</a></li>
                                            <li><a href="{{ route('brands') }}">Brands</a></li>
                                            {{-- <li><a href="https://haus-one.markup.az/seeAllBrands1.html">All Products</a></li> --}}
                                            <li class="menu-item-has-children mega-dropdown"><a href="#">Portfolio</a></li>
                                            <li class="menu-item-has-children"><a href="{{ route('blogs') }}">Blog</a></li>
                                            <li><a href="{{ route('contact') }}">Contacts</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
