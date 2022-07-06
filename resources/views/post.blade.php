<x-content-layout :title="$post->title">
    <x-slot:styles>
        <link rel="stylesheet" type="text/css" href="{{asset('styles/blog.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('styles/blog_responsive.css')}}">
        <style>
            .sidebar-box {
                margin-bottom: 4em;
                font-size: 15px;
                width: 100%;
                float: left;
                background: #fff;
            }
            .sidebar-box *:last-child {
                margin-bottom: 0;
            }
            .bio {
                padding: 15px;
                background: #fff;
                border: 1px solid #e6e6e6;
                font-weight: 400;
            }
            .bio img {
                border: 4px solid #fff;
                -webkit-box-shadow: 0 10px 30px -10px rgb(0 0 0 / 40%);
                box-shadow: 0 10px 30px -10px rgb(0 0 0 / 40%);
                max-width: 100px;
                margin-top: -4em;
                border-radius: 50%;
                position: relative;
                margin-bottom: 30px;
            }
            .bio h2 {
                font-size: 20px;
            }
            .category {
                display: inline-block;
                background: #6610f2;
                padding: 2px 8px;
                line-height: 1.5;
                font-size: 12px;
                border-radius: 4px;
                text-transform: uppercase;
                color: #fff!important;
                margin-right: 10px;
                letter-spacing: .2em;
            }
            .blog-entries .post-meta .author img {
                width: 30px;
                border-radius: 50%;
                display: inline-block;
            }
        </style>
    </x-slot:styles>


    <br>
    <br>

    <section class="site-section py-lg mt-5">
        <div class="container mt-5">
            <div class="row blog-entries element-animate">
                <div class="col-md-12 col-lg-8 main-content">
                    <img src="{{asset('storage/'.$post->image)}}" alt="Image" class="img-fluid mb-5"
                         data-pagespeed-url-hash="3455570913"
                         onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                    <div class="post-meta">
                        <span class="author mr-2"><img src="{{asset('storage/'.$post->author->photo)}}"
                                                       alt="Colorlib" class="mr-2" data-pagespeed-url-hash="728250849"> {{$post->author->name}}</span>&bullet;
                        <span class="mr-2">{{ $post->published_at }} </span> &bullet;
                        <span class="ml-2 category" style="background-color: red;"> {{$post->category->name}}</span>
                    </div>
                    <h1 class="mb-4">{{$post->title}}</h1>
                    @foreach($post->tags as $tag)
                        <a class="category mb-5" href="#">{{$tag->name}}</a>
                        @endforeach
{{--                    <a class="category mb-5" href="#">Food</a> --}}
                    <div class="post-content-body py-5">
                        {!! $post->content !!}
                    </div>
{{--                    <div class="py-5">--}}
{{--                        <p>Categories: <a href="#">Food</a>, <a href="#">Travel</a></p>--}}
{{--                    </div>--}}
                </div>

                <div class="col-md-12 col-lg-4 sidebar">


                    <div class="sidebar-box mt-5">
                        <div class="bio text-center">
                            <img src="{{asset('storage/'.$post->author->photo)}}" alt="Image Placeholder"
                                 class="img-fluid" data-pagespeed-url-hash="1022750770"
                                 onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                            <div class="bio-body">
                                <h2>{{$post->author->name}}</h2>
                                <p>{!! $post->author->bio !!}</p>
{{--                                <p><a href="#" class="btn btn-primary btn-sm rounded">Read my bio</a></p>--}}
{{--                                <p class="social">--}}
{{--                                    <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>--}}
{{--                                    <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>--}}
{{--                                    <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>--}}
{{--                                    <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>--}}
{{--                                </p>--}}
                            </div>
                        </div>
                    </div>

{{--                    <div class="sidebar-box">--}}
{{--                        <h3 class="heading">Popular Posts</h3>--}}
{{--                        <div class="post-entry-sidebar">--}}
{{--                            <ul>--}}
{{--                                <li>--}}
{{--                                    <a href="">--}}
{{--                                        <img src="images/ximg_1.jpg.pagespeed.ic.A97ox_2Q5a.webp"--}}
{{--                                             alt="Image placeholder" class="mr-4" data-pagespeed-url-hash="1596641133"--}}
{{--                                             onload="pagespeed.CriticalImages.checkImageForCriticality(this);">--}}
{{--                                        <div class="text">--}}
{{--                                            <h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>--}}
{{--                                            <div class="post-meta">--}}
{{--                                                <span class="mr-2">March 15, 2018 </span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="">--}}
{{--                                        <img src="images/ximg_1.jpg.pagespeed.ic.A97ox_2Q5a.webp"--}}
{{--                                             alt="Image placeholder" class="mr-4" data-pagespeed-url-hash="1596641133"--}}
{{--                                             onload="pagespeed.CriticalImages.checkImageForCriticality(this);">--}}
{{--                                        <div class="text">--}}
{{--                                            <h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>--}}
{{--                                            <div class="post-meta">--}}
{{--                                                <span class="mr-2">March 15, 2018 </span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="">--}}
{{--                                        <img src="images/ximg_1.jpg.pagespeed.ic.A97ox_2Q5a.webp"--}}
{{--                                             alt="Image placeholder" class="mr-4" data-pagespeed-url-hash="1596641133"--}}
{{--                                             onload="pagespeed.CriticalImages.checkImageForCriticality(this);">--}}
{{--                                        <div class="text">--}}
{{--                                            <h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>--}}
{{--                                            <div class="post-meta">--}}
{{--                                                <span class="mr-2">March 15, 2018 </span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="sidebar-box">--}}
{{--                        <h3 class="heading">Categories</h3>--}}
{{--                        <ul class="categories">--}}
{{--                            <li><a href="#">Food <span>(12)</span></a></li>--}}
{{--                            <li><a href="#">Travel <span>(22)</span></a></li>--}}
{{--                            <li><a href="#">Lifestyle <span>(37)</span></a></li>--}}
{{--                            <li><a href="#">Business <span>(42)</span></a></li>--}}
{{--                            <li><a href="#">Adventure <span>(14)</span></a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}

{{--                    <div class="sidebar-box">--}}
{{--                        <h3 class="heading">Tags</h3>--}}
{{--                        <ul class="tags">--}}
{{--                            <li><a href="#">Travel</a></li>--}}
{{--                            <li><a href="#">Adventure</a></li>--}}
{{--                            <li><a href="#">Food</a></li>--}}
{{--                            <li><a href="#">Lifestyle</a></li>--}}
{{--                            <li><a href="#">Business</a></li>--}}
{{--                            <li><a href="#">Freelancing</a></li>--}}
{{--                            <li><a href="#">Travel</a></li>--}}
{{--                            <li><a href="#">Adventure</a></li>--}}
{{--                            <li><a href="#">Food</a></li>--}}
{{--                            <li><a href="#">Lifestyle</a></li>--}}
{{--                            <li><a href="#">Business</a></li>--}}
{{--                            <li><a href="#">Freelancing</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                </div>

            </div>
        </div>
    </section>


</x-content-layout>
