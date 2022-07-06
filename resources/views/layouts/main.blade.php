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
        <div class="background_image"
             style="background-image:url({{$lastPodcast['image']}}); filter: blur(7px); transform: scale(1.1); box-shadow:inset 0 0 0 2000px rgba(0, 0, 255, 0.3);"></div>
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
                                    <li><a href="#">0 Comments</a></li>
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

    <div class="shows">
        <div class="container-fluid">
        {{ $fluid ?? '' }}
        <!-- <div class="row">
				<div class="col text-center">
					<div class="button_fill shows_button"><a href="#">browse shows</a></div>
				</div>
			</div> -->
        </div>
    </div>

    <div class="shows">
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


    <footer class="footer">
        <div class="container">
            <div class="row footer_logo_row">
                <div class="col d-flex flex-row align-items-center justify-content-center">
                    <div class="logo">
                        <a href="#"><span>ikuzo</span>unscripted</a>
                    </div>
                </div>
            </div>
            <div class="row footer_content_row">

                <!-- Tags -->
{{--                <div class="col-lg-4">--}}
{{--                    <div class="footer_title">Tags</div>--}}
{{--                    <div class="footer_list">--}}
{{--                        <div>--}}
{{--                            <div><a href="#">music</a></div>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <div><a href="#">art</a></div>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <div><a href="#">technology</a></div>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <div><a href="#">travel & food</a></div>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <div><a href="#">viral</a></div>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <div><a href="#">social media</a></div>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <div><a href="#">interview</a></div>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <div><a href="#">developement</a></div>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <div><a href="#">success</a></div>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <div><a href="#">live</a></div>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <div><a href="#">did you know?</a></div>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <div><a href="#">health</a></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <!-- Latest Episodes -->
                <div class="col-lg-4">
                    <div class="footer_title">Latest Episodes</div>
                    <div class="latest_container">

                        <!-- Latest -->
                        <div class="latest">
                            <div class="latest_title_container d-flex flex-row align-items-start justify-content-start">
                                <a href="episode.html">
                                    <div class="d-flex flex-row align-items-start justify-content-start">
                                        <div class="latest_play">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1"
                                                 x="0px" y="0px" width="512px" height="512px" viewBox="0 0 714 714"
                                                 style="enable-background:new 0 0 714 714;" xml:space="preserve">
												<g id="Play">
                                                    <path
                                                        d="M641.045,318.521L102,0C73.822,0,51,22.822,51,51v612c0,28.178,22.822,51,51,51l539.045-318.521      C654.661,387.422,663,372.81,663,357C663,341.19,654.661,326.579,641.045,318.521z M153,565.386V148.614L505.665,357      L153,565.386z"
                                                        fill="#FFFFFF"/>
                                                </g>
											</svg>
                                        </div>
                                        <div class="latest_title_content">
                                            <div class="latest_title">Season <b>{{$lastPodcast['season']}}</b> episode <b>{{$lastPodcast['episode']}}</b> -
                                                {{$lastPodcast['title']}}</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="latest_episode_info">
                                <ul class="d-flex flex-row align-items-start justify-content-start">
                                    <li><a href="#">{{$lastPodcast['date']}}</a></li>
                                    <li><a href="#">{{ $lastPodcast['type'] }}</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Latest -->


                    </div>
                </div>

                <!-- Gallery -->
{{--                <div class="col-lg-4">--}}
{{--                    <div class="footer_title">Instagram</div>--}}
{{--                    <div class="gallery d-flex flex-row align-items-start justify-content-start flex-wrap"--}}
{{--                         id="instagram">--}}

{{--                        <!-- Gallery Item -->--}}


{{--                    </div>--}}
{{--                </div>--}}
            </div>
            <div class="row footer_social_row">
                <div class="col">
                    <div class="footer_social">
                        <ul class="d-flex flex-row align-items-center justify-content-center">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-spotify" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            </br></br><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            {!! $copyright !!}
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

        </div>
    </footer>
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
