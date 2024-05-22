document.addEventListener("DOMContentLoaded", () => {
  const container = document.querySelector(".container");
  const cartAlert = document.getElementById("cart-alert");
  const cekKeranjang = document.getElementById("cekKeranjang");

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
      updateKeranjangButton();
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

  function updateKeranjangButton() {
    const counters = document.querySelectorAll(".food-counter");
    let allZero = true;

    counters.forEach((counter) => {
      if (parseInt(counter.textContent) > 0) {
        allZero = false;
      }
    });

    if (allZero) {
      cekKeranjang.classList.add("disabled");
    } else {
      cekKeranjang.classList.remove("disabled");
    }
  }

  // Call updateButtonState on page load
  updateKeranjangButton();

  // Add click event listener for SweetAlert2 confirmation
  cekKeranjang.addEventListener("click", (event) => {
    if (!cekKeranjang.classList.contains("disabled")) {
      event.preventDefault(); // Prevent the default anchor behavior
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
            window.location = "mahasiswa_keranjang.html";
          }, 300);
        }
      });
    }
  });

  // Function to show/hide the button based on screen size
  function handleResize() {
    if (window.innerWidth <= 991) {
      cekKeranjang.style.display = 'block';
    } else {
      cekKeranjang.style.display = 'none';
    }
  }

  // Initial check
  handleResize();

  // Listen for window resize events
  window.addEventListener('resize', handleResize);
});
