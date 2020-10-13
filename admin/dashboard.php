<?php   
define  ('TITLE', 'Dashboard');
define('PAGE', 'Dashboard');
include("includes/header.php");   
include("../db_connection.php") ;
session_start();
if($_SESSION['is_adminlogin']){
    $aEmail = $_SESSION['aEmail']; // from session . Use for show User mail id .
 }else{
     echo "<script>location.href='adminlogin.php';</script>"; // use for redirect index page
 }
?>
<div class="contaner"> <!-- Start Contaner -->
  <div class="row"> <!-- Start Row -->
  
  
  
  </div> <!-- End Row -->
</div>  <!--End Contaner -->



<?php
include("includes/footer.php");
?>