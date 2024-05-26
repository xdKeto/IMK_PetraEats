<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Petra Eats</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet" />

  <!-- CSS -->
  <link rel="stylesheet" href="../../resource/css/mahasiswa_login.css" />
  <link rel="icon" type="image/x-icon" href="../../resource/assets/assets_lama/logoPetraEats/logoPetraEats.png" />
</head>

<body>
  <section class="vh-100">
    <div class="container-fluid">
      <div class="row custom-row">
        <div class="col-auto col-sm-auto col-md-6 col-lg-4 text-black">
          <div class="container-semua d-flex align-items-center h-custom-2 px-4 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-5">
            <form class="form-container" style="width: 30rem" accept-charset=" UTF-8" action=" " method="" onsubmit="event.preventDefault(); validateLogin();">
              <h3 class="welcome mb-3 pb-3" style="letter-spacing: 1px">Welcome, Petranesian</h3>

              <h4 class="subtext mb-3 pb-3">Log in to access our full features.</h4>

              <div class="form-outline mb-4">
                <input type="email" id="email" class="form-control form-control-lg" name="email" />
                <label class="email form-label" for="email">Email address</label>
              </div>

              <div class="form-outline mb-4">
                <input type="password" id="password" class="form-control form-control-lg" name="password" />
                <label class="password form-label" for="password">Password</label>
              </div>

              <div class="signin-con pt-1 mb-4">
                <button class="btn btn-lg btn-block" type="submit">Sign in</button>
              </div>

              <p class="forgor small mb-5 pb-lg-2"><a class="text-muted" href="https://sso.petra.ac.id/petrasso/changepass.php">Forgot password?</a></p>
            </form>
          </div>
        </div>
        <div class="side-image col-md-6 col-lg-8 px-0 d-none d-sm-block">
          <img src="../../resource/assets/petra.jpg" alt="Login image" class="image w-100 vh-100" />
          <img src="../../resource/assets/assets_lama/login/logos.png" alt="logo-2" class="logos" />
        </div>
      </div>
    </div>
  </section>

  <!-- JavaScript -->
  <script type="text/javascript" src="../../resource/js/mahasiswa_login.js"></script>
  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>
  <!-- SweetAlert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>