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
            <div class="back-button"><a href="/m">
                    <svg class="bi bi-arrow-left" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z">
                        </path>
                    </svg></a></div>
            <!-- Page Title-->
            <div class="page-heading">
                <h6 class="mb-0">My Cart</h6>
            </div>
            <!-- Navbar Toggler-->
            <div class="suha-navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#suhaOffcanvas"
                aria-controls="suhaOffcanvas"><span></span><span></span><span></span></div>
        </div>
    </div>
    @include('m/navbar')
    <div class="page-content-wrapper">
        <div class="container">
            <!-- Cart Wrapper-->
            <div class="cart-wrapper-area py-3">
                <div class="cart-table card mb-3">
                    <div class="table-responsive card-body">
                        <table class="table mb-0">

                            <tbody>
                                @foreach ($produk_cart as $cart)
                                <tr>
                                    <th scope="row"><a class="remove-product" href="#"><i class="lni lni-close"></i></a>
                                    </th>
                                    <td><img class="rounded"
                                            src="{{ asset ('storage/'. $cart->Produk->upload_produk ) }}" alt=""></td>
                                    <td><a href="single-product.html">{{$cart->Produk->n_produk}}<span>
                                                @currency($cart->harga)</span></a></td>
                                    <td>
                                        <div class="quantity">
                                            <input class="qty-text" type="text" value="{{$cart->jumlah}}">
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Coupon Area-->
                <div class="card coupon-card mb-3">
                    <div class="card-body">
                        <div class="apply-coupon">
                            <h6 class="mb-0">Masukan Resi</h6>
                            <p class="mb-2">Untuk mencetak resi di produk anda &amp; akan dikirim</p>
                            <div class="coupon-form">
                                <form action="#">
                                    <input class="form-control" type="file" placeholder="SUHA30">
                                    <button class="btn btn-primary" type="submit">Apply</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Cart Amount Area-->
                <div class="card cart-amount-area">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <h5 class="total-price mb-0">$<span class="counter">
                              

                            </span></h5><a class="btn btn-warning" href="checkout.html">Checkout
                            Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('m/footer')