@include('m/header')

<body>
    <!-- Preloader-->
    <div class="preloader" id="preloader">
        <div class="spinner-grow text-secondary" role="status">
            <div class="sr-only">Loading...</div>
        </div>
    </div>
    <!-- Header Area-->
    <div class="header-area" id="headerArea">
        <div class="container h-100 d-flex align-items-center justify-content-between">
            <!-- Logo Wrapper-->
            <div class="logo-wrapper"><a href="home.html"><img src="../mobile/img/core-img/logo-small.png" alt=""></a>
            </div>
            <!-- Search Form-->
            <div class="top-search-form">
                <form action="/produk_cari" method="GET">
                    <input class="form-control" type="search" name="cari" value="{{old('cari')}}"
                        placeholder="Enter your keyword">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <!-- Navbar Toggler-->
            <div class="suha-navbar-toggler" data-bs-toggle="offcanvas"  data-bs-target="#suhaOffcanvas"
                aria-controls="suhaOffcanvas"><span></span><span></span><span></span></div>
        </div>
    </div>
    
    {{-- Navbar bagi yang udah login --}}
    @auth
    @include('m/navbar')
    @endauth

    <!-- PWA Install Alert -->
    <div class="toast pwa-install-alert shadow bg-white" role="alert" aria-live="assertive" aria-atomic="true"
        data-bs-delay="5000" data-bs-autohide="true">
        <div class="toast-body">
            <div class="content d-flex align-items-center mb-2"><img src="../mobile/img/icons/icon-72x72.png" alt="">
                <h6 class="mb-0">Add to Home Screen</h6>
                <button class="btn-close ms-auto" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
            </div><span class="mb-0 d-block">Add Suha on your mobile home screen. Click the<strong class="mx-1">Add to
                    Home Screen</strong>button &amp; enjoy it like a regular app.</span>
        </div>
    </div>
    <div class="page-content-wrapper">
        <div class="container">
            <div class="pt-3">
                <!-- Hero Slides-->
                <div class="hero-slides owl-carousel">
                    <!-- Single Hero Slide-->
                    <div class="single-hero-slide" style="background-image: url('../mobile/img/bg-img/1.jpg')">
                        <div class="slide-content h-100 d-flex align-items-center">
                            <div class="slide-text">
                                <h4 class="text-white mb-0" data-animation="fadeInUp" data-delay="100ms"
                                    data-duration="1000ms">Amazon Echo</h4>
                                <p class="text-white" data-animation="fadeInUp" data-delay="400ms"
                                    data-duration="1000ms">3rd Generation, Charcoal</p><a class="btn btn-primary btn-sm"
                                    href="#" data-animation="fadeInUp" data-delay="800ms" data-duration="1000ms">Buy
                                    Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Hero Slide-->
                    <div class="single-hero-slide" style="background-image: url('../mobile/img/bg-img/2.jpg')">
                        <div class="slide-content h-100 d-flex align-items-center">
                            <div class="slide-text">
                                <h4 class="text-white mb-0" data-animation="fadeInUp" data-delay="100ms"
                                    data-duration="1000ms">Light Candle</h4>
                                <p class="text-white" data-animation="fadeInUp" data-delay="400ms"
                                    data-duration="1000ms">Now only $22</p><a class="btn btn-success btn-sm" href="#"
                                    data-animation="fadeInUp" data-delay="500ms" data-duration="1000ms">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Hero Slide-->
                    <div class="single-hero-slide" style="background-image: url('../mobile/img/bg-img/3.jpg')">
                        <div class="slide-content h-100 d-flex align-items-center">
                            <div class="slide-text">
                                <h4 class="text-white mb-0" data-animation="fadeInUp" data-delay="100ms"
                                    data-duration="1000ms">Best Furniture</h4>
                                <p class="text-white" data-animation="fadeInUp" data-delay="400ms"
                                    data-duration="1000ms">3 years warranty</p><a class="btn btn-danger btn-sm" href="#"
                                    data-animation="fadeInUp" data-delay="800ms" data-duration="1000ms">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Catagories -->
        @include('m/categori')

        <!-- Flash Sale -->
        {{-- @include('m/flashsale') --}}

        <!-- Top Products -->
        @include('m/produk')

        <!-- Cool Facts Area-->
        <div class="cta-area">
            <div class="container">
                <div class="cta-text p-4 p-lg-5" style="background-image: url(../mobile/img/bg-img/24.jpg)">
                    <h4 class="text-white">On Sale 50% Off!</h4>
                    <p class="text-white">Suha is a multipurpose, creative &amp; <br>modern mobile template.</p><a
                        class="btn btn-warning" href="#">Shop Today</a>
                </div>
            </div>
        </div>
        <!-- Weekly Best Sellers-->
        <div class="weekly-best-seller-area py-3">
            <div class="container">
                <div class="section-heading d-flex align-items-center justify-content-between">
                    <h6>Weekly Best Sellers</h6><a class="btn" href="shop-list.html">View All</a>
                </div>
                <div class="row g-3">
                    <!-- Single Weekly Product Card -->
                    <div class="col-12 col-md-6">
                        <div class="card horizontal-product-card">
                            <div class="card-body d-flex align-items-center">
                                <div class="product-thumbnail-side">
                                    <!-- Badge --><span class="badge badge-success">Sale</span>
                                    <!-- Wishlist Button --><a class="wishlist-btn" href="#"><i
                                            class="lni lni-heart"></i></a>
                                    <!-- Thumbnail --><a class="product-thumbnail d-block"
                                        href="single-product.html"><img src="../mobile/img/product/10.png" alt=""></a>
                                </div>
                                <div class="product-description">
                                    <!-- Product Title --><a class="product-title d-block"
                                        href="single-product.html">Modern Sofa</a>
                                    <!-- Price -->
                                    <p class="sale-price"><i class="lni lni-dollar"></i>$64<span>$89</span></p>
                                    <!-- Rating -->
                                    <div class="product-rating"><i class="lni lni-star-filled"></i>4.88 (39)</div>
                                    <!-- Buy Now Button --><a class="btn btn-danger btn-sm" href="#"><i
                                            class="me-1 lni lni-cart"></i>Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Weekly Product Card -->
                    <div class="col-12 col-md-6">
                        <div class="card horizontal-product-card">
                            <div class="card-body d-flex align-items-center">
                                <div class="product-thumbnail-side">
                                    <!-- Badge --><span class="badge badge-primary">Sale</span>
                                    <!-- Wishlist Button --><a class="wishlist-btn" href="#"><i
                                            class="lni lni-heart"></i></a>
                                    <!-- Thumbnail --><a class="product-thumbnail d-block"
                                        href="single-product.html"><img src="../mobile/img/product/7.png" alt=""></a>
                                </div>
                                <div class="product-description">
                                    <!-- Product Title --><a class="product-title d-block"
                                        href="single-product.html">Office Chair</a>
                                    <!-- Price -->
                                    <p class="sale-price"><i class="lni lni-dollar"></i>$100<span>$160</span></p>
                                    <!-- Rating -->
                                    <div class="product-rating"><i class="lni lni-star-filled"></i>4.82 (125)</div>
                                    <!-- Buy Now Button --><a class="btn btn-danger btn-sm" href="#"><i
                                            class="me-1 lni lni-cart"></i>Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Weekly Product Card -->
                    <div class="col-12 col-md-6">
                        <div class="card horizontal-product-card">
                            <div class="card-body d-flex align-items-center">
                                <div class="product-thumbnail-side">
                                    <!-- Badge --><span class="badge badge-danger">-10%</span>
                                    <!-- Wishlist Button --><a class="wishlist-btn" href="#"><i
                                            class="lni lni-heart"></i></a>
                                    <!-- Thumbnail --><a class="product-thumbnail d-block"
                                        href="single-product.html"><img src="../mobile/img/product/12.png" alt="">
                                        <!-- Offer Countdown Timer: Please use event time this format: YYYY/MM/DD hh:mm:ss -->
                                        <ul class="offer-countdown-timer d-flex align-items-center shadow-sm"
                                            data-countdown="2022/12/09 23:59:59">
                                            <li><span class="days">0</span>d</li>
                                            <li><span class="hours">0</span>h</li>
                                            <li><span class="minutes">0</span>m</li>
                                            <li><span class="seconds">0</span>s</li>
                                        </ul>
                                    </a>
                                </div>
                                <div class="product-description">
                                    <!-- Product Title --><a class="product-title d-block"
                                        href="single-product.html">Sun Glasses</a>
                                    <!-- Price -->
                                    <p class="sale-price"><i class="lni lni-dollar"></i>$24<span>$32</span></p>
                                    <!-- Rating -->
                                    <div class="product-rating"><i class="lni lni-star-filled"></i>4.79 (63)</div>
                                    <!-- Buy Now Button --><a class="btn btn-danger btn-sm" href="#"><i
                                            class="me-1 lni lni-cart"></i>Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Weekly Product Card -->
                    <div class="col-12 col-md-6">
                        <div class="card horizontal-product-card">
                            <div class="card-body d-flex align-items-center">
                                <div class="product-thumbnail-side">
                                    <!-- Badge --><span class="badge badge-warning">New</span>
                                    <!-- Wishlist Button --><a class="wishlist-btn" href="#"><i
                                            class="lni lni-heart"></i></a>
                                    <!-- Thumbnail --><a class="product-thumbnail d-block"
                                        href="single-product.html"><img src="../mobile/img/product/13.png" alt=""></a>
                                </div>
                                <div class="product-description">
                                    <!-- Product Title --><a class="product-title d-block"
                                        href="single-product.html">Wall Clock</a>
                                    <!-- Price -->
                                    <p class="sale-price"><i class="lni lni-dollar"></i>$31<span>$47</span></p>
                                    <!-- Rating -->
                                    <div class="product-rating"><i class="lni lni-star-filled"></i>4.99 (7)</div>
                                    <!-- Buy Now Button --><a class="btn btn-danger btn-sm" href="#"><i
                                            class="me-1 lni lni-cart"></i>Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Discount Coupon Card-->
        <div class="container">
            <div class="card discount-coupon-card">
                <div class="card-body">
                    <div class="coupon-text-wrap d-flex align-items-center p-3">
                        <h4 class="text-white pe-3 mb-0">Get 20% <br> discount</h4>
                        <p class="text-white ps-3 mb-0">To get discount, enter the<strong
                                class="px-1">GET20</strong>code on the checkout page.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('m/footer')