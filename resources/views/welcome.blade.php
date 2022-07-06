<x-main-layout>


    <x-slot:fluid>

        <div class="shows">
            <div class="container-fluid">
                <div class="row">
                    <div class=" col-8 offset-1 mb-4">
                        <h2 class="shows_2_title text-black" style="color: #2e3038  !important;">Latest podcasts</h2>

                    </div>
                </div>
                <div class="row shows_row">

                    <div class="col-8 offset-1">

                        <div class="row">
                            @foreach($items as $item)
                                <div class="col-lg-4 mb-3">
                                    <div class="show">
                                        <div class="show_image">
                                            <a href="{{$item['link']}}">
                                                <img src="{{$item['image']}}" alt="https://unsplash.com/@trevcole">
                                            </a>
                                            <div class="show_tags">
                                                <div class="tags">
                                                    <ul class="d-flex flex-row align-items-start justify-content-start">
                                                        <li><a href="#">{{$item['type']}}</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="show_play_icon"><img src="images/play.svg"
                                                                             alt="https://www.flaticon.com/authors/cole-bemis">
                                            </div>
                                        </div>
                                        <div class="show_content">
                                            <div class="show_date"><a href="#">{{$item['date']}}</a></div>
                                            <div class="show_title"><a href="/">{{$item['title']}}</a></div>
                                            <div
                                                class="show_info d-flex flex-row align-items-start justify-content-start">
                                                <div
                                                    class="show_fav d-flex flex-row align-items-center justify-content-start">
                                                    <div class="show_fav_icon show_info_icon"><img class="svg"
                                                                                                   src="images/time-left.svg"
                                                                                                   alt="">
                                                    </div>
                                                    <div class="show_fav_count">{{$item['duration']}}</div>
                                                </div>
                                                {{--                                    <div class="show_comments">--}}
                                                {{--                                        <a href="#">--}}
                                                {{--                                            <div class="d-flex flex-row align-items-center justify-content-start">--}}
                                                {{--                                                <div class="show_comments_icon show_info_icon"><img class="svg"--}}
                                                {{--                                                                                                    src="images/speech-bubble.svg"--}}
                                                {{--                                                                                                    alt=""></div>--}}
                                                {{--                                                <div class="show_comments_count">88 Comments</div>--}}
                                                {{--                                            </div>--}}
                                                {{--                                        </a>--}}
                                                {{--                                    </div>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="row">
                            <div class="col-12">
                                <a href="https://www.listennotes.com/podcasts/ikuzos-unscripted-podcast-petar-dzakovic-qkyaYD9ponh/" title="Ikuzo’s Unscripted Podcast | Listen Notes"><img loading="lazy" src="https://cdn-images-2.listennotes.com/images/podcasts/qkyaYD9ponh/badge/" alt="Ikuzo’s Unscripted Podcast | Listen Notes" style="height: auto; max-width: 100%; width: 100%;" /></a>
                            </div>
                            <div class="col-12 mt-3 listenOn">
                                <a href="https://open.spotify.com/show/3FLnOT2GnvWBh2aqJq0sR0" class="px-2 py-2 rounded gap-2" style="background-color: #1ed760;">
                                    <img src="images/spotify.png" alt="">
                                    <p class="text-white font-weight-bold ml-3">Listen on Spotify</p>
                                </a>
                            </div>
                            <div class="col-12 mt-3 listenOn">
                                <a href="" class="px-2 py-2 rounded gap-2"  style="background:linear-gradient(-90deg, #4285f4, #fbbc05, #ea4335);">
                                    <img src="images/googlepodcast.png" alt="">
                                    <p class="text-white font-weight-bold ml-3">Listen on Google</p>
                                </a>
                            </div>
                            <div class="col-12 mt-3">
                                <a href="https://podcasts.apple.com/us/podcast/ikuzos-unscripted-podcast/id1586974342?itsct=podcast_box_badge&amp;itscg=30200&amp;ls=1" style="display: inline-block; overflow: hidden; border-radius: 13px; width: 100%;"><img src="https://tools.applemediaservices.com/api/badges/listen-on-apple-podcasts/badge/en-us?size=250x83&amp;releaseDate=1649430000&h=f256461c7d011217ebace5df0d3768e2" alt="Listen on Apple Podcasts" style="border-radius: 13px; width: 100%;"></a>
                            </div>
                            <div class="col-12 mt-3">
                                <iframe src="https://embed.podcasts.apple.com/us/podcast/ikuzos-unscripted-podcast/id1586974342?itsct=podcast_box_player&amp;itscg=30200&amp;ls=1&amp;theme=auto" height="450px" frameborder="0" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation-by-user-activation" allow="autoplay *; encrypted-media *;" style="width: 100%; max-width: 660px; overflow: hidden; border-radius: 10px; background-color: transparent;"></iframe>
                            </div>
                            <div class="col-12 mt-3">
                                <img src="https://tools-qr-production.s3.amazonaws.com/output/apple-toolbox/582b75fd0ff67e9ff0c1ef4b8532bcef/94a6a8c8aa53160ef71831001d9c0553.png">
                            </div>

                            <div class="col-12 mt-3">
                                <iframe title="deezer-widget" src="https://widget.deezer.com/widget/auto/show/3450172" width="100%" height="300" frameborder="0" allowtransparency="true" allow="encrypted-media; clipboard-write"></iframe>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col text-center">
                        <div class="button_fill shows_button"><a href="/episodes">Browse all podcasts</a></div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot:fluid>

    <x-slot:noContainer>
        <div class="shows_2">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="shows_2_title">Latest blog posts</div>
                    </div>
                </div>
                <div class="row shows_2_row">

                    <!-- Show -->
                    @foreach($posts as $item)
                        <div class="col-lg-6 col-sm-12">
                            <div class="show">
                                <div class="show_image">
                                    <a href="blog/{{$item['id']}}">
                                        <img src="storage/{{$item['image']}}" alt="https://unsplash.com/@trevcole"
                                             style="height: 300px; width: 100%; object-fit: cover">
                                    </a>
                                    <div class="show_tags">
                                        <div class="tags">
                                            <ul class="d-flex flex-row align-items-start justify-content-start">
                                                <li><a href="#">{{$item['category']['name']}}</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="show_content">
                                    <div class="show_title"><a href="/">{{$item['title']}}</a></div>
                                    <div class="show_info d-flex flex-column align-items-start justify-content-start">
                                        <div
                                            class="show_fav d-flex flex-row align-items-center justify-content-start">
                                            <p>{{ (strlen($item['content']) > 13) ? substr($item['content'],0,300).'...' : $item['content'] }}</p>
                                        </div>
                                        <div class="my-2"
                                             style="width: 100%; height: 1px; background-color: #b9b9b9; display: block;"></div>
                                        <div class="d-flex w-100 align-items-center justify-content-between">
                                            <div class="text-black">

                                                <img src="storage/{{$item->author->photo}}"
                                                     style="height: 40px; width: 40px; object-fit: cover; border-radius: 50%"
                                                     alt="" class="mr-2">
                                                <b>{{ $item->author->name }}</b>
                                            </div>
                                            <div class="show_date"><a href="#">{{$item->created_at}}</a></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="row">
                    <div class="col text-center">
                        <div class="button_fill shows_2_button"><a href="blog">browse all blog posts</a></div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot:noContainer>
</x-main-layout>
