

  var toggle = document.querySelector(".toggle");
  var sidenav = document.querySelector(".sideNav");
  var mainboard = document.querySelector(".mainBoard");
  var cards = document.querySelector(".cardGroup");
  var header = document.querySelector(".headerNav");
  var displayer = document.querySelector(".displayer");
  var form = document.querySelector(".form-container form");

  toggle.onclick = function(){
  sidenav.classList.toggle("active");
  header.classList.toggle("active");
  mainboard.classList.toggle("active");
  cards.classList.toggle("active");
  displayer.classList.toggle("active");
    form.classList.toggle("active");
}

/*/function redirectToAccount() {
  // Check the user's account type stored in a session or variable
  var user_type = "<?php echo isset($_SESSION['user_type']) ? $_SESSION['user_type'] : ''; ?>";

  // Redirect based on account type
  if ($user_type === 'admin') {
      window.location.href = 'admin_page.php';
  } else if ($user_type === 'user') {
      window.location.href = 'user_page.php';
  }
}*/

