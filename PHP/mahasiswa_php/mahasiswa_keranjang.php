<?php

// if (!isset($_POST['counter1'])) {
//   header("Location: mahasiswa_landing_page.php");
// }
$listPesanan = [];

if (isset($_POST['counter1'])) {
  $listPesanan[] = $_POST['counter1'];
}

if (isset($_POST['counter2'])) {
  $listPesanan[] = $_POST['counter2'];
}

if (isset($_POST['counter3'])) {
  $listPesanan[] = $_POST['counter3'];
}

if (isset($_POST['counter4'])) {
  $listPesanan[] = $_POST['counter4'];
}

if (isset($_POST['counter5'])) {
  $listPesanan[] = $_POST['counter5'];
}

if (isset($_POST['counter6'])) {
  $listPesanan[] = $_POST['counter6'];
}


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
  <!-- <link rel="stylesheet" href="../../resource/css/mahasiswa_kantin.css" /> -->
  <link rel="stylesheet" href="../../resource/css/mahasiswa_navbar.css" />
  <link rel="stylesheet" href="../../resource/css/mahasiswa_keranjang.css" />
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
            <li class="nav-item col-lg-4 col-3 align-items-center d-flex justify-content-center mt-lg-0 mt-4 shake">
              <a href="mahasiswa_riwayat.php" class="navbar-brand nav-link mb-0 fs-5" style="font-family: var(--font-family-1) " id="navitem"><i class="fa fa-history"></i> Riwayat</a>
            </li>
            <li class="nav-item col-lg-4 col-3 align-items-center d-flex justify-content-center mt-lg-0 mt-4 shake">
            <a href="mahasiswa_keranjang.php" class="navbar-brand nav-link mb-0 fs-5 position-relative bg-light rounded" style="font-family: var(--font-family-1) ;color: #003662" id="navitem-keranjang">
                <i class="fa fa-shopping-basket"></i> Keranjang
              </a>
            </li>
            <li class="nav-item col-lg-4 col-3 align-items-center d-flex justify-content-center mt-lg-0 mt-4">
              <div class="dropdown">
                <div class="navbar-brand nav-link mb-0 fs-5 dropbtn d-flex justify-content-center shake" style="font-family: var(--font-family-1)" id="navitem" onclick="logoutDropdown()">
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

  <div class="container justify-content-center mb-5" style="margin-top: 10rem">
    <!-- Button and Title -->
    <div class="row col-12 d-flex justify-content-between">
      <a class="btn btn-danger back-button col-12 fw-bold ms-3 mt-1 me-auto" href="mahasiswa_Excelso.php">Back</a>
      <div class="nama-section col-12 fw-bold align-items-center custom-title">Keranjang</div>
    </div>
    <!-- Button and Title -->

    <div class="container shadow row d-flex align-items-center justify-content-center rounded-4 shadow mt-4 pb-5 ms-1 gap-3" style="background-color: #f2f8f9">
      <div class="col-12 fs-3 fw-bold d-flex align-items-center justify-content-center pt-4 pb-4">Nota</div>
      <div class="col-12 row border border-3 rounded d-flex justify-content-center bg-light">
        <div class="col-4 d-flex align-items-center mb-4 justify-content-center">
          <img src="..\..\resource\assets\assets_lama\foods\excelso1.jpg" style="max-width: 12rem" class="card-img-top rounded-2 mt-4 border border-black" />
        </div>
        <div class="col-4 d-flex align-items-center justify-content-start custom-title-card">Cookies and Cream</div>
        <div class="col-md-4 col-12 row d-flex align-items-center justify-content-center">
          <div class="col-12 row d-flex align-items-end justify-content-center">
            <div class="col-12 d-flex align-items-end justify-content-center custom-price-card">Rp. 25.000</div>
            <div class="col-12 row d-flex align-items-center justify-content-center mt-2 ms-sm-0 mb-2">
              <button class="btn btn-sm btn-custom col-3 fw-bold btn-minus" data-id="1" style="width: 2rem">-</button>
              <div id="counter-1" class="fw-bold col-3 food-counter align-items-center" style="text-align: center">1</div>
              <button class="btn btn-sm btn-custom col-3 fw-bold btn-plus" data-id="1" style="width: 2rem">+</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 row border border-3 rounded d-flex justify-content-center bg-light">
        <div class="col-4 d-flex align-items-center mb-4 justify-content-center">
          <img src="..\..\resource\assets\assets_lama\foods\excelso5.png" style="max-width: 12rem" class="card-img-top rounded-2 mt-4 border border-black" />
        </div>
        <div class="col-4 d-flex align-items-center justify-content-start custom-title-card">Lychee Tea</div>
        <div class="col-md-4 col-12 row d-flex align-items-center justify-content-center">
          <div class="col-12 row d-flex align-items-end justify-content-center">
            <div class="col-12 d-flex align-items-end justify-content-center custom-price-card">Rp. 50.000</div>
            <div class="col-12 row d-flex align-items-center justify-content-center mt-2 ms-sm-0 mb-2">
              <button class="btn btn-sm btn-custom col-3 fw-bold btn-minus" data-id="1" style="width: 2rem">-</button>
              <div id="counter-2" class="fw-bold col-3 food-counter align-items-center" style="text-align: center">2</div>
              <button class="btn btn-sm btn-custom col-3 fw-bold btn-plus" data-id="1" style="width: 2rem">+</button>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 fs-2 mt-5">Catatan :</div>
      <textarea class="col-12" style="min-height: 10rem"></textarea>
      <div class="col-12 row d-flex justify-content-sm-end justify-content-center">
        <div class="col-6 d-flex align-items-center justify-content-end custom-price-card fw-bold">Total Biaya :</div>
        <div class="col-6 d-flex align-items-center justify-content-start ps-4 custom-price-card fw-bold">Rp. 75.000</div>
      </div>
      <div class="col-12 row d-flex justify-content-sm-end justify-content-center mt-3">
        <a id="bayarBtn" class="col-sm-3 col-8 btn pt-2 pb-2 fs-3 fw-bold text-light" style="background-color: #003662">Bayar</a>
      </div>
    </div>
  </div>
  <!-- SweetAlert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <!-- JavaScript -->
  <script type="text/javascript" src="../../resource/js/mahasiswa_keranjang_php.js"></script>
  <script type="text/javascript" src="../../resource/js/navbar.js"></script>
</body>

</html>