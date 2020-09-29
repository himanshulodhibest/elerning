<?php   
include("header.php");       
?>

<!-- Start Video background -->
<div class="container-fluid remove-vid-marg">
  <div class="vid-parent">
    <video playsinline autoplay muted loop src="video/frontvedio.mov">
    </video>
    <div class="vid-overlay">
    </div>
  </div>
    <div class=vid-content>
      <h1 class="my-content"> Welcome to E-learning </h1>
      <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#myModal"> Get Start</a>
      
      
    </div>
</div>
<!-- End video background -->

<!-- start text banner -->
<div class="container-fluid bg-danger txt-banner">
  <div class="row bottom-banner">
    <div class="col-sm">
      <h5><i class="fas fa-book-open mr-3"></i>100+ Online Courses </h5>
    </div>
    <div class="col-sm">
      <h5><i class="fas fa-users mr-3"></i>Expert instructors</h5>
    </div>
    <div class="col-sm">
      <h5><i class="fas fa-keyboard mr-3"></i>24 hr Access</h5>
    </div>
    <div class="col-sm">
      <h5><i class="fas fa-rupee-sign mr-3"></i>Money Back Gaurantee*</h5>
    </div>
  </div>
</div>
<!-- end text banner -->

<!-- Start Carsol for courses -->
<?php
include("courses.php");
?>
<!-- end carasol for courses-->


<!-- Contact Us form -->
<?php
// include("call_request_form.php");
?>
<!-- End Contact us form -->

<!-- Start footer -->
<?php   
// include("footer.php");       
?>
<!-- End footer -->
