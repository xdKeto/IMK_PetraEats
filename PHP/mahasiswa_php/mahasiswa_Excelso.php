<?
require_once "../../connect.php";
session_start();


// $_SESSION['cart'] = getCart();

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
  <link rel="stylesheet" href="../../resource/css/mahasiswa_navbar.css" />
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
            <li class="nav-item col-lg-8 col-3 align-items-center d-flex justify-content-end mt-lg-0 mt-4 shake">
              <a href="mahasiswa_riwayat.php" class="navbar-brand nav-link mb-0 fs-5" style="font-family: var(--font-family-1)" id="navitem"><i class="fa fa-history"></i> Riwayat</a>
            </li>
            <li class="nav-item col-lg-4 col-3 align-items-center d-flex justify-content-center mt-lg-0 mt-4 ">
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

  <div class="container mb-5" style="margin-top: 10rem">
    <!-- Button and Title -->
    <div class="row d-flex justify-content-between">
      <a class="btn btn-danger back-button col-lg-2 col-12 fw-bold ms-3 mt-1 me-auto" href="mahasiswa_kantinQ.php">Back</a>
      <div class="nama-toko col-lg-10 col-12 fw-bold text-center">Kantin Q ~ Excelso</div>
      <div class="col-12 fs-4 fw-bold d-flex justify-content-center">Silahkan Pilih Menu:</div>
    </div>
    <!-- Button and Title -->

    <!-- MENU -->
    <div class="row mt-5 d-flex justify-content-center ps-lg-2 gap-sm-0 gap-4">
      <div class="col-lg-6 col-xl-4 col-12">
        <div class="m-3 bg-light rounded-3 shadow d-flex justify-content-start justify-content-md-center">
          <div class="col-6 p-2">
            <img src="..\..\resource\assets\assets_lama\foods\excelso1.jpg" style="max-width: 12rem" class="card-img-top rounded-2 mt-4" />
          </div>
          <div class="col-6 mt-4 pb-3">
            <div style="height: 12rem">
              <h4 class="">Cookies and Cream</h4>
              <p class="">Iced blended cookies and cream</p>
              <p class="">Rp. 25.000</p>
            </div>
            <div class="row d-flex justify-content-start align-items-center" style="padding-left: 12px; padding-right: 12px">
              <button class="btn btn-sm btn-custom col-4 fw-bold btn-minus" data-id="1" style="width: 3rem">-</button>
              <div id="counter-1" class="fw-bold col-4 food-counter align-items-center" style="text-align: center">0</div>
              <button class="btn btn-sm btn-custom col-4 fw-bold btn-plus" data-id="1" style="width: 3rem">+</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-xl-4 col-12">
        <div class="m-3 bg-light rounded-3 shadow d-flex justify-content-start justify-content-md-center">
          <div class="col-6 p-2">
            <img src="..\..\resource\assets\assets_lama\foods\excelso2.jpg" style="max-width: 12rem" class="card-img-top rounded-2 mt-4" />
          </div>
          <div class="col-6 mt-4 pb-3">
            <div style="height: 12rem">
              <h4 class="">Choco Chip</h4>
              <p class="">Minuman coklat dengan topping choco chip</p>
              <p class="">Rp. 27.000</p>
            </div>
            <div class="row d-flex justify-content-start align-items-center" style="padding-left: 12px; padding-right: 12px">
              <button class="btn btn-sm btn-custom col-4 fw-bold btn-minus" data-id="1" style="width: 3rem">-</button>
              <div id="counter-2" class="fw-bold col-4 food-counter align-items-center" style="text-align: center">0</div>
              <button class="btn btn-sm btn-custom col-4 fw-bold btn-plus" data-id="1" style="width: 3rem">+</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-xl-4 col-12">
        <div class="m-3 bg-light rounded-3 shadow d-flex justify-content-start justify-content-md-center">
          <div class="col-6 p-2">
            <img src="..\..\resource\assets\assets_lama\foods\excelso3.jpg" style="max-width: 12rem" class="card-img-top rounded-2 mt-4" />
          </div>
          <div class="col-6 mt-4 pb-3">
            <div style="height: 12rem">
              <h4 class="">Caramel Jelly Latte</h4>
              <p class="">Caramel latte dengan topping jelly</p>
              <p class="">Rp. 50.000</p>
            </div>

            <div class="row d-flex justify-content-start align-items-center" style="padding-left: 12px; padding-right: 12px">
              <button class="btn btn-sm btn-custom col-4 fw-bold btn-minus" data-id="1" style="width: 3rem">-</button>
              <div id="counter-3" class="fw-bold col-4 food-counter align-items-center" style="text-align: center">0</div>
              <button class="btn btn-sm btn-custom col-4 fw-bold btn-plus" data-id="1" style="width: 3rem">+</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-xl-4 col-12">
        <div class="m-3 bg-light rounded-3 shadow d-flex justify-content-start justify-content-md-center">
          <div class="col-6 p-2">
            <img src="..\..\resource\assets\assets_lama\foods\excelso4.jpg" style="max-width: 12rem" class="card-img-top rounded-2 mt-4" />
          </div>
          <div class="col-6 mt-4 pb-3">
            <div style="height: 12rem">
              <h4 class="">Iced Coffee</h4>
              <p class="">Iced brewed coffee</p>
              <p class="">Rp. 28.000</p>
            </div>

            <div class="row d-flex justify-content-start align-items-center" style="padding-left: 12px; padding-right: 12px">
              <button class="btn btn-sm btn-custom col-4 fw-bold btn-minus" data-id="1" style="width: 3rem">-</button>
              <div id="counter-4" class="fw-bold col-4 food-counter align-items-center" style="text-align: center">0</div>
              <button class="btn btn-sm btn-custom col-4 fw-bold btn-plus" data-id="1" style="width: 3rem">+</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-xl-4 col-12">
        <div class="m-3 bg-light rounded-3 shadow d-flex justify-content-start justify-content-md-center">
          <div class="col-6 p-2">
            <img src="..\..\resource\assets\assets_lama\foods\excelso5.png" style="max-width: 12rem" class="card-img-top rounded-2 mt-4" />
          </div>
          <div class="col-6 mt-4 pb-3">
            <div style="height: 12rem">
              <h4 class="">Lychee Tea</h4>
              <p class="">Minuman teh dengan tambahan buah lychee</p>
              <p class="">Rp. 25.000</p>
            </div>

            <div class="row d-flex justify-content-start align-items-center" style="padding-left: 12px; padding-right: 12px">
              <button class="btn btn-sm btn-custom col-4 fw-bold btn-minus" data-id="1" style="width: 3rem">-</button>
              <div id="counter-5" class="fw-bold col-4 food-counter align-items-center" style="text-align: center">0</div>
              <button class="btn btn-sm btn-custom col-4 fw-bold btn-plus" data-id="1" style="width: 3rem">+</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-xl-4 col-12">
        <div class="m-3 bg-light rounded-3 shadow d-flex justify-content-start justify-content-md-center">
          <div class="col-6 p-2">
            <img src="..\..\resource\assets\assets_lama\foods\excelso6.jpg" style="max-width: 12rem" class="card-img-top rounded-2 mt-4" />
          </div>
          <div class="col-6 mt-4 pb-3">
            <div style="height: 12rem">
              <h4 class="">Matcha Pearl</h4>
              <p class="">Matcha dan pearl</p>
              <p class="">Rp. 32.000</p>
            </div>
            <div class="row d-flex justify-content-start align-items-center" style="padding-left: 12px; padding-right: 12px">
              <button class="btn btn-sm btn-custom col-4 fw-bold btn-minus" data-id="1" style="width: 3rem">-</button>
              <div id="counter-6" class="fw-bold col-4 food-counter align-items-center" style="text-align: center">0</div>
              <button class="btn btn-sm btn-custom col-4 fw-bold btn-plus" data-id="1" style="width: 3rem">+</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- MENU -->
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

  <!-- Form Submit -->

  <!-- Hidden form for submission -->
  <form id="dataForm" action="mahasiswa_keranjang.php" method="POST">
    <!-- Hidden inputs for counter values -->
    <input type="hidden" name="counter1" id="form-counter-1" value="">
    <input type="hidden" name="counter2" id="form-counter-2" value="">
    <input type="hidden" name="counter3" id="form-counter-3" value="">
    <input type="hidden" name="counter4" id="form-counter-4" value="">
    <input type="hidden" name="counter5" id="form-counter-5" value="">
    <input type="hidden" name="counter6" id="form-counter-6" value="">
    <!-- Add more hidden inputs as needed for other counters -->
  </form>

  <!-- Form Submit -->

  <!-- JavaScript -->
  <script type="text/javascript">
    document.addEventListener("DOMContentLoaded", () => {
      const container = document.querySelector(".container");
      const cartAlert = document.getElementById("cart-alert");
      const cartAler2 = document.getElementById("cart-alert-bottom-left");
      const cekKeranjang = document.getElementById("cekKeranjang");

      // addToCart()
      container.addEventListener("click", (event) => {
        const target = event.target;

        if (target.classList.contains("btn-plus") || target.classList.contains("btn-minus")) {
          const counterElement = target.closest(".row").querySelector(".food-counter");
          let currentValue = parseInt(counterElement.textContent, 10);

          if (target.classList.contains("btn-plus")) {
            currentValue += 1;
          } else if (target.classList.contains("btn-minus") && currentValue > 0) {
            currentValue -= 1;
          }

          counterElement.textContent = currentValue;
          updateCartAlert();
        }
      });

      function updateCartAlert() {
        const counters = document.querySelectorAll(".food-counter");
        let hasItems = false;

        counters.forEach((counter) => {
          if (parseInt(counter.textContent, 10) > 0) {
            hasItems = true;
          }
        });

        if (hasItems) {
          cartAlert.style.display = "block";
          cartAler2.style.display = "block";
        } else {
          cartAlert.style.display = "none";
          cartAler2.style.display = "none";
        }
      }

      // checkCart()
      cekKeranjang.addEventListener("click", (event) => {
        event.preventDefault();

        const counters = document.querySelectorAll(".food-counter");
        let hasItems = false;

        counters.forEach((counter) => {
          if (parseInt(counter.textContent, 10) > 0) {
            hasItems = true;
          }
        });

        if (!hasItems) {
          Swal.fire({
            title: "Keranjang kosong!",
            text: "Yuk pesan dulu :)",
            icon: "error",
            confirmButtonColor: "#d33",
            confirmButtonText: "Okay",
          });
        } else {
          Swal.fire({
            title: "Cek keranjang?",
            text: "Sudah selesai mesannya?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#0095e7",
            cancelButtonColor: "#bbbbbb",
            confirmButtonText: "Sudah",
            cancelButtonText: "Tambah lagi deh",
            reverseButtons: true, 
          }).then((result) => {
            if (result.isConfirmed) {
              setTimeout(function() {
                // getCart()
                document.getElementById('form-counter-1').value = document.getElementById('counter-1').textContent;
                document.getElementById('form-counter-2').value = document.getElementById('counter-2').textContent;
                document.getElementById('form-counter-3').value = document.getElementById('counter-3').textContent;
                document.getElementById('form-counter-4').value = document.getElementById('counter-4').textContent;
                document.getElementById('form-counter-5').value = document.getElementById('counter-5').textContent;
                document.getElementById('form-counter-6').value = document.getElementById('counter-6').textContent;

                document.getElementById('dataForm').submit();

              }, 300);

            }
          });
        }
      });

      
      function handleResize() {
        if (window.innerWidth <= 991) {
          cekKeranjang.style.display = "block";
        } else {
          cekKeranjang.style.display = "none";
        }
      }

      // Initial check
      handleResize();

      // Listen for window resize events
      window.addEventListener("resize", handleResize);
    });
  </script>
  <script type="text/javascript" src="../../resource/js/mahasiswa_login.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- SweetAlert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>