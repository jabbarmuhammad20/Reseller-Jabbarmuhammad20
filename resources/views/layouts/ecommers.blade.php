<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <title>Home page | Reseller</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fav icon -->
    <link rel="shortcut icon" href="../ecommers/img/favicon.ico">

    <!-- Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,900,700,700italic,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700%7CDancing+Script%7CMontserrat:400,700%7CMerriweather:400,300italic%7CLato:400,700,900' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Cantata+One' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300,500,700' rel='stylesheet' type='text/css'>
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="../ecommers/css/bootstrap.min.css">

    <!-- Magnific Popup -->
    <link href="css/magnific-popup.css" rel="stylesheet">

    <link rel="stylesheet" href="../ecommers/css/font-awesome.min.css">
    <link rel="stylesheet" href="../ecommers/css/normalize.css">
    <link rel="stylesheet" href="../ecommers/css/skin-lblue.css">

    <link rel="stylesheet" href="../ecommers/css/ecommerce.css">

    <!-- Owl carousel -->
    <link href="../ecommers/css/owl.carousel.css" rel="stylesheet">

    <link rel="stylesheet" href="../ecommers/css/main.css">
    <link rel="stylesheet" href="../ecommers/style.css">
    <link rel="stylesheet" href="../ecommers/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="../ecommers/css/revolutionslider_settings.css" media="screen" />

    <script src="../ecommers/js/vendor/modernizr-2.6.2.min.js"></script>
</head>

<body class="style-14">
    <!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->


    <!-- Start Loading -->
    <section class="loading-overlay">
        <div class="Loading-Page">
            <h1 class="loader">Loading...</h1>
        </div>
    </section>
    <!-- End Loading  -->

    <!-- start header -->
    <header>
        <!-- Header One Starts -->
        <div class="header-1">
            <div class="navi">
                <div class="container">
                    <div class="navy">
                        <ul>
                            <!-- Main menu -->
                            <li><a href="#">Home</a>
                            </li>

                            <li><a href="/info">About Us</a></li>
                            <li><a href="https:wa.me/6283824430157"> <i class="fas fa-call"></i>0838824430157</a></li>

                            <li class="tb-shopping-cart pull-right">
                                <!-- Link with badge -->
                                <a href="/login1" class=""><i class="fa fa-user"></i> Login </a>
                                <!-- Dropdown content with item details -->
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <br>
        <div class="col-md-6 col-md-offset-2 col-sm-5 col-sm-offset-3 hidden-xs">
            <!-- Search Form -->
            <div class="header-search">
                <form>
                    <!-- Input Group -->
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Type Something">
                        <span class="input-group-btn">
                            <button class="btn btn-color" type="button">Search</button>
                        </span>
                    </div>
                </form>
                <!-- Navigation ends -->
            </div>

            <!-- Header one ends -->

    </header>
    <!-- end header -->

    <!-- start main content -->
    <main class="main-container">

        <!-- new collection directory -->
        <section id="content-block" class="slider_area">
            <div class="container">
                <div class="content-push">
                    <div class="row">

                        <div class="col-md-3 col-md-push-9">
                            <div class="sidebar-navigation">
                                <div class="title">Product Categories<i class="fa fa-angle-down"></i></div>
                                <div class="list">
                                    <a class="entry" href="/"><span><i class="fa fa-angle-right"></i>Semua Produk</span></a>
                                    @foreach ($kategori as $kategori)
                                    <a class="entry" href="{{route ('dashboard.kategori',$kategori->slug)}}"><span><i class="fa fa-angle-right"></i>{{$kategori->n_kategori}}</span></a>
                                    @endforeach
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>

                        <div class="col-md-9 col-md-pull-3">

                            <div class="header_slider">
                                <article class="boss_slider">
                                    <div class="tp-banner-container">
                                        <div class="tp-banner tp-banner0">
                                            <ul>
                                                <!-- SLIDE  -->
                                                <li data-link="#" data-target="_self" data-transition="flyin" data-slotamount="7" data-masterspeed="500" data-saveperformance="on">
                                                    <!-- MAIN IMAGE --><img src="../ecommers/img/dummy.png" alt="slidebg1" data-lazyload="img/slide/slider1.png" data-bgposition="left center" data-kenburns="off" data-duration="14000" data-ease="Linear.easeNone" data-bgpositionend="right center" />
                                                    <!-- LAYER NR. 1 -->
                                                    <div class="tp-caption very_big_white randomrotate customout rs-parallaxlevel-0" data-x="270" data-y="140" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="300" data-start="500" data-end="4800" data-endspeed="300" data-easing="easeInOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2;"> Trendy </div>
                                                    <!-- LAYER NR. 2 -->
                                                    <div class="tp-caption very_large_white_text randomrotate customout rs-parallaxlevel-0" data-x="270" data-y="250" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="300" data-start="800" data-end="4800" data-endspeed="300" data-easing="easeInOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2;"> selection </div>
                                                    <!-- LAYER NR. 3 -->
                                                    <div class="tp-caption large_white_text randomrotate customout rs-parallaxlevel-0" data-x="355" data-y="363" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="300" data-start="1200" data-end="4800" data-endspeed="300" data-easing="easeInOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2;"> SHOP NOW </div>

                                                </li>
                                                <li data-link="#" data-target="_self" data-transition="3dcurtain-horizontal" data-slotamount="7" data-masterspeed="500" data-saveperformance="on">
                                                    <!-- MAIN IMAGE --><img src="../ecommers/img/dummy.png" alt="slidebg1" data-lazyload="img/slide/slider2.png" data-bgposition="left center" data-kenburns="off" data-duration="14000" data-ease="Linear.easeNone" data-bgpositionend="right center" />
                                                    <!-- LAYER NR. 1 -->
                                                    <div class="tp-caption very_big_white fade customout rs-parallaxlevel-0" data-x="270" data-y="140" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="300" data-start="500" data-end="4800" data-endspeed="300" data-easing="easeOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2;"> Trendy </div>
                                                    <!-- LAYER NR. 2 -->
                                                    <div class="tp-caption very_large_white_text fade customout rs-parallaxlevel-0" data-x="270" data-y="250" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="300" data-start="800" data-end="4800" data-endspeed="300" data-easing="easeOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2;"> selection </div>
                                                    <!-- LAYER NR. 3 -->
                                                    <div class="tp-caption large_white_text fade customout rs-parallaxlevel-0" data-x="355" data-y="363" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="300" data-start="1200" data-end="4800" data-endspeed="300" data-easing="easeOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2;"> SHOP NOW </div>
                                                </li>
                                                <li data-transition="boxslide" data-slotamount="7" data-masterspeed="500" data-saveperformance="on">
                                                    <!-- MAIN IMAGE --><img src="../ecommers/img/dummy.png" alt="slidebg1" data-lazyload="img/slide/slide_3.jpg" data-bgposition="left center" data-kenburns="off" data-duration="14000" data-ease="Linear.easeNone" data-bgpositionend="right center" />
                                                    <!-- LAYER NR. 1 -->
                                                    <div class="tp-caption large_white_text skewfromleftshort customout rs-parallaxlevel-0" data-x="355" data-y="363" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="300" data-start="1200" data-end="4800" data-endspeed="300" data-easing="easeOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2;"> SHOP NOW </div>
                                                    <!-- LAYER NR. 2 -->
                                                    <div class="tp-caption very_large_white_text skewfromleftshort customout rs-parallaxlevel-0" data-x="270" data-y="250" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="300" data-start="800" data-end="4800" data-endspeed="300" data-easing="easeOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2;"> selection </div>
                                                    <!-- LAYER NR. 3 -->
                                                    <div class="tp-caption very_big_white skewfromleftshort customout rs-parallaxlevel-0" data-x="270" data-y="140" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="300" data-start="500" data-end="4800" data-endspeed="300" data-easing="easeOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2;"> Trendy </div>
                                                </li>
                                            </ul>
                                            <div class="slideshow_control"></div>
                                        </div><!-- /.tp-banner -->
                                    </div>
                                </article>
                            </div><!-- /.header_slider -->

                            <div class="clear"></div>

                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- end new collection directory -->



        <section id="popular-product" class="ecommerce">
            <div class="container">
                <!-- Shopping items content -->
                <div class="shopping-content">

                    <!-- Block heading two -->
                    <div class="block-heading-two">
                        <h3><span>Popular Items</span></h3>
                    </div>

                    <div class="row">

                        @foreach ($produkall as $produk)
                        <div class="col-md-3 col-sm-6">
                            <!-- Shopping items -->
                            <div class="shopping-item">
                                <!-- Image -->
                                <a href="single-product.html"><img class="img-responsive" src="storage/{{$produk->upload_produk}}" alt="" style="width:200px; height:200px;/></a>
                                <!-- Shopping item name / Heading -->
                                <h4><a href=" single-product.html">{{$produk->n_produk}} <br></a>
                                <span class="color pull-right">
                                    <p>{{ "Rp. " . number_format($produk->hrg_m, 0, ",", ".")}}
                                        {{ "Rp. " . number_format($produk->hrg_l, 0, ",", ".")}}
                                        {{ "Rp. " . number_format($produk->hrg_xl, 0, ",", ".")}}
                                        {{ "Rp. " . number_format($produk->hrg_xxl, 0, ",", ".")}}
                                    </p>
                                </span></h4>
                                <div class="clearfix"></div>
                                <!-- Buy now button -->
                                <div class="visible-xs">
                                    <a class="btn btn-color btn-sm" href="#">{{$produk->warna}}</a>
                                </div>
                                <!-- Shopping item hover block & link -->
                                <div class="item-hover bg-color hidden-xs">
                                    <a href="#">{{$produk->warna}}</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
        </section>
        <center>
            {{$produkall->links()}}
        </center>
        <!-- start footer area -->
        <footer class="footer-area-content">

            <div class="container">
                <div class="footer-wrapper style-3">
                    <div class="type-1">
                        <div class="footer-columns-entry">
                            <div class="row">
                                <div class="col-md-3">
                                    <img alt="" src="img/footer-logo.png" class="footer-logo">
                                    <div class="footer-description">Pemancingan Kilo Angkat Pak Emuh</div>
                                    <div class="footer-address">Blok Dukuhbitung RT/RW 02/08 -Desa karangsambung Kec. Kadipaten - Majalengka - Jawa Barat<br> Phone: +78 123 456 123<br> Email: <a href="mailto:jabbarmuhammad20@gmail.com">abbarmuhammad20@gmail.co</a><br>
                                        <a target="_blank" href="https://www.jabbarmuhammad20.com"><b>www.jabbarmuhammad20.com</b></a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <h3 class="column-title">Customer Care</h3>
                                    <ul class="column">
                                        <li><a href="#">Terms & Condition</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">Shipping Charge</a></li>
                                        <li><a href="#">Shipping Track</a></li>
                                        <li><a href="#">Payment Method</a></li>
                                        <li><a href="#">Order History</a></li>
                                        <li><a href="#">Returns</a></li>
                                    </ul>
                                    <div class="clear"></div>
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <h3 class="column-title">Your Account</h3>
                                    <ul class="column">
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="#">Wishlist</a></li>
                                        <li><a href="#">Affiliate Dashboard</a></li>
                                        <li><a href="#">Billing Address</a></li>
                                        <li><a href="#">Cancel Order</a></li>
                                        <li><a href="#">Order History</a></li>
                                        <li><a href="#">Returns</a></li>
                                    </ul>
                                    <div class="clear"></div>
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <h3 class="column-title">Shop Information</h3>
                                    <ul class="column">
                                        <li><a href="#">About Company</a></li>
                                        <li><a href="#">Become Member</a></li>
                                        <li><a href="#">License Details</a></li>
                                        <li><a href="#">Custom Service</a></li>
                                        <li><a href="#">Tax Information</a></li>
                                        <li><a href="#">Order History</a></li>
                                        <li><a href="#">Job & Vacancies</a></li>
                                    </ul>
                                    <div class="clear"></div>
                                </div>
                                <div class="clearfix visible-sm-block"></div>
                                <div class="col-md-3">
                                    <h3 class="column-title">Company working hours</h3>
                                    <div class="footer-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</div>
                                    <div class="footer-description">
                                        <b>Monday-Friday:</b> 8.30 a.m. - 5.30 p.m.<br>
                                        <b>Saturday:</b> 9.00 a.m. - 2.00 p.m.<br>
                                        <b>Sunday:</b> Closed
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="footer-bottom footer-wrapper style-3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="footer-bottom-navigation">
                                <div class="cell-view">
                                    <div class="footer-links">
                                        <a href="#">Site Map</a>
                                        <a href="#">Search</a>
                                        <a href="#">Terms</a>
                                        <a href="#">Advanced Search</a>
                                        <a href="#">Orders and Returns</a>
                                        <a href="#">Contact Us</a>
                                    </div>
                                    <div class="copyright">Created with by <a target="_blank" href="http://iglyphic.com/">iGlyphic</a> . All right reserved</div>
                                </div>
                                <div class="cell-view">
                                    <div class="payment-methods">
                                        <a href="#"><img alt="" src="img/payment-method-1.png"></a>
                                        <a href="#"><img alt="" src="img/payment-method-2.png"></a>
                                        <a href="#"><img alt="" src="img/payment-method-3.png"></a>
                                        <a href="#"><img alt="" src="img/payment-method-4.png"></a>
                                        <a href="#"><img alt="" src="img/payment-method-5.png"></a>
                                        <a href="#"><img alt="" src="img/payment-method-6.png"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>



        </footer>
        <!-- footer area end -->


        <!-- All script -->
        <script src="../ecommers/js/vendor/jquery-1.10.2.min.js"></script>
        <script src="../ecommers/js/bootstrap.min.js"></script>
        <script src="../ecommers/js/smoothscroll.js"></script>
        <!-- Scroll up js
============================================ -->
        <script src="../ecommers/js/jquery.scrollUp.js"></script>
        <script src="../ecommers/js/menu.js"></script>
        <!-- new collection section script -->
        <script src="../ecommers/js/swiper/idangerous.swiper.min.js"></script>
        <script src="../ecommers/js/swiper/swiper.custom.js"></script>

        <!-- Magnific Popup -->
        <script src="../ecommers/js/jquery.magnific-popup.min.js"></script>

        <script src="../ecommers/js/jquery.countdown.min.js"></script>

        <!-- SLIDER REVOLUTION SCRIPTS  -->
        <script type="text/javascript" src="../ecommers/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
        <script type="text/javascript" src="../ecommers/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
        <!-- Owl carousel -->
        <script src="../ecommers/js/owl.carousel.min.js"></script>
        <script src="../ecommers/js/main.js"></script>



        <script type="text/javascript">
            /*-----------------------------------------------------------------------------------*/
            /* Product Carousel
             /*-----------------------------------------------------------------------------------*/
            if (jQuery().owlCarousel) {
                var productCarousel = $("#product-carousel");
                productCarousel.owlCarousel({
                    loop: true,
                    dots: false,
                    responsive: {
                        0: {
                            items: 1
                        },
                        480: {
                            items: 2
                        },
                        900: {
                            items: 3
                        },
                        1100: {
                            items: 4
                        }
                    }
                });

                // Custom Navigation Events
                $(".product-control-nav .next").on("click", function() {
                    productCarousel.trigger('next.owl.carousel');
                });

                $(".product-control-nav .prev").on("click", function() {
                    productCarousel.trigger('prev.owl.carousel');
                });
            }

            /* Main Slider */
            $('.tp-banner0').show().revolution({
                dottedOverlay: "none",
                delay: 5000,
                startWithSlide: 0,
                startwidth: 869,
                startheight: 520,
                hideThumbs: 10,
                hideTimerBar: "on",
                thumbWidth: 50,
                thumbHeight: 50,
                thumbAmount: 4,
                navigationType: "bullet",
                navigationArrows: "solo",
                navigationStyle: "round",
                touchenabled: "on",
                onHoverStop: "on",
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
                parallax: "mouse",
                parallaxBgFreeze: "on",
                parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],
                keyboardNavigation: "off",
                navigationHAlign: "right",
                navigationVAlign: "bottom",
                navigationHOffset: 30,
                navigationVOffset: 30,
                soloArrowLeftHalign: "left",
                soloArrowLeftValign: "center",
                soloArrowLeftHOffset: 50,
                soloArrowLeftVOffset: 8,
                soloArrowRightHalign: "right",
                soloArrowRightValign: "center",
                soloArrowRightHOffset: 50,
                soloArrowRightVOffset: 8,
                shadow: 0,
                fullWidth: "on",
                fullScreen: "off",
                spinner: "spinner4",
                stopLoop: "on",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                forceFullWidth: "off",
                hideThumbsOnMobile: "off",
                hideNavDelayOnMobile: 1500,
                hideBulletsOnMobile: "off",
                hideArrowsOnMobile: "off",
                hideThumbsUnderResolution: 0,
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 500,
                hideAllCaptionAtLilmit: 500,
                videoJsPath: "rs-plugin/videojs/",
                fullScreenOffsetContainer: ""
            });
        </script>


</body>


</html>