<?php
session_start();

// Check if username (email) is set in the session
if (isset($_SESSION['username'])) {
    // Extract the username from the email address
    $email = $_SESSION['username'];
    
    // Find the position of '@' symbol in the email address
    $pos = strpos($email, '@');
    
    if ($pos !== false) {
        // Extract the username (part before '@')
        $username = substr($email, 0, $pos);
    } else {
        // Handle error if '@' symbol is not found (unexpected case)
        $username = 'User'; // Default username (fallback)
    }
} else {
    // Redirect the user back to the login page if session username is not set
    header('Location: mahasiswa_login.php');
    exit();
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
    <link rel="stylesheet" href="../resource/css/mainStyle.css" />
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg p-4" style="background-color: var(--title-color)">
      <div class="container-fluid align-items-center row">
        <!-- Brand -->
        <div class="col-lg-5 col-6 ms-lg-5 align-items-center d-flex justify-content-start">
          <img src="../resource/assets/assets_lama/logoPetraEats/logoPetraEats.png" style="width: 4rem" />
          <span class="navbar-brand ms-3 mb-0 fs-4 text-white" style="font-family: var(--font-family-1)">Petra Eats</span>
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
            <ul class="navbar-nav col-12 row gap-2 d-flex justify-content-end">
              <li class="nav-item col-lg-3 col-12 mt-lg-0 mt-4">
                <a href="#" class="btn btn-custom navbar-brand nav-link mb-0 fs-5 text-white" style="font-family: var(--font-family-1)"><i class="fa fa-history" aria-hidden="true"></i> Riwayat</a>
              </li>
              <li class="nav-item col-lg-3 col-12 mt-lg-0 mt-4 ms-lg-4">
                <a href="#" class="btn btn-custom navbar-brand nav-link mb-0 fs-5 text-white" style="font-family: var(--font-family-1)"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Keranjang</a>
              </li>
              <li class="nav-item col-lg-3 col-12 mt-lg-0 mt-4 ms-lg-4">
                <a href="#" class="btn btn-custom navbar-brand nav-link mb-0 fs-5 text-white" style="font-family: var(--font-family-1)"><?php echo ($username)?></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    
    <!-- Navbar -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
