<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Petra Eats</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

  <!-- FA FA Icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="../../resource/css/mainStyle.css" />
  <link rel="stylesheet" href="../../resource/css/mahasiswa_navbar.css" />
  <link rel="stylesheet" href="../../resource/css/mahasiswa_riwayat.css" />
  <link rel="icon" type="image/x-icon" href="../../resource/assets/assets_lama/logoPetraEats/logoPetraEats.png" />
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg p-4 fixed-top" style="background-color: var(--title-color)">
    <div class="container-fluid align-items-center row">
      <!-- Brand -->
      <div class="col-lg-5 col-6 ms-lg-5 align-items-center d-flex justify-content-start">
        <a href="mahasiswa_landing_page.php" style="text-decoration: none">
          <img src="../../resource/assets/assets_lama/logoPetraEats/logoPetraEats.png" style="width: 4rem" />
          <span class="navbar-brand ms-3 mb-0 fs-4 text-white" style="font-family: var(--font-family-1)">Petra Eats</span>
        </a>
      </div>
      <!-- Navbar brand and toggle button -->
      <div class="col-lg-1 col-6">
        <div class="d-flex justify-content-lg-center justify-content-end">
          <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="text-white"><i class="fa fa-bars" aria-hidden="true"></i></span>
          </button>
        </div>
      </div>
      <!-- Navbar items -->
      <div class="col-lg-6 col-12">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav col-12 row d-flex align-items-center ms-sm-0 ms-2">
            <li class="nav-item col-lg-4 col-3 align-items-center d-flex justify-content-center mt-lg-0 mt-4">
              <a href="#" class="navbar-brand nav-link mb-0 fs-5 position-relative bg-light rounded" style="font-family: var(--font-family-1); color: #003662" id="navitem"><i class="fa fa-history"></i> Riwayat</a>
            </li>
            <li class="nav-item col-lg-4 col-3 align-items-center d-flex justify-content-center mt-lg-0 mt-4">
              <a href="#" class="navbar-brand nav-link mb-0 fs-5" style="font-family: var(--font-family-1)" id="navitem-keranjang">
                <i class="fa fa-shopping-basket"></i> Keranjang
                <span id="cart-alert" class="position-absolute start-1 translate-middle p-1 bg-danger border border-light rounded-circle" style="display: none; top: 6px">
                  <span class="visually-hidden">New alerts</span>
                </span>
              </a>
            </li>
            <li class="nav-item col-lg-4 col-3 align-items-center d-flex justify-content-center mt-lg-0 mt-4">
              <div class="dropdown">
                <div class="navbar-brand nav-link mb-0 fs-5 dropbtn d-flex justify-content-center" style="font-family: var(--font-family-1)" id="navitem" onclick="logoutDropdown()">
                  <img class="rounded-circle dropbtn" style="max-width: 55px" src="../../resource/assets/assets_lama/mahasiswa/profile/Default.jpg" style="z-index: 2" />
                </div>
                <div class="dropdown-content rounded-2" id="name-dropdown">
                  <a href="#" class="btn btn-danger btn-sm rounded-2 fw-bold" onclick="confirmLogout()">Logout</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Navbar -->

  <div class="container mb-5" style="margin-top: 10rem">
    <!-- Button and Title -->
    <div class="row d-flex justify-content-between">
      <a class="btn btn-danger back-button col-lg-2 col-12 fw-bold ms-3 mt-1 me-auto" href="mahasiswa_kantinQ.php">Back</a>
      <div class="nama-toko col-lg-10 col-12 fw-bold text-center">Riwayat Pesanan</div>
    </div>
    <!-- Button and Title -->

    <!-- Content -->
    <div class="container row d-flex justify-content-center rounded-4 shadow mt-4 pb-5 ms-1 gap-3" style="background-color: #f2f8f9">
      <!-- Pesanan Aktif -->
      <div class="col-12 fs-3 fw-bold justify-content-start pt-3">Pesanan di proses:</div>
      <div class="col-12 d-flex justify-content-center row border border-3 rounded">




        <div class="col-12 row mt-5 mb-4 d-flex justify-content-center align-items-center pt-3 pb-5 custom-card-pesanan rounded-3" id="">
          <div class="col-12 d-flex align-items-center justify-content-center text-center mb-3">
            <div class="bg-warning rounded-4 p-2 ps-4 pe-4 fw-bold" disabled data-bs-toggle="button">Permintaan</div>
          </div>
          <div class="col-sm-4 col-6 d-flex justify-content-center ">
            <img src="../..\resource\assets\assets_lama\kantin\toko\kantinQ5.jpg" class="float-start rounded-2 border border-black" style="max-width: 80%; max-height: 80%;" />
          </div>
          <div class="col-sm-8 col-6 d-flex align-items-center">
            <div class="d-flex align-items-center" style="max-height: 12rem">
              <div class="row align-items-center gap-2">
                <div class="col-12 fw-bold mb-md-2 custom-menu-title">Excelso</div>
                <div class="col-12 custom-menu-desc">Cookies and Cream x 1</div>
                <div class="col-12 custom-menu-desc">Lychee Tea x 2</div>
                <div class="col-12 fw-bold custom-menu-price">Total: Rp. 75.000</div>
              </div>
            </div>
          </div>
        </div>






      </div>
      <!-- Pesanan Aktif -->

      <!-- pesanan sudah selesai -->
      <div class="col-12 fs-3 fw-bold justify-content-start pt-3">Riwayat pesanan:
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
      <div class="col-2 d-flex justify-content-start pt-2">

      </div>
      <div class="col-12 row d-flex justify-content-center border border-3 rounded">

        <div class="col-12 row mt-3 mb-2 d-flex justify-content-center align-items-center pt-3 pb-5 custom-card-pesanan rounded-3" id="">
          <div class="col-12 d-flex align-items-center justify-content-center text-center mb-3">
            <div class="bg-success text-light rounded-4 p-2 ps-4 pe-4 fw-bold" disabled data-bs-toggle="button">Selesai</div>
          </div>
          <div class="col-sm-4 col-6 d-flex justify-content-center ">
            <img src="../../resource/assets/assets_lama/kantin/toko/kantinP3.png" class=" float-start rounded-2 border border-black" style="max-width: 80%; max-height: 80%;" />
          </div>
          <div class="col-sm-8 col-6 d-flex align-items-center">
            <div class="d-flex align-items-center" style="max-height: 12rem">
              <div class="row align-items-center gap-2">
                <div class="col-12 fw-bold mb-md-2 custom-menu-title">Depot Kita</div>
                <div class="col-12 fw-bold custom-menu-date">21-12-2024, 13:00</div>
                <div class="col-12 custom-menu-desc">Ayam geprek x 2</div>
                <div class="col-12 custom-menu-desc">Es teh x 2</div>
                <div class="col-12 fw-bold custom-menu-price">Total: Rp. 60.000</div>
              </div>
            </div>
          </div>
          <div class="col-12 d-flex align-items-center justify-content-center justify-content-sm-end text-center mt-4">
            <button class="btn btn-primary text-light rounded-4 p-2 ps-4 pe-4 fw-bold shadow">Pesan Lagi</button>
          </div>
        </div>

        <hr>

        <div class="col-12 row mb-2 d-flex justify-content-center align-items-center pt-3 pb-5 custom-card-pesanan rounded-3" id="">
          <div class="col-12 d-flex align-items-center justify-content-center text-center mb-3">
            <div class="bg-success text-light rounded-4 p-2 ps-4 pe-4 fw-bold">Selesai</div>
          </div>
          <div class="col-sm-4 col-6 d-flex justify-content-center ">
            <img src="../../resource/assets/assets_lama/kantin/toko/kantinP3.png" class=" float-start rounded-2 border border-black" style="max-width: 80%; max-height: 80%;" />
          </div>
          <div class="col-sm-8 col-6 d-flex align-items-center">
            <div class="d-flex align-items-center" style="max-height: 12rem">
              <div class="row align-items-center gap-2">

                <div class="col-12 fw-bold mb-md-2 custom-menu-title">Depot Kita</div>
                <div class="col-12 fw-bold custom-menu-date">21-12-2024, 13:00</div>
                <div class="col-12 custom-menu-desc">Ayam geprek x 2</div>
                <div class="col-12 custom-menu-desc">Es teh x 2</div>
                <div class="col-12 fw-bold custom-menu-price">Total: Rp. 60.000</div>
              </div>
            </div>
          </div>
          <div class="col-12 d-flex align-items-center  justify-content-center justify-content-sm-end text-center mt-4">
            <button class="btn btn-primary text-light rounded-4 p-2 ps-4 pe-4 fw-bold shadow">Pesan Lagi</button>
          </div>
        </div>



      </div>

      <!-- pesanan sudah selesai -->
    </div>
    <!-- End Content-->
  </div>

  <!-- Floating Button -->
  <div class="floating-button">
    <a id="cekKeranjang" class="btn btn-keranjang fw-bold" href="mahasiswa_keranjang.php">
      <i class="fa fa-shopping-basket" aria-hidden="true"></i>
      <span id="cart-alert-bottom-left" class="position-absolute start-1 translate-middle p-2 bg-danger border border-light rounded-circle" style="display: none; top: 13px">
        <span class="visually-hidden">New alerts</span>
      </span>
    </a>
  </div>
  <!-- Floating Button -->

  <!-- JavaScript -->
  <script type="text/javascript" src="../../resource/js/mahasiswa_toko.js"></script>
  <script type="text/javascript" src="../../resource/js/mahasiswa_login.js"></script>
  <script type="text/javascript" src="../../resource/js/navbar.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- SweetAlert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>