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
                <h1 class="page-title text-white">Liên hệ</h1>
            </div><!-- End .page-header -->
        </div><!-- End .container -->

        <div class="page-content pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-3 mb-lg-0">
                        <h2 class="title">Our Vision</h2><!-- End .title -->
                        <p>Trong tầm nhìn của chúng tôi về tương lai, cửa hàng thời trang vượt qua vai trò truyền thống là cửa hàng bán lẻ đơn thuần.
                            không gian, biến thành một trung tâm trải nghiệm độc đáo và sáng tạo. Chúng tôi hình dung một không gian nơi
                            khách hàng không chỉ mua sắm mà còn bắt tay vào hành trình khám phá thông qua các sản phẩm đa dạng và chiết trung
                            thế giới thời trang.</p>

                        <p>Tầm nhìn của chúng tôi là tạo ra một môi trường thân thiện và tương tác, nơi có sự đổi mới và mới lạ.
                            được đánh giá cao. Cửa hàng không chỉ cung cấp các bộ sưu tập thời trang hàng đầu mà còn đóng vai trò là địa điểm
                            để gặp gỡ các nhà thiết kế xuất sắc và tổ chức các sự kiện thú vị như trình diễn thời trang,
                            triển lãm và hội thảo có sự góp mặt của các chuyên gia hàng đầu trong ngành.</p>

                        <p>Chúng tôi cam kết mang đến cho khách hàng nhiều điều hơn là chỉ trải nghiệm mua sắm; chúng tôi nhắm tới
                            mang đến một hành trình thú vị để khám phá phong cách và cách thể hiện cá nhân. Bằng cách kết hợp liền mạch
                            hiện đại với truyền thống, mục tiêu của chúng tôi là để mỗi khách hàng cảm nhận được sự độc đáo và chân thực
                            trong mọi sản phẩm, mọi không gian và mọi trải nghiệm trong cửa hàng thời trang của chúng tôi.</p>
                    </div><!-- End .col-lg-6 -->
                </div><!-- End .row -->

                <div class="mb-5"></div><!-- End .mb-4 -->
            </div><!-- End .container -->

            <div class="bg-light-2 pt-6 pb-5 mb-6 mb-lg-8">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 mb-3 mb-lg-0">
                            <h2 class="title">Chúng tôi là</h2><!-- End .title -->
                            <p class="lead text-primary mb-3">TD Fashion</p><!-- End .lead text-primary -->
                            <p class="mb-2">Chào mừng bạn đến với cửa hàng thời trang của chúng tôi, nơi bạn có thể khám phá các phong cách và thưởng thức
                                trải nghiệm mua sắm độc đáo. Chúng tôi tự hào giới thiệu một không gian thời trang hiện đại mang đến
                                không chỉ là những bộ quần áo đặc biệt mà còn là một cuộc phiêu lưu vào thế giới thời trang đa dạng.</p>
                            <p class="mb-2">Với sứ mệnh đổi mới và tạo nên sự khác biệt, cửa hàng chúng tôi luôn kiên định
                                cập nhật những xu hướng mới nhất và thiết kế độc đáo từ các thương hiệu hàng đầu trên thị trường. Chúng tôi là
                                cam kết mang đến cho khách hàng trải nghiệm mua sắm vượt xa việc lựa chọn
                                trang phục – đó là hành trình khám phá phong cách cá nhân và sự tự tin.</p>
                            <p class="mb-2">Không chỉ là một địa điểm mua sắm, cửa hàng của chúng tôi còn là trung tâm của sự sáng tạo,
                                tổ chức các sự kiện, triển lãm và hội thảo thời trang nơi bạn có thể chia sẻ niềm đam mê và
                                kiến thức với cộng đồng thời trang. Hãy đến và trải nghiệm không gian thời trang đặc sắc nơi
                                vẻ đẹp và phong cách hội tụ, tạo nên những phút giây thăng hoa cho mọi tín đồ thời trang.</p>
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
                            <h2 class="title">Địa chỉ cửa hàng.</h2><!-- End .title -->
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

                <h2 class="title text-center mb-4">Gặp mặt chúng tôi</h2><!-- End .title text-center mb-2 -->

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
                    <h2 class="title text-center mb-3">Khách hàng nói gì về chúng tôi</h2><!-- End .title text-center -->

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
