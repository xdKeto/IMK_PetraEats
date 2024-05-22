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
