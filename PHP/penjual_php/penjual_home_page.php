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
                        <li class="nav-item col-2 align-items-center d-flex justify-content-center mt-lg-0 mt-4">
                            <a href="penjual_home_page.php" class="navbar-brand nav-link mb-0 fs-5 position-relative rounded bg-light rounded rounded-3 ps-3 pe-3 text-dark " style="font-family: var(--font-family-1)"><i class="fa fa-pencil" aria-hidden="true"></i> Home
                            </a>
                        </li>
                        <li class="nav-item col-2 align-items-center d-flex justify-content-center mt-lg-0 mt-4">
                            <a href="#" class="navbar-brand nav-link mb-0 fs-5" style="font-family: var(--font-family-1)" id="navitem"><i class="fa fa-history"></i> Riwayat</a>
                        </li>
                        <li class="nav-item col-2 align-items-center d-flex justify-content-center mt-lg-0 mt-4">
                            <a href="penjual_edit_page.php" class="navbar-brand nav-link mb-0 fs-5 position-relative " style="font-family: var(--font-family-1)"><i class="fa fa-pencil" aria-hidden="true"></i> Edit
                            </a>
                        </li>
                        <li class="nav-item col-2 align-items-center d-flex justify-content-center mt-lg-0 mt-4">
                            <a onclick="moveToReport()" class="navbar-brand nav-link mb-0 fs-5 position-relative " style="font-family: var(--font-family-1)"><i class="fa fa-file" aria-hidden="true"></i> Report </a>
                        </li>
                        <li class="nav-item col-2 align-items-center d-flex justify-content-center mt-lg-0 mt-4">
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
            <div class="col-12 d-flex justify-content-center fw-bold" style="font-size: 4rem">Excelso</div>
        </div>
        <!-- Button and Title -->

        <!-- pesanan masuk -->
        <div class="container row mt-3 d-flex justify-content-center gap-5">

            <div class="col-4 row d-flex justify-content-center border border-5 rounded-4 shadow mt-4 ms-1 gap-3" style="background-color: #f2f8f9">
                <div class="col-12 d-flex justify-content-center row">
                    <div class="col-12 row mt-3 mb-2 d-flex justify-content-center align-items-center pt-3 pb-3 custom-card-pesanan rounded-3">
                        <div class="col-12 row d-flex align-items-center justify-content-center text-center mb-3">
                            <div id="orderStatus" class="bg-warning col-12 rounded-4 p-2 ps-4 pe-4 fw-bold text-center" disabled data-bs-toggle="button">Permintaan</div>
                        </div>
                        <div class="col-12 row d-flex align-items-center border border-2 rounded-3">
                            <div class=" col-5 row d-flex justify-content-center">
                                <div class="col-12 d-flex justify-content-center mt-4">
                                    <img src="../../resource/assets/assets_lama/mahasiswa/profile/Ryan@gmail.com.jpg" class=" float-start rounded-2 border border-black" style="max-width: 70%; max-height: 70%;" />
                                </div>
                            </div>
                            <div class=" col-8 row d-flex justify-content-start mb-2 mt-2">
                                <div class="col-12 fw-bold mb-md-2 custom-menu-title">01 - C14220123</div>
                                <div class="col-12 mb-md-2 custom-menu-date" id="currentDate"></div>
                                <div class="col-12 fw-bold">
                                    <button id="lihatPesananBtn" class="btn btn-sm fw-bold" style="color: white; background-color: #003662" data-bs-toggle="modal" data-bs-target="#detailPesanan1">Lihat pesanan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- pesanan masuk -->
    </div>


    <!-- Modal -->
    <div class="modal fade" id="detailPesanan1" tabindex="-1" aria-labelledby="detailPesananLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-3 fw-bold" id="detailPesananLabel">Pesanan 01</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container row">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Item</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Cookies and Cream</td>
                                    <td>2</td>
                                    <td>50000</td>
                                </tr>
                                <tr>
                                    <td>Lychee Tea</td>
                                    <td>1</td>
                                    <td>25000</td>
                                </tr>
                                <tr>
                                    <td>Iced Coffee</td>
                                    <td>1</td>
                                    <td>22000</td>
                                </tr>
                                <tr>
                                    <td>Caramel Jelly Latte</td>
                                    <td>1</td>
                                    <td>27000</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Sub Total:</td>
                                    <td>124000</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="col-12 fw-bold fs-5">Catatan :</div>
                        <div class="col-12">Banyakin esnya ya.</div>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="rejectOrder">Tolak</button>

                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="acceptOrder">Terima</button>
                </div>
            </div>
        </div>
    </div>


    <!-- JavaScript -->
    <script type="text/javascript" src="../../resource/js/mahasiswa_toko.js"></script>
    <script type="text/javascript" src="../../resource/js/mahasiswa_login.js"></script>
    <script type="text/javascript" src="../../resource/js/navbar.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- JavaScript -->
    <script>
        function moveToReport() {
            window.location.href = "penjual_report.php";
        }

        // Function to update the currentDate div with the current date
        function updateCurrentDate() {
            var currentDate = new Date();
            var hours = String(currentDate.getHours()).padStart(2, '0');
            var minutes = String(currentDate.getMinutes()).padStart(2, '0');

            var formattedDate = currentDate.toLocaleDateString('en-US', {
                year: 'numeric',
                month: '2-digit',
                day: '2-digit'
            });
            document.getElementById('currentDate').textContent = formattedDate + ' - ' + '10:20';
            document.getElementById('currentDate').textContent = formattedDate + ' - ' + '13:20';
        }

        // Call the function to update the currentDate initially
        updateCurrentDate();



        // Confirm Pesanan
        document.getElementById('acceptOrder').addEventListener('click', function() {
            var orderStatus = document.getElementById('orderStatus');
            orderStatus.textContent = 'Menunggu Bayar';
            orderStatus.classList.remove('bg-warning');
            orderStatus.classList.add('bg-info');

            // Hide the "Tolak" and "Terima" buttons
            document.getElementById('rejectOrder').style.display = 'none';
            document.getElementById('acceptOrder').style.display = 'none';

            // Create and append a new button for "Selesaikan"
            var completeButton = document.createElement('button');
            completeButton.setAttribute('type', 'button');
            completeButton.setAttribute('class', 'btn btn-secondary');
            completeButton.setAttribute('data-bs-dismiss', 'modal');
            completeButton.setAttribute('disabled', 'true'); // Adding disabled attribute
            completeButton.textContent = 'Menunggu pembayaran';

            var modalFooter = document.querySelector('.modal-footer');
            modalFooter.appendChild(completeButton);
        });

        document.getElementById('rejectOrder').addEventListener('click', function() {
            // Remove the entire card
            var cardToRemove = document.querySelector('.col-4');
            cardToRemove.remove();

            // Check if there are any pesanan left
            var pesananContainer = document.querySelector('.container');
            var pesananCards = pesananContainer.querySelectorAll('.col-4');

            // If there are no pesanan left, show "belum ada pesanan"
            if (pesananCards.length === 0) {
                var noPesananText = document.createElement('div');
                noPesananText.textContent = 'Belum ada pesanan';
                noPesananText.classList.add('text-center', 'fs-4', 'fw-bold', 'mt-4');
                pesananContainer.appendChild(noPesananText);
            }

            // Change the order status and its style
            var orderStatus = document.getElementById('orderStatus');
            orderStatus.textContent = 'Pesanan Ditolak';
            orderStatus.classList.remove('bg-warning');
            orderStatus.classList.add('bg-danger');

            // Hide the "Tolak" and "Terima" buttons
            document.getElementById('rejectOrder').style.display = 'none';
            document.getElementById('acceptOrder').style.display = 'none';

            // Create and append a new button for "close"
            var closeButton = document.createElement('button');
            closeButton.setAttribute('type', 'button');
            closeButton.setAttribute('class', 'btn btn-secondary');
            closeButton.setAttribute('data-bs-dismiss', 'modal');
            closeButton.textContent = 'Close';

            var modalFooter = document.querySelector('.modal-footer');
            modalFooter.appendChild(closeButton);

            console.log("Tolak button clicked");
        });
    </script>
</body>

</html>