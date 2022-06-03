<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Reseller | Wame Store </title>

  <!-- Bootstrap -->
  <link href="../admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../admin/vendors/nprogress/nprogress.css" rel="stylesheet">

  <!-- iCheck -->
  <link href="../admin/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <!-- Datatables -->

  <!-- NProgress -->
  <link href="../admin/vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- Dropzone.js -->
  <link href="../admin/vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">
  <link href="../admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
  <link href="../admin/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
  <link href="../admin/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
  <link href="../admin/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
  <link href="../admin/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="../admin/build/css/custom.min.css" rel="stylesheet">

  <!-- jQuery -->
  <script src="../admin/vendors/jquery/dist/jquery.min.js"></script>

</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Reseller!</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="{{asset('images/img.jpg')}}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>{{ Auth::user()->name }}</h2>
            </div>
            <div class="clearfix"></div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu Admin -->
          @if(auth()->user()->role=='admin')
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a href="/home"><i class="fa fa-home"></i> Home</a>

                </li>
                <li><a><i class="fa fa-edit"></i>Produk<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="/create_produk">Tambah Produk</a></li>
                    <li><a href="/daftar_produk">Daftar Produk</a></li>
                    <li><a href="#"><font color="red">Tambah Stok</font></a></li>
                    <li><a href="/admin_diarsipkan">Arsip Produk</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-desktop"></i> Pesanan <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="/pesanan_proses">Pesanan Segera Diproses</a></li>
                    <li><a href="/admin_pesanansegeradikirim">Pesanan Segera Dikirim</a></li>
                    <li><a href="/admin_terkonfirmasi">Pesanan Terkonfimasi</a></li>
                    <li><a href="/admin_historipesanan">Histori Pesanan</a></li>
                    <li><a href="media_gallery.html">Pesanan dibatalkan</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-table"></i> Pelanggan<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="/tambahpelanggan">Tambah Pelanggan</a></li>
                    <li><a href="/admin_daftarpelanggan">Daftar Pelanggan</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-bar-chart-o"></i> Keuangan <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="/admin_historisaldo">Histori Saldo</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-gears"></i> Pengaturan <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="/admin_createKategori">Tambah Kategori</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          @endif
          <!-- /sidebar menu -->

          <!-- sidebar menu Pelanggan -->
          @if(auth()->user()->role=='pelanggan')
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a href="/home"><i class="fa fa-home"></i> Home</span></a>
                </li>
                <li>
                  <a href="/daftar_produk"><i class="fa fa-shopping-cart"></i>Produk </a>
                </li>
                <li><a><i class="fa fa-desktop"></i> Pesanan <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="/pelanggan_pesanandiproses/{id}">Pesanan Belum Diproses</a></li>
                    <li><a href="/pelanggan_pesanandikirim/{id}">Pesanan Belum Dikirim</a></li>
                    <li><a href="/pelanggan_pesanandikonfirmasi/{id}">Pesanan Belum Dikonfirmasi</a></li>
                    <li><a href="#">Pesanan Dibatalkan</a></li>
                    <li><a href="/pelanggan_pesananhistori/{id}">Histori</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-bar-chart-o"></i> Keuangan <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="/pelanggan_ceksaldo/{id}">Cek Saldo</a></li>
                    <li><a href="/pelanggan_riwayatpembayaran/{id}">Riwayat Pembayaran</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          @endif
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
          </div>
          <nav class="nav navbar-nav">
            <ul class=" navbar-right">
              <li class="nav-item dropdown open" style="padding-left: 15px;">
                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                  <img src="{{asset('images/img.jpg')}}" alt="">{{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="pelanggan_profile"><i class="fa fa-user pull-right"></i> Profil</a>

                  <a class="dropdown-item" href="/pelanggan_sandi"><i class="fa fa-key pull-right"></i>
                    <span> Ganti Kata Sandi</span>
                  </a>
                  <a class="dropdown-item" href="https://wa.me/6283824430157"><i class="fa fa-phone pull-right"></i> Pusat Bantuan</a>

                  <a class="dropdown-item" href="/logout"><i class="fa fa-sign-out pull-right"></i> Keluar</a>
                </div>
              </li>

              <li role="presentation" class="nav-item dropdown open">
                <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-envelope-o"></i>
                  <span class="badge bg-green">6</span>
                </a>
                <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"><img src="{{asset('images/img.jpg')}}" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"><img src="{{asset('images/img.jpg')}}" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"><img src="{{asset('images/img.jpg')}}" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"><img src="{{asset('images/img.jpg')}}" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <div class="text-center">
                      <a class="dropdown-item">
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12  ">
              <div class="x_content">
                @yield('content')
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /page content -->

    <!-- footer content -->
    <footer>
      <div class="pull-right">
        Website by <a href="https:wa.me/6283824430157">jabbarmuhammad</a>
      </div>
      <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
  </div>
  </div>


  <!-- Bootstrap -->
  <script src="../admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- FastClick -->
  <script src="../admin/vendors/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <script src="../admin/vendors/nprogress/nprogress.js"></script>
  <!-- Smart Wizard -->
  <script src="../admin/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
  <!-- Custom Theme Scripts -->
  <script src="../admin/build/js/custom.min.js"></script>
  <!-- Datatables -->
  <script src="../admin/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="../admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="../admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="../admin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
  <script src="../admin/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
  <script src="../admin/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="../admin/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="../admin/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
  <script src="../admin/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
  <script src="../admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
  <script src="../admin/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
  <script src="../admin/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
  <script src="../admin/vendors/jszip/dist/jszip.min.js"></script>
  <script src="../admin/vendors/pdfmake/build/pdfmake.min.js"></script>
  <script src="../admin/vendors/pdfmake/build/vfs_fonts.js"></script>
  <!-- CKEDITOR Online -->
  <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
  <!-- Sweet Alert Online -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- Dropzone -->
  <script src="../admin/vendors/dropzone/dist/min/dropzone.min.js"></script>
  <script src="../admin/vendors/nprogress/nprogress.js"></script>
  <script>
    var konten = document.getElementById("deskripsi");
    CKEDITOR.replace(deskripsi, {
      language: 'en-gb'
    });
    CKEDITOR.config.allowedContent = true;
  </script>

  <script>
    $(function() {
      $("#saldoMasuk").DataTable({
        "responsive": true,
        "autoWidth": true,
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "responsive": true,
        "language": {
          "url": '../admin/vendors/ID.json'
        }
      });

      $("#saldoKeluar").DataTable({
        "responsive": true,
        "autoWidth": true,
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "responsive": true,
        "language": {
          "url": '../admin/vendors/ID.json'
        }
      });

      $("#riwayatSaldo").DataTable({
        "responsive": true,
        "autoWidth": true,
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "responsive": true,
        "language": {
          "url": '../admin/vendors/ID.json'
        }
      });
    });

    $(function() {
      $("#daftarproduk").DataTable({
        "responsive": true,
        "autoWidth": true,
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "responsive": true,
      });
    });

    // url=pesanan.pelanggan_historipesanan
    $(function() {
      $("#historipelanggan").DataTable({
        "responsive": true,
        "autoWidth": true,
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "responsive": true,
      });
    });

    $(function() {
      $("#pesanan_terkonfirmasi1").DataTable({
        "responsive": true,
        "autoWidth": true,
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "responsive": true,
      });
    });
  </script>
</body>

</html>