function logoutDropdown() {
  document.getElementById("name-dropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function (e) {
  if (!e.target.matches(".dropbtn")) {
    var myDropdown = document.getElementById("name-dropdown");
    if (myDropdown.classList.contains("show")) {
      myDropdown.classList.remove("show");
    }
  }
};

// Keranjang
const cartAlert = document.getElementById("cart-alert");
const keranjangBtn = document.getElementById("navitem-keranjang");

keranjangBtn.addEventListener("click", function (event) {
  event.preventDefault();

  const counters = document.querySelectorAll(".food-counter");
  let allZero = true;

  counters.forEach((counter) => {
    if (parseInt(counter.textContent) > 0) {
      allZero = false;
    }
  });

  if (cartAlert.style.display === "none" || allZero) {
    Swal.fire({
      title: "Keranjang kosong !",
      text: "Yuk pesan dulu :)",
      icon: "error",
      confirmButtonColor: "#d33",
      confirmButtonText: "Okay",
    });
  } else {
    Swal.fire({
      title: "Cek keranjang ?",
      text: "Sudah selesai mesannya ?",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#0095e7",
      cancelButtonColor: "#bbbbbb",
      confirmButtonText: "Sudah",
      cancelButtonText: "Tambah lagi deh",
      reverseButtons: true, // This option moves the confirm button to the right
    }).then((result) => {
      if (result.isConfirmed) {
        setTimeout(function () {
          window.location = "../mahasiswa_php/mahasiswa_keranjang.php";
        }, 300);
      }
    });
  }
});

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
        window.location = "../mahasiswa/mahasiswa_login.php";
      }, 800);
    }
  });
}
