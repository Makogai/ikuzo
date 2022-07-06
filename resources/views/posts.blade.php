<x-content-layout title="Blog">
    <x-slot:styles>
        <link rel="stylesheet" type="text/css" href="styles/blog.css">
        <link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">
        <style>

            /*********************************
            9. Newsletter
            *********************************/

            .newsletter
            {
                padding-top: 74px;
                padding-bottom: 166px;
            }
            .newsletter_text
            {
                max-width: 510px;
                margin-left: auto;
                margin-right: auto;
                margin-top: 18px;
            }
            .newsletter_text p
            {
                font-size: 16px;
                font-weight: 300;
                color: #FFFFFF;
                line-height: 1.5;
            }
            .newsletter_row
            {
                margin-top: 63px;
            }
            .newsletter_form_container
            {
                width: 100%;
            }
            .newsletter_form
            {
                display: block;
            }
            .newsletter_input
            {
                display: block;
                width: calc(100% - 260px);
                height: 54px;
                background: #FFFFFF;
                border: none;
                outline: none;
                border-radius: 27px;
                font-size: 18px;
                color: #1f2128;
                padding-left: 30px;
            }
            .newsletter_button
            {
                width: 230px;
                height: 54px;
                border: none;
                outline: none;
                border-radius: 27px;
                color: #FFFFFF;
                font-size: 18px;
                font-weight: 500;
                text-transform: uppercase;
                cursor: pointer;
            }
        </style>
    </x-slot:styles>

    <div class="blog">
        <div class="container">
            <div class="row">

                <!-- Sidebar -->
                <div class="col-lg-3 order-lg-1 order-2 sidebar_col">
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
                                @foreach($categories as $category)
                                    <li><a href="?category={{$category->id}}"
                                           style="text-transform: capitalize">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- Tags -->
                        <div class="sidebar_tags">
                            <div class="sidebar_title">Tags</div>
                            <div class="tags">
                                <ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
                                    @foreach($tags as $tag)
                                        <li><a href="?tag={{$tag->id}}"
                                               style="text-transform: capitalize">{{$tag->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <!-- Archive -->
{{--                        <div class="sidebar_archive">--}}
{{--                            <div class="sidebar_title">Archive</div>--}}
{{--                            <div class="dropdown">--}}
{{--                                <ul>--}}
{{--                                    <li class="dropdown_selected d-flex flex-row align-items-center justify-content-start"><span>September 2018</span><i class="fa fa-chevron-down ml-auto" aria-hidden="true"></i>--}}
{{--                                        <ul>--}}
{{--                                            <li><a href="#">August 2018</a></li>--}}
{{--                                            <li><a href="#">July 2018</a></li>--}}
{{--                                            <li><a href="#">June 2018</a></li>--}}
{{--                                            <li><a href="#">May 2018</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>

                <!-- Blog -->
                <div class="col-lg-9 blog_col order-lg-2 order-1">
                    <div class="blog_posts">

                        <!-- Blog Post -->


                        <!-- Blog Post -->
                       @foreach($posts as $post)
                            <div class="blog_post d-flex flex-md-row flex-column align-items-start justify-content-start">
                                <div class="blog_post_image">
                                    <img src="storage/{{$post->image}}" style="aspect-ratio: 1/1; width: 100%; object-fit: cover" alt="https://unsplash.com/@kellysikkema">
                                    <div class="blog_post_date"><a href="#">{{$post->published_at}}</a></div>
                                </div>
                                <div class="blog_post_content">
                                    <div class="blog_post_title"><a href="post/{{$post->slug}}">{{$post->title}}</a></div>
                                    <div class="blog_post_author">By <a href="#">Michael Smith</a></div>
                                    <div class="blog_post_text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec bibendum malesuada tellus a pretium. Proin quam nisi, maximus in pulvinar sed, viverra vitae est. Ut nibh nisl, malesuada nec massa nec, molestie varius lorem. Mauris aliquet eros eu luctus pulvinar. Suspendisse dapibus iaculis tellus, dignissim posuere felis elementum a.</p>
                                    </div>
                                    <div class="blog_post_link"><a href="#">Read More</a></div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>

            <!-- Page Nav -->
            <div class="row page_nav_row">
                <div class="col">
                    <div class="page_nav d-flex flex-row align-items-center justify-content-center">
                        <ul class="d-flex flex-row">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
