<x-content-layout title="Episodes">
    <x-slot:styles>
        <link rel="stylesheet" type="text/css" href="{{asset('styles/episodes.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('styles/episodes_responsive.css')}}">
    </x-slot:styles>

    <div class="episodes">
        <div class="container">
{{--            <div class="row">--}}
{{--                <div class="col">--}}
{{--                    <div class="season_links">--}}
{{--                        <ul class="d-flex flex-row align-items-start justify-content-center flex-wrap">--}}
{{--                            <li class="item_filter_btn" data-filter="*">All Seasons</li>--}}
{{--                            <li class="item_filter_btn" data-filter=".s1">Season 1</li>--}}
{{--                            <li class="item_filter_btn" data-filter=".s2">Season 2</li>--}}
{{--                            <li class="item_filter_btn" data-filter=".s3">Season 3</li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="row episodes_row">

                <!-- Sidebar -->
                <div class="col-lg-3">
                    <div class="sidebar">

                        <!-- Search -->
                        <div class="sidebar_search">
                            <div class="sidebar_title">Search</div>
                            <form action="#" class="search_form" id="search_form">
                                <input type="text" class="search_input" placeholder="Search here" required="required">
                                <button class="search_button"><img src="images/search.png" alt=""></button>
                            </form>
                        </div>

                        <!-- Categories -->
                        <div class="sidebar_list">
                            <div class="sidebar_title">Categories</div>
                            <ul>
                                <li><a href="#">Full</a></li>
                                <li><a href="#">Bonus</a></li>
                            </ul>
                        </div>

                        <!-- Tags -->


                        <!-- Archive -->

                    </div>
                </div>

                <!-- Episodes -->
                <div class="col-lg-9 episodes_col">
                    <div class="episodes_container">

                        <!-- Episode -->
                        @foreach($items as $item)
                        <div class="episode d-flex flex-row align-items-start justify-content-start s1">

                            <iframe src="{{$item['embedLink']}}" height="152" width="100%" frameborder="0" scrolling="no"></iframe>

                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="row page_nav_row">
                <div class="col">
                    <div class="page_nav d-flex flex-row align-items-center justify-content-center">
                        <ul class="d-flex flex-row">
{{--                            {{var_dump($pagination)}}--}}
                            @for($i = 1; $i<=$pagination['pages']; $i++)
                            <li class="{{$pagination['active'] == $i ? 'active' : ''}}"><a href="?page={{$i}}">{{$i}}</a></li>
                                @endfor
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-content-layout>
