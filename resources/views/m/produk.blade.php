<div class="top-products-area py-3">
    <div class="container">
        <div class="section-heading d-flex align-items-center justify-content-between">
            <h6>Top Products</h6><a class="btn" href="shop-grid.html">View All</a>
        </div>
        <div class="row g-3">
            @foreach ($produkall as $produk)

            <!-- Single Top Product Card -->
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card product-card">
                    <div class="card-body">
                        <!-- Badge--><span class="badge rounded-pill badge-warning"><?php echo substr($produk->warna, 0, 15)?></span>
                        <!-- Wishlist Button--><a class="wishlist-btn" href="{{route ('mShow.Produk', $produk->id)}}"><i class="lni lni-heart">
                            </i></a>
                        <!-- Thumbnail --><a class="product-thumbnail d-block" href="{{route ('mShow.Produk', $produk->id)}}"><img
                                class="mb-2" src="storage/{{$produk->upload_produk}}" alt="">
                         
                        </a>
                        <!-- Product Title --><a class="product-title d-block" href="{{route ('mShow.Produk', $produk->id)}}"><?php echo substr($produk->n_produk, 0, 15)?></a>
                        <!-- Product Price -->
                        <p class="sale-price">@currency($produk->hrg_l)<span>@currency($produk->hrg_l+10000)</span></p>
                        <!-- Rating -->
                        <div class="product-rating"><i class="lni lni-star-filled"></i><i
                                class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i
                                class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div>
                        <!-- Add to Cart --><a class="btn btn-success btn-sm" href="#"><i class="lni lni-plus"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>