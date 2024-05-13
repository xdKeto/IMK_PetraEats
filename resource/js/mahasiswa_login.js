function validateLogin() {
  var username = document.getElementById("email").value;
  var password = document.getElementById("password").value;

  if (username === "c14220331@gmail.com" && password === "c14220331") {
    alert("Login successful!");
  } else {
    alert("Invalid username or password. Please try again.");
  }
}
