<x-content-layout title="Contact">

    <x-slot:styles>
        <link rel="stylesheet" type="text/css" href="styles/contact.css">
        <link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">

    </x-slot:styles>

    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col">

                    <!-- Intro -->
                    <div class="intro">
                        <div class="section_title text-center"><h1>Get in touch</h1></div>
                        <div class="intro_text text-center">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a bibendum sem. Fusce dignissim et diam quis pretium.
                                Etiam efficitur semper accumsan. Sed et dui aliquet, ultrices tellus non, sagittis magna. Nullam justo quam, vestibulum non magna et, tempus tincidunt est. Ut laoreet magna ac luctus lacinia. Aliquam eget neque turpis. Phasellus nibh ex, tristique a magna ac, convallis tincidunt diam. Nulla facilisi. Phasellus porta sapien sit amet tortor rhoncus mattis.</p>
                        </div>
                        <div class="button_fill intro_button text-center ml-auto mr-auto"><a href="#">read more</a></div>
                    </div>

                    <!-- Contact Form -->
                    <div class="contact_form_container">
                        <div class="contact_form_title text-center">Send a message</div>
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <form action="#" id="contact_form" class="contact_form">
                                    <div class="row">
                                        <div class="col-md-6 contact_col">
                                            <input type="text" class="contact_input" placeholder="Name" required="required">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" class="contact_input" placeholder="E-mail" required="required">
                                        </div>
                                    </div>
                                    <div><input type="text" class="contact_input" placeholder="Subject"></div>
                                    <div><textarea class="contact_input contact_textarea" placeholder="Message" required="required"></textarea></div>
                                    <button class="contact_button button_fill ml-auto mr-auto">send</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Google Map -->
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
                @if($errors->any())
                    <h4>{{$errors->first()}}</h4>
                @endif
                <div class="col-lg-10 offset-lg-1">
                    <div class="newsletter_form_container">
                        <form action="/newsletter-subscribe" method="get"
                              class="newsletter_form d-flex flex-md-row flex-column align-items-md-start align-items-center justify-content-md-between justify-content-start"
                              id="newsletter_form">
                            <input type="email" class="newsletter_input" name="email" required="required">
                            <button class="newsletter_button button_fill">subscribe now!</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-content-layout>
