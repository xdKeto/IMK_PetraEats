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
});
