<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{app(\App\Settings\GeneralSettings::class)->site_name}} | {{ $title }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="My Podcast template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/bootstrap-4.1.2/bootstrap.min.css')}}">
    <link href="{{asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('plugins/colorbox/colorbox.css')}}" rel="stylesheet" type="text/css">
    {{ $styles ?? ''  }}
</head>
<body>

<div class="super_container">

    <!-- Header -->

    <header class="header trans_400">

        <!-- Logo -->
        <div class="logo">
            <a href="#"><span>Ikuzo</span>unscripted</a>
        </div>

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_content d-flex flex-row align-items-center justify-content-start trans_400">
                        <nav class="main_nav">
                            <ul class="d-flex flex-row align-items-start justify-content-start">
                                <li><a href="/">Home</a></li>
                                <li><a href="/about">About</a></li>
                                <li><a href="/episodes">Episodes</a></li>
                                <li><a href="/blog">Blog</a></li>
                                <li><a href="/contact">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Submit & Social -->
        <div class="header_right d-flex flex-row align-items-start justify-content-start">

            <!-- Submit -->
            <!-- <div class="submit"><a href="#">Submit a Podcast</a></div> -->

            <!-- Social -->
            <div class="social">
                <ul class="d-flex flex-row align-items-start justify-content-start">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-spotify" aria-hidden="true"></i></a></li>
                </ul>
            </div>

            <!-- Hamburger -->
            <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>

        </div>
    </header>

    <!-- Menu -->

    <div class="menu">
        <div class="menu_content d-flex flex-column align-items-end justify-content-start">
            <ul class="menu_nav_list text-right">
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/episodes">Episodes</a></li>
                <li><a href="/blog">Blog</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
            <div class="menu_extra d-flex flex-column align-items-end justify-content-start">
                <div class="social">
                    <ul class="d-flex flex-row align-items-start justify-content-start">
                        <li><a href="{{ $facebook  }}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="{{ $instagram  }}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="{{ $youtube  }}"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        <li><a href="{{ $spotify  }}"><i class="fa fa-spotify" aria-hidden="true"></i></a></li>
                        <!-- <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Home -->

    <div class="home">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('images/about.jpg')}}" data-speed="0.8"></div>
        <div class="home_container d-flex flex-column align-items-center justify-content-center">
            <div class="home_content">
                <div class="home_title"><h1>{{ $title ?? '' }}</h1></div>
            </div>
        </div>
    </div>

    <!-- Intro -->
    {{ $slot }}



    <!-- Footer -->
    <x-footer></x-footer>


</div>

<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('styles/bootstrap-4.1.2/popper.js')}}"></script>
<script src="{{asset('styles/bootstrap-4.1.2/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{asset('plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('plugins/colorbox/jquery.colorbox-min.js')}}"></script>
<script src="{{asset('plugins/easing/easing.js')}}"></script>
<script src="{{asset('plugins/progressbar/progressbar.min.js')}}"></script>
<script src="{{asset('plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{asset('js/blog.js')}}"></script>
<script src="{{asset('js/about.js')}}"></script>
</body>
</html>
