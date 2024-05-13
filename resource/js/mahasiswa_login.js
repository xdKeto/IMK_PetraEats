function validateLogin() {
  var username = document.getElementById("email").value;
  var password = document.getElementById("password").value;

  const Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.onmouseenter = Swal.stopTimer;
      toast.onmouseleave = Swal.resumeTimer;
    },
  });

  if (username === "c14220331@john.petra.ac.id" && password === "c14220331") {
    Toast.fire({
      icon: "success",
      title: "Sign in succesful",
    });
  } else if(username === "" && password === ""){
    Toast.fire({
        icon: "info",
        title: "Enter your username and password",
      });
  }else {
    Toast.fire({
      icon: "error",
      title: "Please enter your username and password correctly",
    });
  }
}
