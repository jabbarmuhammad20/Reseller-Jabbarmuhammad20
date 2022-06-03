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
            <!-- Back Button-->
            <div class="back-button"><a href="{{route('m')}}">
                    <svg class="bi bi-arrow-left" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z">
                        </path>
                    </svg></a></div>
            <!-- Page Title-->
            <div class="page-heading">
                <h6 class="mb-0">Product Details</h6>
            </div>
            <!-- Navbar Toggler-->
            <div class="suha-navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#suhaOffcanvas"
                aria-controls="suhaOffcanvas"><span></span><span></span><span></span></div>
        </div>
    </div>
    <div class="offcanvas offcanvas-start suha-offcanvas-wrap" tabindex="-1" id="suhaOffcanvas"
        aria-labelledby="suhaOffcanvasLabel">
        <!-- Close button-->
        <button class="btn-close btn-close-white text-reset" type="button" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
        <!-- Offcanvas body-->
        <div class="offcanvas-body">
            <!-- Sidenav Profile-->
            <div class="sidenav-profile">
                <div class="user-profile"><img src="img/bg-img/9.jpg" alt=""></div>
                <div class="user-info">
                    <h6 class="user-name mb-1">Suha Sarah</h6>
                    <p class="available-balance">Total balance $<span class="counter">583.67</span></p>
                </div>
            </div>
            <!-- Sidenav Nav-->
            <ul class="sidenav-nav ps-0">
                <li><a href="profile.html"><i class="lni lni-user"></i>My Profile</a></li>
                <li><a href="notifications.html"><i class="lni lni-alarm lni-tada-effect"></i>Notifications<span
                            class="ms-3 badge badge-warning">3</span></a></li>
                <li class="suha-dropdown-menu"><a href="#"><i class="lni lni-cart"></i>Shop Pages</a>
                    <ul>
                        <li><a href="shop-grid.html">- Shop Grid</a></li>
                        <li><a href="shop-list.html">- Shop List</a></li>
                        <li><a href="single-product.html">- Product Details</a></li>
                        <li><a href="featured-products.html">- Featured Products</a></li>
                        <li><a href="flash-sale.html">- Flash Sale</a></li>
                    </ul>
                </li>
                <li><a href="pages.html"><i class="lni lni-empty-file"></i>All Pages</a></li>
                <li class="suha-dropdown-menu"><a href="wishlist-grid.html"><i class="lni lni-heart"></i>My Wishlist</a>
                    <ul>
                        <li><a href="wishlist-grid.html">- Wishlist Grid</a></li>
                        <li><a href="wishlist-list.html">- Wishlist List</a></li>
                    </ul>
                </li>
                <li><a href="settings.html"><i class="lni lni-cog"></i>Settings</a></li>
                <li><a href="intro.html"><i class="lni lni-power-switch"></i>Sign Out</a></li>
            </ul>
        </div>
    </div>
    <div class="page-content-wrapper">
        <div class="product-slide-wrapper">
            <!-- Product Slides-->
            <div class="product-slides owl-carousel">
                <!-- Single Hero Slide-->
                <div class="single-product-slide"
                    style="background-image: url('{{ asset ('storage/'. $produk_tabel->upload_produk ) }}')"></div>
            </div>
        </div>
        <div class="product-description pb-3">
            <!-- Product Title & Meta Data-->
            <div class="product-title-meta-data bg-white mb-3 py-3">
                <div class="container d-flex justify-content-between">
                    <div class="p-title-price">
                        <h6 class="mb-1">{{$produk_tabel->n_produk}}</h6>
                        <p class="sale-price mb-0">@currency($produk_tabel->hrg_l)<span>@currency($produk_tabel->hrg_l+10000)</span></p>
                    </div>
                    <div class="p-wishlist-share"><a href="wishlist-grid.html"><i class="lni lni-heart"></i></a></div>
                </div>
                <!-- Ratings-->
                <div class="product-ratings">
                    <div class="container d-flex align-items-center justify-content-between">
                        <div class="ratings"><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i
                                class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i
                                class="lni lni-star-filled"></i><span class="ps-1">3 ratings</span></div>
                        <div class="total-result-of-ratings"><span>5.0</span><span>Very Good </span></div>
                    </div>
                </div>
            </div>
            
            <form action="/mAddcart" method="post" enctype="multipart/form-data">
                @csrf
            <!-- Selection Panel-->
            <div class="selection-panel bg-white mb-3 py-3">
                <div class="container d-flex align-items-center justify-content-between">
                    <!-- Choose Color-->
                    <div class="choose-color-wrapper">
                        <p class="mb-1 font-weight-bold">Color</p>
                        <div class="choose-color-radio d-flex align-items-center">
                            {{$produk_tabel->warna}}
                        </div>
                    </div>
                    <!-- Choose Size-->
                    <div class="choose-size-wrapper text-end">
                        <p class="mb-1 font-weight-bold">Size</p>
                        <div class="choose-size-radio d-flex align-items-center">
                            <!-- Single Radio Input-->
                            <div class="form-check mb-0 me-2">
                                <input class="form-check-input" id="sizeRadio1" type="radio" name="harga" value="{{$produk_tabel->hrg_m}}" @if ($produk_tabel->stok_m=="0") disabled="disabled"
                                    
                                @endif/>
                                <label class="form-check-label" for="sizeRadio1">M</label>
                            </div>  
                            <!-- Single Radio Input-->
                            <div class="form-check mb-0 me-2">
                                <input class="form-check-input" id="sizeRadio1" type="radio" name="harga" value="{{$produk_tabel->hrg_l}}"@if ($produk_tabel->stok_l=="0") disabled="disabled"
                                    
                                @endif/>
                                <label class="form-check-label" for="sizeRadio1">L</label>
                            </div>
                            <!-- Single Radio Input-->
                            <div class="form-check mb-0 me-2">
                                <input class="form-check-input" id="sizeRadio2" type="radio" name="harga" value="{{$produk_tabel->hrg_xl}}" @if ($produk_tabel->stok_xl=="0") disabled="disabled"
                                    
                                @endif/>
                                <label class="form-check-label" for="sizeRadio2">XL</label>
                            </div>
                            <!-- Single Radio Input-->
                            <div class="form-check mb-0">
                                <input class="form-check-input" id="sizeRadio3" type="radio" name="harga" value="{{$produk_tabel->hrg_xxl}}" @if ($produk_tabel->stok_xxl=="0") disabled="disabled"
                                    
                                @endif/>
                                <label class="form-check-label" for="sizeRadio3">XXL</label>
                            </div>
                            <input type="hidden" name="produk_id" value="{{$produk_tabel->id}}"/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add To Cart-->
            <div class="cart-form-wrapper bg-white mb-3 py-3">
                <div class="container cart-form">
                        <div class="order-plus-minus d-flex align-items-center">
                            <div class="quantity-button-handler">-</div>
                            <input class="form-control cart-quantity-input" type="text" step="1" name="jumlah"
                                value="3">
                            <div class="quantity-button-handler">+</div>
                        </div>
                        <button class="btn btn-danger ms-3" type="submit">Add To Cart</button>
                    </div>
                </div>
            </form>
                <!-- Product Specification-->
            <div class="p-specification bg-white mb-3 py-3">
                <div class="container">
                    <h6>Specifications</h6>
                    <p>{!! $produk_tabel->deskripsi !!}</p>
                </div>
            </div>
            <!-- Product Video -->
            <div class="bg-img" style="background-image: url(img/product/18.jpg)">
                <div class="container">
                    <div class="video-cta-content d-flex align-items-center justify-content-center">
                        <div class="video-text text-center">
                            <h4 class="mb-4">Summer Clothing</h4><a class="btn btn-primary rounded-circle"
                                id="videoButton"
                                href="../../external.html?link=https://www.youtube.com/watch?v=lFGvqvPh5jI"><i
                                    class="lni lni-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pb-3"></div>
            <!-- Related Products Slides-->
            <div class="related-product-wrapper py-3 mb-3">
                <div class="container">
                    <div class="section-heading d-flex align-items-center justify-content-between">
                        <h6>Related Products</h6><a class="btn" href="{{route ('m')}}">View All</a>
                    </div>
                    <div class="related-product-slide owl-carousel">
                        @foreach ($produkall as $produk)
                        {{-- @if ($produk->kategori_id==($produk_tabel->kategori_id)) --}}
                            
                        
                        <!-- Single Product Slide -->
                        <div class="single-related-product-slide">
                            <div class="card product-card">
                                <div class="card-body">
                                    <!-- Badge--><span class="badge rounded-pill badge-warning">Sale</span>
                                    <!-- Wishlist Button--><a class="wishlist-btn" href="#"><i class="lni lni-heart">
                                    </i></a>
                                    <!-- Thumbnail --><a class="product-thumbnail d-block"
                                    href="single-product.html"><img class="mb-2"
                                    src="{{ asset ('storage/'. $produk->upload_produk ) }}" alt=""></a>
                                    <!-- Product Title --><a class="product-title d-block"
                                    href="single-product.html">{{$produk->n_produk}}</a>
                                    <!-- Product Price -->
                                    <p class="sale-price">$13<span>$42</span></p>
                                    <!-- Rating -->
                                    <div class="product-rating"><i class="lni lni-star-filled"></i><i
                                        class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i
                                        class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div>
                                        <!-- Add to Cart --><a class="btn btn-success btn-sm" href="#"><i
                                            class="lni lni-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                {{-- @endif --}}
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- Rating & Review Wrapper -->
                    <div class="rating-and-review-wrapper bg-white py-3 mb-3">
                <div class="container">
                    <h6>Ratings &amp; Reviews</h6>
                    <div class="rating-review-content">
                        <ul class="ps-0">
                            <!-- Single User Review -->
                            <li class="single-user-review d-flex">
                                <div class="user-thumbnail"><img src="../mobile/img/bg-img/7.jpg" alt=""></div>
                                <div class="rating-comment">
                                    <div class="rating"><i class="lni lni-star-filled"></i><i
                                            class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i
                                            class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div>
                                    <p class="comment mb-0">Very good product. It's just amazing!</p><span
                                        class="name-date">Designing World 12 Dec 2021</span><a
                                        class="review-image mt-2 border rounded" href="img/product/3.png"><img
                                            class="rounded-3" src="img/product/3.png" alt=""></a>
                                </div>
                            </li>
                            <!-- Single User Review -->
                            <li class="single-user-review d-flex">
                                <div class="user-thumbnail"><img src="../mobile/img/bg-img/8.jpg" alt=""></div>
                                <div class="rating-comment">
                                    <div class="rating"><i class="lni lni-star-filled"></i><i
                                            class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i
                                            class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div>
                                    <p class="comment mb-0">Very excellent product. Love it.</p><span
                                        class="name-date">Designing World 8 Dec 2021</span><a
                                        class="review-image mt-2 border rounded" href="img/product/4.png"><img
                                            class="rounded-3" src="img/product/4.png" alt=""></a><a
                                        class="review-image mt-2 border rounded" href="img/product/6.png"><img
                                            class="rounded-3" src="img/product/6.png" alt=""></a>
                                </div>
                            </li>
                            <!-- Single User Review -->
                            <li class="single-user-review d-flex">
                                <div class="user-thumbnail"><img src="../mobile/img/bg-img/9.jpg" alt=""></div>
                                <div class="rating-comment">
                                    <div class="rating"><i class="lni lni-star-filled"></i><i
                                            class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i
                                            class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div>
                                    <p class="comment mb-0">What a nice product it is. I am looking it's.</p><span
                                        class="name-date">Designing World 28 Nov 2021</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Ratings Submit Form-->
            <div class="ratings-submit-form bg-white py-3">
                <div class="container">
                    <h6>Submit A Review</h6>
                    <form action="#" method="">
                        <div class="stars mb-3">
                            <input class="star-1" type="radio" name="star" id="star1">
                            <label class="star-1" for="star1"></label>
                            <input class="star-2" type="radio" name="star" id="star2">
                            <label class="star-2" for="star2"></label>
                            <input class="star-3" type="radio" name="star" id="star3">
                            <label class="star-3" for="star3"></label>
                            <input class="star-4" type="radio" name="star" id="star4">
                            <label class="star-4" for="star4"></label>
                            <input class="star-5" type="radio" name="star" id="star5">
                            <label class="star-5" for="star5"></label><span></span>
                        </div>
                        <textarea class="form-control mb-3" id="comments" name="comment" cols="30" rows="10"
                            data-max-length="200" placeholder="Write your review..."></textarea>
                        <button class="btn btn-sm btn-primary" type="submit">Save Review</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Internet Connection Status-->
  <div class="internet-connection-status" id="internetStatus"></div>
  <div class="footer-nav-area" id="footerNav">
      <div class="container h-100 px-0">
          <div class="suha-footer-nav h-100">
              <ul class="h-100 d-flex align-items-center justify-content-between ps-0">
                  <li class="active"><a href="home.html"><i class="lni lni-home"></i>Home</a></li>
                  <li><a href="message.html"><i class="lni lni-life-ring"></i>Support</a></li>
                  <li><a href="/mcart"><i class="lni lni-shopping-basket"></i>Cart</a></li>
                  <li><a href="pages.html"><i class="lni lni-alarm"></i>Notification</a></li>
                  <li><a href="settings.html"><i class="lni lni-cog"></i>Settings</a></li>
              </ul>
          </div>
      </div>
  </div>

    @include('m/footer')