<?php

// session_start();

function createReport()
{

    // return [$moneyTotal, $moneyMonth, $moneyDays, $graphYear, $graphDays];
}

// $dataForGraph = createReport($_SESSION["dataTransaksi"]);

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
    <link rel="stylesheet" href="../../resource/css/penjual_navbar.css" />
    <link rel="stylesheet" href="../../resource/css/penjual_landing_page.css" />
    <link rel="icon" type="image/x-icon" href="../../resource/assets/assets_lama/logoPetraEats/logoPetraEats.png" />
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg p-4 fixed-top" style="background-color: var(--title-color)">
        <div class="container-fluid align-items-center row">
            <!-- Brand -->
            <div class="col-lg-3 col-6 ms-lg-5 align-items-center d-flex justify-content-start">
                <a href="penjual_landing_page.html" style="text-decoration: none">
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
            <div class="col-lg-8 col-12">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav col-12 row d-flex justify-content-end align-items-center ms-sm-0 ms-2">
                        <li class="nav-item col-3 align-items-center d-flex justify-content-center mt-lg-0 mt-4">
                            <a href="#" class="navbar-brand nav-link mb-0 fs-5" style="font-family: var(--font-family-1)" id="navitem"><i class="fa fa-history"></i> Riwayat</a>
                        </li>
                        <li class="nav-item col-3 align-items-center d-flex justify-content-center mt-lg-0 mt-4">
                            <a href="penjual_landing_page.php" class="navbar-brand nav-link mb-0 fs-5 position-relative " style="font-family: var(--font-family-1)"><i class="fa fa-pencil" aria-hidden="true"></i> Edit
                            </a>
                        </li>
                        <li class="nav-item col-3 align-items-center d-flex justify-content-center mt-lg-0 mt-4">
                            <a href="penjual_report.php" class="navbar-brand nav-link mb-0 fs-5 position-relative rounded bg-light rounded rounded-3 ps-3 pe-3 text-dark" style="font-family: var(--font-family-1)"><i class="fa fa-file" aria-hidden="true"></i> Report </a>
                        </li>
                        <li class="nav-item col-3 align-items-center d-flex justify-content-center mt-lg-0 mt-4">
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
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 col-12 d-flex justify-content-center fw-bold text-center" style="font-size: 4rem">Laporan Penjualan</div>
        </div>
        <!-- Button and Title -->

        <!-- MENU -->
        <div class="row d-flex mt-5 justify-content-sm-between justify-content-center gap-3 bg-danger border border-3 p-4 rounded rounded-5">
            <div class="col-sm-3 row d-flex justify-content-center align-items-center p-4 border border-dark border-3 bg-light">
                <div class="col-12 text-center fs-5 fw-bold">Jumlah Uang Masuk Total</div>
                <div class="col-12 text-center fw-bold">Rp. 200.562.000</div>
                <!-- <div class="col-12 text-center fw-bold"> $dataForGraph[0] ></div> -->
            </div>
            <div class="col-sm-4 row d-flex justify-content-center align-items-center p-4 border border-dark border-3 bg-light">
                <div class="col-12 text-center fs-5 fw-bold">Jumlah Uang Masuk Bulan Ini</div>
                <div class="col-12 text-center fw-light">Terhitung dari tanggal 1 bulan ini</div>
                <div class="col-12 text-center fw-bold">Rp. 15.562.000</div>
                <!-- <div class="col-12 text-center fw-bold"> $dataForGraph[1] ></div> -->
            </div>
            <div class="col-sm-3 row d-flex justify-content-center align-items-center p-4 border border-dark border-3 bg-light">
                <div class="col-12 text-center fs-5 fw-bold">Jumlah Uang Masuk Hari Ini</div>
                <div class="col-12 text-center fw-bold">Rp. 2.000.000</div>
                <!-- <div class="col-12 text-center fw-bold"> $dataForGraph[2] ></div> -->
            </div>
        </div>

        <div class="row mt-5 d-flex justify-content-center rounded rounded-5 bg-danger border border-3 p-5">
            <div class="col-6 row d-flex justify-content-center">
                <div class="col-12 fw-bold fs-3 text-light text-center">Grafik Pertahun</div>
                <div class="col-12 text-center">
                    <img src="../../resource/assets/report/Grafik_Pertahun.JPG" class="border border-black border-3" style="max-width:80%">
                    <!-- <div class="col-12 text-center fw-bold"> $dataForGraph[3] ></div> -->
                </div>
            </div>
            <div class="col-6 row d-flex justify-content-center">
                <div class="col-12 fw-bold fs-3 text-light text-center">Grafik Perhari</div>
                <div class="col-12 text-center">
                    <img src="../../resource/assets/report/Grafik_Perhari.JPG" class="border border-black border-3" style="max-width:80%">
                    <!-- <div class="col-12 text-center fw-bold"> $dataForGraph[4] ></div> -->
                </div>
            </div>
        </div>


        <!-- MENU -->
    </div>

    <!-- JavaScript -->
    <script type="text/javascript" src="../../resource/js/mahasiswa_toko.js"></script>
    <script type="text/javascript" src="../../resource/js/mahasiswa_login.js"></script>
    <script type="text/javascript" src="../../resource/js/navbar.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>