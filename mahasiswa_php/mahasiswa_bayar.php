<?
require_once "../connect.php";
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
    <link rel="stylesheet" href="../resource/css/mainStyle.css" />
    <!-- <link rel="stylesheet" href="../resource/css/mahasiswa_kantin.css" /> -->
    <link rel="stylesheet" href="../resource/css/mahasiswa_navbar.css" />
    <link rel="stylesheet" href="../resource/css/mahasiswa_bayar.css" />
    <link rel="icon" type="image/x-icon" href="../resource/assets/assets_lama/logoPetraEats/logoPetraEats.png" />
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg p-4 fixed-top" style="background-color: var(--title-color)">
      <div class="container-fluid align-items-center row">
        <!-- Brand -->
        <div class="col-lg-5 col-6 ms-lg-5 align-items-center d-flex justify-content-start">
          <a href="mahasiswa_landing_page.php" style="text-decoration: none">
            <img src="../resource/assets/assets_lama/logoPetraEats/logoPetraEats.png" style="width: 4rem" />
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
                <a href="#" class="navbar-brand nav-link mb-0 fs-5" style="font-family: var(--font-family-1)" id="navitem"><i class="fa fa-history"></i> Riwayat</a>
              </li>
              <li class="nav-item col-lg-4 col-3 align-items-center d-flex justify-content-center mt-lg-0 mt-4">
                <a href="#" class="navbar-brand nav-link mb-0 fs-5 position-relative rounded" style="font-family: var(--font-family-1);" id="navitem-keranjang">
                  <i class="fa fa-shopping-basket"></i> Keranjang
                  <span id="cart-alert" class="position-absolute start-1 translate-middle p-1 bg-danger border border-light rounded-circle" style="display: none; top: 6px">
                    <span class="visually-hidden">New alerts</span>
                  </span>
                </a>
              </li>
              <li class="nav-item col-lg-4 col-3 align-items-center d-flex justify-content-center mt-lg-0 mt-4">
                <div class="dropdown">
                  <div class="navbar-brand nav-link mb-0 fs-5 dropbtn d-flex justify-content-center" style="font-family: var(--font-family-1)" id="navitem" onclick="logoutDropdown()">
                    <img class="rounded-circle dropbtn" style="max-width: 55px" src="../resource/assets/assets_lama/mahasiswa/profile/Default.jpg" style="z-index: 2" />
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

    <div class="container-fluid row d-flex justify-content-center mb-5" style="margin-top: 10rem">
      <!-- Button and Title -->
      <div class="row col-12 d-flex justify-content-between">
        <a class="btn btn-danger back-button col-12 fw-bold ms-3 mt-1 me-auto" href="mahasiswa_landing_page.php">Back</a>
        <div class="nama-section col-12 fw-bold align-items-center text-center custom-title">Bayar</div>
      </div>
      <!-- Button and Title -->

      <div class="container col-8 shadow row bg-light d-flex align-items-center justify-content-center rounded-4 mt-4 pb-5 ms-1">
        <div class="col-12 fs-1 fw-bold text-center d-flex align-items-center justify-content-center pt-4 pb-4">Form Pembayaran</div>
        <div class="col-12 row d-flex justify-content-center mb-5 pb-5 border border-3">
          <div class="col-12 fs-5 fw-bold mt-5 text-center">Silahkan bayar melalui QRIS dengan QR dibawah ini</div>
          <img class="col-12 mt-4" src="../resource/assets/qr/qr.png" style="max-width: 20rem" />
          <div class="col-12 mt-4 d-flex justify-content-center fw-bold custom-va">VA : 0829123891238859</div>
        </div>
        <div class="col-12 row border border-3 pt-4 pb-4">
          <label class="col-12 fw-bold custom-screenshot">Masukan Screenshot Bukti Transfer</label>
          <input class="col-12 mt-1" id="fileInput" type="file" accept=".jpg, .jpeg, .png" />
          <small class="text-danger d-none" id="fileError">Unsupported file type. Please upload a JPG or PNG file.</small>
        </div>
        <div id="submitBtn" class="col-12 row d-flex justify-content-sm-end justify-content-center mt-3">
          <a class="col-sm-4 col-12 btn pt-2 pb-2 fs-3 fw-bold text-light" style="background-color: #003662">Submit</a>
        </div>
      </div>
    </div>
    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- JavaScript -->
    <script type="text/javascript" src="../resource/js/mahasiswa_bayar.js"></script>
    <script type="text/javascript" src="../resource/js/navbar.js"></script>
  </body>
</html>
