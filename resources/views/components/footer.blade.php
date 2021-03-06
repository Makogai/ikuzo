<footer class="footer">
    <div class="container">
        <div class="row footer_logo_row">
            <div class="col d-flex flex-row align-items-center justify-content-center">
                <div class="logo">
                    <img src="{{asset('images/logo.png')}}" style="height: 70px; margin-top: -10px;" alt="">
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
                        <li><a href="{{ $instagram  }}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="{{ $youtube  }}"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        <li><a href="{{ $spotify  }}"><i class="fa fa-spotify" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        </br></br><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    {!! $copyright !!}
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

    </div>
</footer>
