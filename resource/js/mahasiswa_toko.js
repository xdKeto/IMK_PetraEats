document.addEventListener("DOMContentLoaded", () => {
  const container = document.querySelector(".container");
  const cartAlert = document.getElementById("cart-alert");

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
    } else {
      cartAlert.style.display = "none";
    }
  }

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
            window.location = "../mahasiswa/mahasiswa_landing_page.html";
          }, 300);
        }
      });
    }
  });
});
