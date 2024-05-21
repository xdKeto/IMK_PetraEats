function validateLogin() {
  var username = document.getElementById("email").value;
  var password = document.getElementById("password").value;

  const toastSuccess = Swal.mixin({
    toast: true,
    position: "top-start",
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.querySelector(".swal2-timer-progress-bar").style.backgroundColor = "green";
    },
  });

  const toastError = Swal.mixin({
    toast: true,
    position: "top-start",
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.querySelector(".swal2-timer-progress-bar").style.backgroundColor = "red";
    },
  });

  const toastInfo = Swal.mixin({
    toast: true,
    position: "top-start",
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.querySelector(".swal2-timer-progress-bar").style.backgroundColor = "cyan";
    },
  });

  if (username === "c14220331@john.petra.ac.id" && password === "c14220331") {
    toastSuccess.fire({
      icon: "success",
      title: "Sign in successful",
    });

    setTimeout(function () {
      window.location = "../mahasiswa/mahasiswa_landing_page.html";
    }, 1200);
  } else if (username === "" && password === "") {
    toastInfo.fire({
      icon: "info",
      title: "Enter your username and password",
    });
  } else {
    toastError.fire({
      icon: "error",
      title: "Please enter your username and password correctly",
    });
  }
}

function confirmLogout() {
  Swal.fire({
    title: "Log out?",
    text: "Apakah anda yakin ingin logout ?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#d33",
    cancelButtonColor: "#bbbbbb",
    confirmButtonText: "Iya",
    cancelButtonText: "Cancel",
    reverseButtons: true, // This option moves the confirm button to the right
  }).then((result) => {
    if (result.isConfirmed) {
      setTimeout(function () {
        window.location = "../mahasiswa/mahasiswa_login.html";
      }, 800);
    }
  });
}
