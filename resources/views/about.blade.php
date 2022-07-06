<x-content-layout title="About">
    <slot:styles>
        <link rel="stylesheet" type="text/css" href="styles/about.css">
        <link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
        <style>
            .intro_text {
                color: #2e3038 !important;
            }
        </style>
    </slot:styles>

    <div class="intro">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="intro_content text-center">
                        <div class="section_title text-center"><h1>About {{$websiteName}}</h1></div>
                        <div class="intro_text text-center">{!! $aboutPodcast !!} </div>
                        {{--                        <div class="button_fill intro_button"><a href="#">read more</a></div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Milestones -->
    <div class="milestones">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/milestones.jpg"
             data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title light text-center"><h1>Fun Facts</h1></div>
                </div>
            </div>
            <div class="row milestones_row">

                <!-- Milestone -->
                <div class="col-xl-3 col-md-6">
                    <div class="milestone text-center">
                        <div class="milestone_content ml-auto mr-auto">
                            <div class="milestone_counter" data-end-value="{{$totalDurationMinutes}}">0</div>
                            <div class="milestone_icon"><img src="images/alarm-clock.svg"
                                                             alt="https://www.flaticon.com/authors/smashicons"></div>
                        </div>
                        <div class="milestone_title">Streamed Minutes</div>
                    </div>
                </div>

                <!-- Milestone -->
                <div class="col-xl-3 col-md-6">
                    <div class="milestone text-center">
                        <div class="milestone_content ml-auto mr-auto">
                            <div class="milestone_counter" data-end-value="{{$totalShows}}">0</div>
                            <div class="milestone_icon"><img src="images/speaker.svg"
                                                             alt="https://www.flaticon.com/authors/smashicons"></div>
                        </div>
                        <div class="milestone_title">Audio Episodes</div>
                    </div>
                </div>

                <!-- Milestone -->
                <div class="col-xl-3 col-md-6">
                    <div class="milestone text-center">
                        <div class="milestone_content ml-auto mr-auto">
                            <div class="milestone_counter" data-end-value="{{ $videoEpisodes }}">0</div>
                            <div class="milestone_icon"><img src="images/film.svg"
                                                             alt="https://www.flaticon.com/authors/smashicons"></div>
                        </div>
                        <div class="milestone_title">Video Episodes</div>
                    </div>
                </div>

                <!-- Milestone -->
                <div class="col-xl-3 col-md-6">
                    <div class="milestone text-center">
                        <div class="milestone_content ml-auto mr-auto">
                            <div class="milestone_counter" data-end-value="{{$totalGuests}}">0</div>
                            <div class="milestone_icon"><img src="images/television.svg"
                                                             alt="https://www.flaticon.com/authors/smashicons"></div>
                        </div>
                        <div class="milestone_title">Guests</div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- About -->

    <div class="about mb-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <div class="section_title text-center"><h1>About the creators</h1></div>
                        </div>
                    </div>
                    @foreach($creators as $item)
                        <div
                            class="about_container d-flex flex-lg-row flex-column align-items-center justify-content-start mt-4">
                            <div class="about_content">
                                <div class="section_title font-xl"><h3 style="color: #2e3038!important;">{{$item->name}}</h3></div>
                                <div class="about_text px-4">
                                    {!! $item->bio !!}
                                </div>
                                <div class="social">
                                    <ul class="d-flex flex-row align-items-start justify-content-start">
                                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="about_image"><img src="storage/{{$item->photo}}" class="w-100" alt=""></div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Newsletter -->

    <div class="newsletter">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/newsletter.jpg"
             data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title light text-center"><h1>Join our Newsletter</h1></div>
                    <div class="newsletter_text text-center">
                        <p>Stay on track with the latest information about our podcasts, guests, special guest and
                            giveaways.</p>
                    </div>
                </div>
            </div>
            <div class="row newsletter_row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="newsletter_form_container">
                        <form action="#"
                              class="newsletter_form d-flex flex-md-row flex-column align-items-md-start align-items-center justify-content-md-between justify-content-start"
                              id="newsletter_form">
                            <input type="email" class="newsletter_input" required="required">
                            <button class="newsletter_button button_fill">subscribe now!</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-content-layout>
