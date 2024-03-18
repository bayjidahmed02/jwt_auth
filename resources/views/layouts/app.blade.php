<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="Anil z" name="author">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Shopwise is Powerful features and You Can Use The Perfect Build this Template For Any eCommerce Website. The template is built for sell Fashion Products, Shoes, Bags, Cosmetics, Clothes, Sunglasses, Furniture, Kids Products, Electronics, Stationery Products and Sporting Goods.">
    <meta name="keywords"
        content="ecommerce, electronics store, Fashion store, furniture store,  bootstrap 4, clean, minimal, modern, online store, responsive, retail, shopping, ecommerce store">

    <!-- SITE TITLE -->
    <title>Shopwise - eCommerce Bootstrap 5 HTML Template</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/simple-line-icons.css') }}">
    <!--- owl carousel CSS-->
    <link rel="stylesheet" href="{{ asset('assets/owlcarousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/owlcarousel/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/owlcarousel/css/owl.theme.default.min.css') }}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

</head>

<body>

    <!-- LOADER -->
    <div class="preloader">
        <div class="lds-ellipsis">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- END LOADER -->

    <!-- Home Popup Section -->
    {{-- @include('components.popup') --}}
    <!-- End Screen Load Popup Section -->

    <!-- START HEADER -->
    @include('components.header')
    <!-- END HEADER -->

    <!-- START SECTION BANNER -->
    <div class="banner_section slide_medium shop_banner_slider staggered-animation-wrap">
        <div id="carouselExampleControls" class="carousel slide carousel-fade light_arrow" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active background_bg" data-img-src="assets/images/banner1.jpg">
                    <div class="banner_slide_content">
                        <div class="container"><!-- STRART CONTAINER -->
                            <div class="row">
                                <div class="col-lg-7 col-9">
                                    <div class="banner_content overflow-hidden">
                                        <h5 class="mb-3 staggered-animation font-weight-light"
                                            data-animation="slideInLeft" data-animation-delay="0.5s">Get up to 50% off
                                            Today Only!</h5>
                                        <h2 class="staggered-animation" data-animation="slideInLeft"
                                            data-animation-delay="1s">Woman Fashion</h2>
                                        <a class="btn btn-fill-out rounded-0 staggered-animation text-uppercase"
                                            href="shop-left-sidebar.html" data-animation="slideInLeft"
                                            data-animation-delay="1.5s">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- END CONTAINER-->
                    </div>
                </div>
                <div class="carousel-item background_bg" data-img-src="assets/images/banner2.jpg">
                    <div class="banner_slide_content">
                        <div class="container"><!-- STRART CONTAINER -->
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="banner_content overflow-hidden">
                                        <h5 class="mb-3 staggered-animation font-weight-light"
                                            data-animation="slideInLeft" data-animation-delay="0.5s">50% off in all
                                            products</h5>
                                        <h2 class="staggered-animation" data-animation="slideInLeft"
                                            data-animation-delay="1s">Man Fashion</h2>
                                        <a class="btn btn-fill-out rounded-0 staggered-animation text-uppercase"
                                            href="shop-left-sidebar.html" data-animation="slideInLeft"
                                            data-animation-delay="1.5s">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- END CONTAINER-->
                    </div>
                </div>
                <div class="carousel-item background_bg" data-img-src="assets/images/banner3.jpg">
                    <div class="banner_slide_content">
                        <div class="container"><!-- STRART CONTAINER -->
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="banner_content overflow-hidden">
                                        <h5 class="mb-3 staggered-animation font-weight-light"
                                            data-animation="slideInLeft" data-animation-delay="0.5s">Taking your
                                            Viewing Experience to Next Level</h5>
                                        <h2 class="staggered-animation" data-animation="slideInLeft"
                                            data-animation-delay="1s">Summer Sale</h2>
                                        <a class="btn btn-fill-out rounded-0 staggered-animation text-uppercase"
                                            href="shop-left-sidebar.html" data-animation="slideInLeft"
                                            data-animation-delay="1.5s">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- END CONTAINER-->
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev"><i
                    class="ion-chevron-left"></i></a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next"><i
                    class="ion-chevron-right"></i></a>
        </div>
    </div>
    <!-- END SECTION BANNER -->

    <!-- END MAIN CONTENT -->
    <div class="main_content">

        <!-- START SECTION BANNER -->
        @include('components.banner')
        <!-- END SECTION BANNER -->

        <!-- START SECTION SHOP -->
        @include('components.exclusive_products')
        <!-- END SECTION SHOP -->

        <!-- START SECTION SINGLE BANNER -->
        <div class="section bg_light_blue2 pb-0 pt-md-0">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-6 offset-md-1">
                        <div class="medium_divider d-none d-md-block clearfix"></div>
                        <div class="trand_banner_text text-center text-md-start">
                            <div class="heading_s1 mb-3">
                                <span class="sub_heading">New season trends!</span>
                                <h2>Best Summer Collection</h2>
                            </div>
                            <h5 class="mb-4">Sale Get up to 50% Off</h5>
                            <a href="shop-left-sidebar.html" class="btn btn-fill-out rounded-0">Shop Now</a>
                        </div>
                        <div class="medium_divider clearfix"></div>
                    </div>
                    <div class="col-md-5">
                        <div class="text-center trading_img">
                            <img src="assets//images/tranding_img.png" alt="tranding_img" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION SINGLE BANNER -->

        <!-- START SECTION SHOP -->
        @include('components.featured_products')
        <!-- END SECTION SHOP -->

        <!-- START SECTION TESTIMONIAL -->
        @include('components.testimonial')
        <!-- END SECTION TESTIMONIAL -->

        <!-- START SECTION SHOP INFO -->
        {{-- <div class="section pb_70">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-4">
                        <div class="icon_box icon_box_style1">
                            <div class="icon">
                                <i class="flaticon-shipped"></i>
                            </div>
                            <div class="icon_box_content">
                                <h5>Free Delivery</h5>
                                <p>If you are going to use of Lorem, you need to be sure there anything</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="icon_box icon_box_style1">
                            <div class="icon">
                                <i class="flaticon-money-back"></i>
                            </div>
                            <div class="icon_box_content">
                                <h5>30 Day Return</h5>
                                <p>If you are going to use of Lorem, you need to be sure there anything</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="icon_box icon_box_style1">
                            <div class="icon">
                                <i class="flaticon-support"></i>
                            </div>
                            <div class="icon_box_content">
                                <h5>27/4 Support</h5>
                                <p>If you are going to use of Lorem, you need to be sure there anything</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- END SECTION SHOP INFO -->

        <!-- START SECTION SUBSCRIBE NEWSLETTER -->
        {{-- <div class="section bg_default small_pt small_pb">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="heading_s1 mb-md-0 heading_light">
                            <h3>Subscribe Our Newsletter</h3>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="newsletter_form">
                            <form>
                                <input type="text" required="" class="form-control rounded-0"
                                    placeholder="Enter Email Address">
                                <button type="submit" class="btn btn-dark rounded-0" name="submit"
                                    value="Submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- START SECTION SUBSCRIBE NEWSLETTER -->

    </div>
    <!-- END MAIN CONTENT -->

    <!-- START FOOTER -->
    @include('components.footer')
    <!-- END FOOTER -->

    <a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>

    <!-- Latest jQuery -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <!-- popper min js -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <!-- Latest compiled and minified Bootstrap -->
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- owl-carousel min js  -->
    <script src="{{ asset('assets/owlcarousel/js/owl.carousel.min.js') }}"></script>
    <!-- magnific-popup min js  -->
    <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
    <!-- waypoints min js  -->
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <!-- parallax js  -->
    <script src="{{ asset('assets/js/parallax.js') }}"></script>
    <!-- countdown js  -->
    <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
    <!-- imagesloaded js -->
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- isotope min js -->
    <script src="{{ asset('assets/js/isotope.min.js') }}"></script>
    <!-- jquery.dd.min js -->
    <script src="{{ asset('assets/js/jquery.dd.min.js') }}"></script>
    <!-- slick js -->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <!-- elevatezoom js -->
    <script src="{{ asset('assets/js/jquery.elevatezoom.js') }}"></script>
    <!-- scripts js -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>

</body>

</html>
