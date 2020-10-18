<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <!-- font assome -->
        <link rel="stylesheet" href="css/all.min.css">
    <title>Index</title>
</head>
<body>
    <!-- Start nevigation -->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">Elerning</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav custom-nav">
      <li class="nav-item custom-nav-item">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item custom-nav-item">
        <a class="nav-link" href="courses.php">Courses</a>
      </li>
      <li class="nav-item custom-nav-item">
        <a class="nav-link" href="payment_Sts.php">Pyment</a>
      </li>
      <li class="nav-item custom-nav-item">
        <a class="nav-link" href="#">My Profile</a>
      </li>
      <li class="nav-item custom-nav-item">
        <a class="nav-link" href="#">Log out</a>
      </li>
      <li class="nav-item custom-nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#loginModal">Login</a>
      </li>
      <li class="nav-item custom-nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#myModal">SignUp</a>
      </li>
      <li class="nav-item custom-nav-item">
        <a class="nav-link" href="#">Feedback</a>
      </li>
      <li class="nav-item custom-nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
     
     
    </ul>
  </div>
</nav>
    <!-- End nevigation -->















    <script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>
<!-- 
<script src="js/jquery.min.js"></script>

<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
 -->
</body>
</html>