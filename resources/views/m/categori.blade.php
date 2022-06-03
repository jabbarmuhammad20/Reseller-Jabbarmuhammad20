<div class="product-catagories-wrapper py-3">
    <div class="container">
        <div class="section-heading">
            <h6>Product Categories</h6>
        </div>
        <div class="product-catagory-wrap">
            <div class="row g-3">

                <!-- Single Catagory Card -->
                @foreach ($kategori as $categori)
                {{-- <a href="{{route ('dashboard.kategori',$kategori->slug)}}"> --}}

                <div class="col-4">
                    <div class="card catagory-card">
                        <div class="card-body"><a class="text-danger" href="catagory.html">
                                <svg class="bi bi-heart mb-2" xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                    fill="currentColor" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z">
                                    </path>
                                </svg><span><?php echo substr($categori->n_kategori, 0, 11)?></span></a></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>