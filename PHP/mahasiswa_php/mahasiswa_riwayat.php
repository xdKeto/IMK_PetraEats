<?
require_once "../../connect.php";
session_start();

?>




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

  <link rel="stylesheet" href="../../resource/css/mahasiswa_toko.css" />
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
              <a href="mahasiswa_riwayat.php" class="navbar-brand nav-link mb-0 fs-5 position-relative bg-light rounded" style="font-family: var(--font-family-1); color: #003662" id="navitem"><i class="fa fa-history"></i> Riwayat</a>
            </li>
            <li class="nav-item col-lg-4 col-3 align-items-center d-flex justify-content-center mt-lg-0 mt-4">
              <a href="mahasiswa_keranjang.php" class="navbar-brand nav-link mb-0 fs-5" style="font-family: var(--font-family-1)" id="navitem-keranjang">
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
      <a class="btn btn-danger back-button col-lg-2 col-12 fw-bold ms-3 mt-1 me-auto" href="mahasiswa_kantinQ.html">Back</a>
      <div class="nama-toko col-lg-10 col-12 fw-bold">Riwayat Pesanan</div>
    </div>
    <!-- Button and Title -->

    <!-- Content -->
    <div class="container row d-flex justify-content-center rounded-4 shadow mt-4 pb-5 ms-1 gap-3" style="background-color: #f2f8f9">
      <!-- Pesanan Aktif -->
      <div class="col-12 fs-3 fw-bold justify-content-start pt-3">Pesanan di proses:</div>
      <div class="col-12 row border border-3 rounded ">
        <div class="col-3 mb-4 mt-5 justify-content-center">
          <img src="..\..\resource\assets\assets_lama\kantin\toko\kantinQ5.jpg" class="float-start rounded-2" style="max-width: 80%; max-height: 80%;" />
        </div>
        <div class="col-6 mb-4 mt-5">
          <div style="height: 12rem">
            <h4 class="">Excelso</h4>
            <p class="pt-2">Cookies and Cream x 1</p>
            <p class="">Lychee Tea x 2</p>
            <p class="">Total: Rp. 75.000</p>
          </div>
        </div>
        <div class="col-3 mb-4 mt-5">
          <button type="button" class="btn btn-warning rounded-4" disabled data-bs-toggle="button">Permintaan</button>
        </div>
      </div>
      <!-- Pesanan Aktif -->

      <!-- pesanan sudah selesai -->
      <div class="col-12 fs-3 fw-bold justify-content-start pt-3">Riwayat pesanan:</div>
      <div class="col-12 row border border-3 rounded ">
        <div class="row">
          <div class="col-3 mb-4 mt-5 justify-content-start ">
            <img src="../../resource/assets/assets_lama/kantin/toko/kantinP3.png" class="float-start rounded-2" style="max-width: 80%; max-height: 80%;" />
          </div>
          <div class="col-5 mb-4 mt-5">
            <div style="height: 12rem">
              <h4 class="">Depot Kita</h4>
              <p class="pt-2">Ayam geprek x 2</p>
              <p class="">Es teh x 2</p>
              <p class="">Total: Rp. 60.000</p>
            </div>
          </div>
          <div class="col-2 mb-4 mt-5">
            <button type="button" class="btn btn-success rounded-4" data-bs-toggle="button">Selesai</button>
          </div>
          <div class="col-2 mb-4 mt-5">
            <button type="button" class="btn rounded-4" data-bs-toggle="button" style="background-color: #003662; color: white;">Pesan lagi</button>
          </div>
        </div>

        <hr>

        <div class="row">
          <div class="col-3 mb-4 mt-5 justify-content-start ">
            <img src="../../resource/assets/assets_lama/kantin/toko/kantinP3.png" class="float-start rounded-2" style="max-width: 80%; max-height: 80%;" />
          </div>
          <div class="col-5 mb-4 mt-5">
            <div style="height: 12rem">
              <h4 class="">Depot Kita</h4>
              <p class="pt-2">Ayam geprek x 2</p>
              <p class="">Es teh x 2</p>
              <p class="">Total: Rp. 60.000</p>
            </div>
          </div>
          <div class="col-2 mb-4 mt-5">
            <button type="button" class="btn btn-success rounded-4" data-bs-toggle="button">Selesai</button>
          </div>
          <div class="col-2 mb-4 mt-5">
            <button type="button" class="btn rounded-4" data-bs-toggle="button" style="background-color: #003662; color: white;">Pesan lagi</button>
          </div>
        </div>

      </div>

      <!-- pesanan sudah selesai -->
    </div>
    <!-- End Content-->
  </div>

  <!-- Floating Button -->
  <div class="floating-button">
    <a id="cekKeranjang" class="btn btn-keranjang fw-bold" href="mahasiswa_keranjang.html">
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