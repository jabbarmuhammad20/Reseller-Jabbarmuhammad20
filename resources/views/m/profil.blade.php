<!DOCTYPE html>
<html lang="en">

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
            <div class="logo-wrapper"><a href="home.html"><img src="img/core-img/logo-small.png" alt=""></a></div>
            <!-- Search Form-->
            <div class="top-search-form">
                <form action="#" method="">
                    <input class="form-control" type="search" placeholder="Enter your keyword">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <!-- Navbar Toggler-->
            <div class="suha-navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#suhaOffcanvas"
                aria-controls="suhaOffcanvas"><span></span><span></span><span></span></div>
        </div>
    </div>
          @include('m/navbar')
    <div class="page-content-wrapper">
        <div class="container">
            <!-- Profile Wrapper-->
            <div class="profile-wrapper-area py-3">
                <!-- User Information-->
                <div class="card user-info-card">
                    <div class="card-body p-4 d-flex align-items-center">
                        <div class="user-profile me-3"><img src="img/bg-img/9.jpg" alt=""></div>
                        <div class="user-info">
                            <p class="mb-0 text-white">{{Auth::User()->name}}</p>
                            <h5 class="mb-0">{{Auth::User()->n_toko}}</h5>
                        </div>
                    </div>
                </div>
                <!-- User Meta Data-->
                <div class="card user-data-card">
                    <div class="card-body">
                        <div class="single-profile-data d-flex align-items-center justify-content-between">
                            <div class="title d-flex align-items-center"><i
                                    class="lni lni-user"></i><span>Username</span></div>
                            <div class="data-content">@designing-world</div>
                        </div>
                        <div class="single-profile-data d-flex align-items-center justify-content-between">
                            <div class="title d-flex align-items-center"><i class="lni lni-user"></i><span>Full
                                    Name</span></div>
                            <div class="data-content">{{Auth::User()->n_toko}}</div>
                        </div>
                        <div class="single-profile-data d-flex align-items-center justify-content-between">
                            <div class="title d-flex align-items-center"><i class="lni lni-phone"></i><span>Phone</span>
                            </div>
                            <div class="data-content">{{Auth::User()->no_hp}}</div>
                        </div>
                        <div class="single-profile-data d-flex align-items-center justify-content-between">
                            <div class="title d-flex align-items-center"><i class="lni lni-envelope"></i><span>Email
                                    Address</span></div>
                            <div class="data-content">{{Auth::User()->email}}</div>
                        </div>
                        <div class="single-profile-data d-flex align-items-center justify-content-between">
                            <div class="title d-flex align-items-center"><i
                                    class="lni lni-map-marker"></i><span>Shipping</span></div>
                            <div class="data-content">{{Auth::User()->alamat}}</div>
                        </div>
                        <div class="single-profile-data d-flex align-items-center justify-content-between">
                            <div class="title d-flex align-items-center"><i class="lni lni-star"></i><span>My
                                    Order</span></div>
                            <div class="data-content"><a class="btn btn-danger btn-sm" href="my-order.html">View</a>
                            </div>
                        </div>
                        <!-- Edit Profile-->
                        <div class="edit-profile-btn mt-3"><a class="btn btn-info w-100" href="edit-profile.html"><i
                                    class="lni lni-pencil me-2"></i>Edit Profile</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('m/footer')
</html>