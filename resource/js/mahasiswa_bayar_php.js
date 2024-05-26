$(document).ready(function () {
  $("#fileInput").on("change", function () {
    const file = this.files[0];
    const allowedExtensions = ["image/jpeg", "image/png", "image/jpg"];

    if (file && !allowedExtensions.includes(file.type)) {
      this.value = ""; // Clear the input
      $("#fileError").removeClass("d-none"); // Show the error message
    } else {
      $("#fileError").addClass("d-none"); // Hide the error message
    }
  });

  $("#bayarBtn").on("click", function () {
    Swal.fire({
      title: "Bayar ?",
      text: "Yakin dengan pesanan kamu ?",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#0095e7",
      cancelButtonColor: "#bbbbbb",
      confirmButtonText: "Ya",
      cancelButtonText: "Cancel",
      reverseButtons: true, // This option moves the confirm button to the right
    }).then((result) => {
      if (result.isConfirmed) {
        setTimeout(function () {
          window.location = "../mahasiswa_php/mahasiswa_riwayat.php";
        }, 300);
      }
    });
  });













});
