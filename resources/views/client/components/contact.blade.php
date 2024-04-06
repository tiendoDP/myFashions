@extends('client.layouts.app')

@section('styles')
@endsection

@section('content')
    <main class="main">
        <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
            <div class="container">

            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->
        <div class="container">
            <div class="page-header page-header-big text-center"
                style="background-image: url('assets/images/about-header-bg.jpg')">
                <h1 class="page-title text-white">About us<span class="text-white">Who we are</span></h1>
            </div><!-- End .page-header -->
        </div><!-- End .container -->

        <div class="page-content pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-3 mb-lg-0">
                        <h2 class="title">Our Vision</h2><!-- End .title -->
                        <p>In our vision of the future, the fashion store transcends its traditional role as a mere retail
                            space, transforming into a unique and creative experiential hub. We envision a space where
                            customers not only shop but embark on a journey of exploration through a diverse and eclectic
                            world of fashion.</p>

                        <p>Our vision is to create a friendly and interactive environment where innovation and novelty are
                            highly valued. The store not only offers top-tier fashion collections but also serves as a venue
                            for encountering outstanding designers and hosting exciting events such as fashion shows,
                            exhibitions, and workshops featuring leading experts in the industry.</p>

                        <p>We are committed to providing customers with more than just a shopping experience; we aim to
                            offer an exciting journey of discovering personal style and expression. By seamlessly blending
                            modernity with tradition, our goal is for each customer to feel the uniqueness and authenticity
                            in every product, every space, and every experience within our fashion store.</p>
                    </div><!-- End .col-lg-6 -->
                </div><!-- End .row -->

                <div class="mb-5"></div><!-- End .mb-4 -->
            </div><!-- End .container -->

            <div class="bg-light-2 pt-6 pb-5 mb-6 mb-lg-8">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 mb-3 mb-lg-0">
                            <h2 class="title">Who We Are</h2><!-- End .title -->
                            <p class="lead text-primary mb-3">TD Fashion</p><!-- End .lead text-primary -->
                            <p class="mb-2">Welcome to our fashion store, where you can explore styles and indulge in a
                                unique shopping experience. We take pride in introducing a modern fashion space that offers
                                not only exceptional clothing but also an adventure into the diverse world of fashion.</p>
                            <p class="mb-2">With a mission to innovate and make a difference, our store consistently
                                updates with the latest trends and unique designs from leading brands in the market. We are
                                committed to providing customers with a shopping experience that goes beyond selecting
                                outfits – it's a journey of discovering personal style and confidence.</p>
                            <p class="mb-2">More than just a shopping destination, our store is a hub of creativity,
                                hosting fashion events, exhibitions, and workshops where you can share your passion and
                                knowledge with the fashion community. Come and experience a distinctive fashion space where
                                beauty and style converge, creating exhilarating moments for all fashion enthusiasts.</p>
                            <a href="blog.html" class="btn btn-sm btn-minwidth btn-outline-primary-2">
                                <span>VIEW OUR NEWS</span>
                                <i class="icon-long-arrow-right"></i>
                            </a>
                        </div><!-- End .col-lg-5 -->

                        <div class="col-lg-6 offset-lg-1">
                            <div class="about-images">
                                <img src="assets/images/about/img-1.jpg" alt="" class="about-img-front">
                                <img src="assets/images/about/img-2.jpg" alt="" class="about-img-back">
                            </div><!-- End .about-images -->
                        </div><!-- End .col-lg-6 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .bg-light-2 pt-6 pb-6 -->

            {{-- <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="brands-text">
                        <h2 class="title">The world's premium design brands in one destination.</h2><!-- End .title -->
                        <p>Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nis</p>
                    </div><!-- End .brands-text -->
                </div><!-- End .col-lg-5 -->
                <div class="col-lg-7">
                    <div class="brands-display">
                        <div class="row justify-content-center">
                            <div class="col-6 col-sm-4">
                                <a href="#" class="brand">
                                    <img src="assets/images/brands/1.png" alt="Brand Name">
                                </a>
                            </div><!-- End .col-sm-4 -->

                            <div class="col-6 col-sm-4">
                                <a href="#" class="brand">
                                    <img src="assets/images/brands/2.png" alt="Brand Name">
                                </a>
                            </div><!-- End .col-sm-4 -->

                            <div class="col-6 col-sm-4">
                                <a href="#" class="brand">
                                    <img src="assets/images/brands/3.png" alt="Brand Name">
                                </a>
                            </div><!-- End .col-sm-4 -->

                            <div class="col-6 col-sm-4">
                                <a href="#" class="brand">
                                    <img src="assets/images/brands/4.png" alt="Brand Name">
                                </a>
                            </div><!-- End .col-sm-4 -->

                            <div class="col-6 col-sm-4">
                                <a href="#" class="brand">
                                    <img src="assets/images/brands/5.png" alt="Brand Name">
                                </a>
                            </div><!-- End .col-sm-4 -->

                            <div class="col-6 col-sm-4">
                                <a href="#" class="brand">
                                    <img src="assets/images/brands/6.png" alt="Brand Name">
                                </a>
                            </div><!-- End .col-sm-4 -->

                            <div class="col-6 col-sm-4">
                                <a href="#" class="brand">
                                    <img src="assets/images/brands/7.png" alt="Brand Name">
                                </a>
                            </div><!-- End .col-sm-4 -->

                            <div class="col-6 col-sm-4">
                                <a href="#" class="brand">
                                    <img src="assets/images/brands/8.png" alt="Brand Name">
                                </a>
                            </div><!-- End .col-sm-4 -->

                            <div class="col-6 col-sm-4">
                                <a href="#" class="brand">
                                    <img src="assets/images/brands/9.png" alt="Brand Name">
                                </a>
                            </div><!-- End .col-sm-4 -->
                        </div><!-- End .row -->
                    </div><!-- End .brands-display -->
                </div><!-- End .col-lg-7 -->
            </div><!-- End .row -->

            <hr class="mt-4 mb-6">

            <h2 class="title text-center mb-4">Meet Our Team</h2><!-- End .title text-center mb-2 -->

            <div class="row d-flex justify-content-center">
                <div class="col-md-4">
                    <div class="member member-anim text-center">
                        <figure class="member-media">
                            <img src="{{asset('assets/images/avt.jpg')}}" alt="member photo">

                            <figcaption class="member-overlay">
                                <div class="member-overlay-content">
                                    <h3 class="member-title">Nguyễn Vũ Tiến Độ<span>Founder & CEO</span></h3><!-- End .member-title -->
                                    <p>Xin chào !.</p> 
                                    <div class="social-icons social-icons-simple">
                                        <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                        <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                        <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                    </div><!-- End .soial-icons -->
                                </div><!-- End .member-overlay-content -->
                            </figcaption><!-- End .member-overlay -->
                        </figure><!-- End .member-media -->
                        <div class="member-content">
                            <h3 class="member-title">Nguyễn Vũ Tiến Độ<span>Founder & CEO</span></h3><!-- End .member-title -->
                        </div><!-- End .member-content -->
                    </div><!-- End .member -->
                </div><!-- End .col-md-4 -->
            </div><!-- End .row -->
        </div><!-- End .container --> --}}

            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="brands-text">
                            <h2 class="title">Our store address.</h2><!-- End .title -->
                            <p>Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus
                                id, mattis vel, nis</p>
                        </div><!-- End .brands-text -->
                    </div><!-- End .col-lg-5 -->
                    <div class="col-lg-7">
                        <div class="brands-display">
                            <div class="row justify-content-center">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4427.95491251227!2d105.7371932852819!3d21.054625411972076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31345457e292d5bf%3A0x20ac91c94d74439a!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2hp4buHcCBIw6AgTuG7mWk!5e0!3m2!1svi!2s!4v1710837133467!5m2!1svi!2s"
                                    width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div><!-- End .row -->
                        </div><!-- End .brands-display -->
                    </div><!-- End .col-lg-7 -->
                </div><!-- End .row -->

                <hr class="mt-4 mb-6">

                <h2 class="title text-center mb-4">Meet Our Team</h2><!-- End .title text-center mb-2 -->

                <div class="row d-flex justify-content-center">
                    <div class="col-md-4">
                        <div class="member member-anim text-center">
                            <figure class="member-media">
                                <img src="{{ asset('assets/images/avt.jpg') }}" style="border-radius: 12px"
                                    alt="member photo">

                                <figcaption class="member-overlay" style="border-radius: 12px">
                                    <div class="member-overlay-content">
                                        <h3 class="member-title">Nguyễn Vũ Tiến Độ<span>Founder & CEO</span></h3>
                                        <!-- End .member-title -->
                                        <p>Xin chào !.</p>
                                        <div class="social-icons social-icons-simple">
                                            <a href="https://www.facebook.com/tiend0" class="social-icon" title="Facebook"
                                                target="_blank"><i class="icon-facebook-f"></i></a>
                                            <a href="#" class="social-icon" title="Twitter" target="_blank"><i
                                                    class="icon-twitter"></i></a>
                                            <a href="#" class="social-icon" title="Instagram" target="_blank"><i
                                                    class="icon-instagram"></i></a>
                                        </div><!-- End .soial-icons -->
                                    </div><!-- End .member-overlay-content -->
                                </figcaption><!-- End .member-overlay -->
                            </figure><!-- End .member-media -->
                            <div class="member-content">
                                <h3 class="member-title">Nguyễn Vũ Tiến Độ<span>Founder & CEO</span></h3>
                                <!-- End .member-title -->
                            </div><!-- End .member-content -->
                        </div><!-- End .member -->
                    </div><!-- End .col-md-4 -->
                </div><!-- End .row -->
            </div>

            <div class="mb-2"></div><!-- End .mb-2 -->

            <div class="about-testimonials bg-light-2 pt-6 pb-6">
                <div class="container">
                    <h2 class="title text-center mb-3">What Customer Say About Us</h2><!-- End .title text-center -->

                    <div class="owl-carousel owl-simple owl-testimonials-photo" data-toggle="owl"
                        data-owl-options='{
                        "nav": false, 
                        "dots": true,
                        "margin": 20,
                        "loop": true,
                        "autoplay": true,
                        "autoplayTimeout": 3000,
                        "responsive": {
                            "1200": {
                                "nav": true
                            }
                        }
                    }'>
                        <blockquote class="testimonial text-center">
                            <img src="{{ asset('assets/images/avt.jpg') }}" alt="user">
                            <p>“ Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque aliquet nibh nec
                                urna. <br>In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula
                                sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh.
                                Nullam mollis. Ut justo. Suspendisse potenti. ”</p>
                            <cite>
                                Jenson Gregory
                                <span>Customer</span>
                            </cite>
                        </blockquote>
                        <blockquote class="testimonial text-center">
                            <img src="{{ asset('assets/images/avt.jpg') }}" alt="user">
                            <p>“ Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque aliquet nibh nec
                                urna. <br>In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula
                                sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh.
                                Nullam mollis. Ut justo. Suspendisse potenti. ”</p>
                            <cite>
                                Jenson Gregory
                                <span>Customer</span>
                            </cite>
                        </blockquote><!-- End .testimonial -->
                        <blockquote class="testimonial text-center">
                            <img src="{{ asset('assets/images/avt.jpg') }}" alt="user">
                            <p>“ Impedit, ratione sequi, sunt incidunt magnam et. Delectus obcaecati optio eius error libero
                                perferendis nesciunt atque dolores magni recusandae! Doloremque quidem error eum quis
                                similique doloribus natus qui ut ipsum.Velit quos ipsa exercitationem, vel unde obcaecati
                                impedit eveniet non. ”</p>

                            <cite>
                                Victoria Ventura
                                <span>Customer</span>
                            </cite>
                        </blockquote><!-- End .testimonial -->
                    </div><!-- End .testimonials-slider owl-carousel -->
                </div><!-- End .container -->
            </div><!-- End .bg-light-2 pt-5 pb-6 -->
        </div><!-- End .page-content -->
    </main>
@endsection

@section('scripts')
@endsection
