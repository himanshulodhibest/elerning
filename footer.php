<!-- <style>
.scrollTop{
  position:fixed;
  top:600px;
  right:30px;
}
</style> -->

<!-- Footer Area -->   
<section><!--Start Footer -->	
<footer class="footersection" id="footerdiv">
<div class="container-fluid bg-dark mt-5 text-white"><!--Start contener-->
  <div class="container-fluid mx-2"><!--Start first contener-->
      <div class="row py-3">  <!--Start first Row-->
       
        <div class="col-md-6"> <!--Start first column-->
          <h3 style="color:yellow;">Contact Details :</h3>
              <p> Online <br>
              Website: www.elerning.com	</p>
        </div> <!--End first column-->

        <div class="col-md-6 text-right"><!--Start 2nd column-->
          <h3 style="color:yellow;"> Admissions Office </h3>
            <p>ONLINE  Ph: 88000000 </p>	
        </div>  <!--End 2nd column-->
      </div><!--End first Row-->
  

        <div class="row">  <!--Start 2nd row-->
            <div class="col-md-4"> <!--Start first column-->
                <span class="pr-2">Follow Us : </span>
                    <a href="#" targe="_blank" class="pr-2 fi-color" style="color:yellow;"><i class="fab fa-facebook-f"></i></a>	
                    <a href="#" targe="_blank" class="pr-2 fi-color" style="color:yellow;"><i class="fab fa-twitter"></i></a>	
                    <a href="#" targe="_blank" class="pr-2 fi-color" style="color:yellow;"><i class="fab fa-youtube"></i></a>	
                    <a href="#" targe="_blank" class="pr-2 fi-color" style="color:yellow;"><i class="fab fa-instagram" style="color:yellow;"></i></a>	
            </div> <!--End first column-->

            <div class="col-md-3 text-center"><!--Start center column-->
                
                    <blockquote>
                    <p><span class="text-dnager">© Copyright . All rights reserved.</span></p>
                    </blockquote>
                
            </div><!--End center column-->

            <div class="col-md-4 text-right"><!--Start 2nd column-->
                <small>Designed by : Himanshu &copy;2020</small>
                <small> <a href="admin/adminlogin.php">Admin Login </a></small>
            </div><!--End 2nd column-->
            
        </div>  <!--End 2nd Row-->
     
    </div> <!--End first contener--> 
</div><!--End contener-->


</footer>
</section>    <!--End Footer -->	





 <!-- Start Students Registration Modal -->
<!-- Button trigger modal -->

<div class="container">
 
  <!-- Button to Open the Modal -->
 
  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Student Registration Form</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
  <!-- Start Registration Modal body -->
  <div class="modal-body">

        <!-- start form for signup -->
        <form action="" class="needs-validation" novalidate>
          <div class="form-group">
            <label for="stuname">Student name</label>
            <input type="text" class="form-control" id="stuname" placeholder="Enter username" name="stuname" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <div class="form-group">
            <label for="stuemail">Student Email</label>
            <input type="email" class="form-control" id="stuemail" placeholder="Enter username" name="stuemial" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <div class="form-group">
            <label for="pwd">New Password:</label>
            <input type="password" class="form-control" id="stupass" placeholder="Enter password" name="stupass" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <div class="form-group form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" name="remember" required> I agree on blabla.
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Check this checkbox to continue.</div>
            </label>
          </div>
         <button type="submit" class="btn btn-primary">signup</button>
      </form>
  <!-- End form for signup -->
  
  </div>     
  <!-- End Registration Modal footer -->
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>   
        
      </div>
    </div>
  </div>
  
</div>

 <!-- End Students Registration Modal -->

<!-- Start Students Registration Modal -->
<!-- Button trigger modal -->

<div class="container">
 
  <!-- Button to Open the Modal -->
 
  <!-- The Modal -->
  <div class="modal" id="loginModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Student Login Form</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
  <!-- Start Login Modal body -->
  <div class="modal-body">

        <!-- start form for Login -->
        <form action="" class="needs-validation" novalidate id="stuLogForm">
          <div class="form-group">
            <label for="stuname">Student name</label>
            <input type="text" class="form-control" id="stulogname" placeholder="Enter username" name="stulogname" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <div class="form-group">
            <label for="stulogemail">Student Email</label>
            <input type="email" class="form-control" id="stulogemail" placeholder="Enter username" name="stulogemial" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <div class="form-group">
            <label for="pwd">New Password:</label>
            <input type="password" class="form-control" id="stulogpass" placeholder="Enter password" name="stulogpass" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <div class="form-group form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" name="remember" required> I agree on blabla.
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Check this checkbox to continue.</div>
            </label>
          </div>
         <button type="submit" class="btn btn-primary" id="stuLoginBtn">login</button>
      </form>
  <!-- End form for signup -->
  
  </div>     
  <!-- End Login Modal footer -->
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>   
        
      </div>
    </div>
  </div>
  
</div>

 <!-- End Students Login Modal -->

<!-- </script> -->
<!-- script for Text copy and paste not working -->
<!-- <script src='demo-to-prevent-copy-paste-on-blogger_files/googleapis.js'></script> <script type='text/javascript'> if (typeof document.onselectstart!="undefined" ) { document.onselectstart=new Function ("return false" ); } else { document.onmousedown=new Function ("return false" ); document.onmouseup=new Function ("return true" ); } </script> -->
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



