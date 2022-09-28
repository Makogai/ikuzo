<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{$websiteName}}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="My Podcast template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    {{ $additionalStyles ?? ''  }}
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">

    <style>
        @font-face {
            font-family: ikuzo;
            src: url("css/Lovelo-Black.otf") format("opentype");
        }

        header li a {
            font-family: ikuzo;
        }
        h1,h2, .title {
            font-family: ikuzo;
        }
    </style>
{{--    <script src="js/test.js"></script>--}}
{{--    <script>--}}

{{--        function ig_media_preview(base64data) {--}}
{{--            var jpegtpl = "/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEABsaGikdKUEmJkFCLy8vQkc/Pj4/R0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0cBHSkpNCY0PygoP0c/NT9HR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR//AABEIABQAKgMBIgACEQEDEQH/xAGiAAABBQEBAQEBAQAAAAAAAAAAAQIDBAUGBwgJCgsQAAIBAwMCBAMFBQQEAAABfQECAwAEEQUSITFBBhNRYQcicRQygZGhCCNCscEVUtHwJDNicoIJChYXGBkaJSYnKCkqNDU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6g4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2drh4uPk5ebn6Onq8fLz9PX29/j5+gEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoLEQACAQIEBAMEBwUEBAABAncAAQIDEQQFITEGEkFRB2FxEyIygQgUQpGhscEJIzNS8BVictEKFiQ04SXxFxgZGiYnKCkqNTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqCg4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2dri4+Tl5ufo6ery8/T19vf4+fr/2gAMAwEAAhEDEQA/AA==",--}}
{{--                t = atob(base64data),--}}
{{--                p = t.slice(3).split(""),--}}
{{--                o = t.substring(0, 3).split("").map(function(e) {--}}
{{--                    return e.charCodeAt(0)--}}
{{--                }),--}}
{{--                c = atob(jpegtpl).split("");--}}
{{--            c[162] = String.fromCharCode(o[1]);--}}
{{--            c[160] = String.fromCharCode(o[2]);--}}
{{--            return base64data ? "data:image/jpeg;base64," + btoa(c.concat(p).join("")) : null--}}
{{--        };--}}
{{--        const options = {--}}
{{--            method: 'GET',--}}
{{--            headers: {--}}
{{--                'X-RapidAPI-Key': '5e9bebc965msh78108fcb8377a6cp1cb4f8jsn1fb99ea32990',--}}
{{--                'X-RapidAPI-Host': 'instagram130.p.rapidapi.com'--}}
{{--            }--}}
{{--        };--}}
{{--        // document.domain = "instagram.com";--}}
{{--        let gallery = document.querySelector('#instagram');--}}
{{--        fetch('https://instagram130.p.rapidapi.com/account-info?username=ikuzo_unscripted', options)--}}
{{--            .then(response => response.json())--}}
{{--            .then(response => {--}}
{{--                let finalData = "";--}}
{{--                response.edge_owner_to_timeline_media.edges.forEach((img, index) => {--}}
{{--                    if (index === 4 )--}}
{{--                        return--}}
{{--                    console.log(img.node)--}}
{{--                    finalData = finalData.concat(" ", `--}}
{{--                        <div class="gallery_item">--}}
{{--                            <a class="colorbox" href="${ig_media_preview(img.node.media_preview)}"><img src="${ig_media_preview(img.node.media_preview)}"--}}
{{--                                                                                       alt="" class="w-100"></a>--}}
{{--                        </div>--}}
{{--                `)--}}
{{--                    // console.log(finalData)--}}
{{--                })--}}
{{--                // console.log(finalData)--}}
{{--                document.querySelector('#instagram').innerHTML = finalData;--}}
{{--            })--}}
{{--            .catch(err => console.error(err));--}}
{{--    </script>--}}
</head>
<body>

<div class="super_container">

    <!-- Header -->

    <header class="header trans_400">

        <!-- Logo -->
        <div class="logo">
            <img src="{{asset('images/logo.png')}}" style="height: 70px; margin-top: -10px;" alt="">
        </div>

        <div class="container mt-3">
            <div class="row">
                <div class="col">
                    <div class="header_content d-flex flex-row align-items-center justify-content-start trans_400">
                        <nav class="main_nav">
                            <ul class="d-flex flex-row align-items-start justify-content-start">
                                <li><a href="/">Home</a></li>
                                <li><a href="/about">About</a></li>
                                <li><a href="/episodes">Episodes</a></li>
{{--                                <li><a href="/blog">Blog</a></li>--}}
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
                    <li><a href="{{ $instagram  }}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="{{ $youtube  }}"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                    <li><a href="{{ $spotify  }}"><i class="fa fa-spotify" aria-hidden="true"></i></a></li>
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
{{--                <li><a href="/blog">Blog</a></li>--}}
                <li><a href="/contact">Contact</a></l
                    i>
            </ul>
            <div class="menu_extra d-flex flex-column align-items-end justify-content-start">
                <div class="social">
                    <ul class="d-flex flex-row align-items-start justify-content-start">
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
        <div class="background_image"
             style="background-image:url({{$lastPodcast['image']}}); filter: blur(7px); transform: scale(1.1); box-shadow:inset 0 0 0 2000px rgba(24, 46, 75, 0.5);"></div>
        <div class="home_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content">
                            <!-- <div class="tags">
                                <ul class="d-flex flex-row align-items-start justify-content-start">
                                    <li><a href="#">lifestyle</a></li>
                                    <li><a href="#">interview</a></li>
                                    <li><a href="#">last episode</a></li>
                                </ul>
                            </div> -->
                            <div class="home_title"><h1>Season <b>{{$lastPodcast['season']}}</b> episode <b>{{$lastPodcast['episode']}}</b> is out! Check it out</h1></div>
                            <div class="home_subtitle">{{ (strlen($lastPodcast['content']) > 13) ? substr($lastPodcast['content'],0,500).'...' : $lastPodcast['content']  }}
                            </div>
                            <div class="track_info">
                                <ul class="d-flex flex-row align-items-start justify-content-start">
                                    <li><a href="#">{{ $lastPodcast['date'] }}</a></li>
                                    <li><a href="#">{{ $lastPodcast['type'] }}</a></li>
                                    <li>{{$lastPodcast['duration']}}</li>
{{--                                    <li><a href="#">0 Comments</a></li>--}}
                                </ul>
                            </div>
                            <div class="track track_home">
                                <!-- <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/197004056&color=%23ff5500&auto_play=false&hide_related=true&show_comments=false&show_user=false&show_reposts=false&show_teaser=false"></iframe> -->
{{--                                <iframe style="border-radius:12px"--}}
{{--                                        src="https://open.spotify.com/embed/episode/18xSmFoUVDuVgsCiKRx9o9?utm_source=generator"--}}
{{--                                        width="100%" height="152" frameBorder="0" allowfullscreen=""--}}
{{--                                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>--}}
                                <iframe src="{{$lastPodcast['embedLink']}}" height="152" width="100%" frameborder="0" scrolling="no"></iframe>
                            </div>
                            <div class="button_border home_button trans_200"><a href="#">More Info</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Shows -->

    <div class="shows pb-0">
        <div class="container-fluid">
        {{ $fluid ?? '' }}
        <!-- <div class="row">
				<div class="col text-center">
					<div class="button_fill shows_button"><a href="#">browse shows</a></div>
				</div>
			</div> -->
        </div>
    </div>

    <div class="">
        <div class="container">
        {{ $slot }}
        <!-- <div class="row">
				<div class="col text-center">
					<div class="button_fill shows_button"><a href="#">browse shows</a></div>
				</div>
			</div> -->
        </div>
    </div>


    {{ $noContainer ?? ''  }}


    <x-footer></x-footer>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
