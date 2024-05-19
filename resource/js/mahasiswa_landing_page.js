function displayTime() {
  var clientTime = new Date();
  var time = new Date(clientTime.getTime());
  var sh = time.getHours().toString();
  var sm = time.getMinutes().toString();
  var ampm = time.getHours() >= 12 ? "PM" : "AM"; // Determine AM/PM based on hour

  // Convert hour to 12-hour format
  if (time.getHours() > 12) {
    sh = (time.getHours() - 12).toString(); // Convert hour to 1-12 format
  } else if (time.getHours() === 0) {
    sh = "12"; // Midnight (0 hour) is 12 AM
  }

  // Display formatted time with AM/PM
  document.getElementById("jam").innerHTML = (sh.length == 1 ? "0" + sh : sh) + ":" + (sm.length == 1 ? "0" + sm : sm) + " " + ampm;
  // document.getElementById("jaminput").value = (sh.length == 1 ? "0" + sh : sh) + ":" + (sm.length == 1 ? "0" + sm : sm) + " " + ampm;
}
