<?php

include('../db_connection.php');
// include('upload_notice.php');

session_start();
if(isset($_SESSION['is_adminlogin']))  { // yeha ek bagg h
    $aEmail = $_SESSION['aEmail'];
    } else{
    echo "<script> location.href='adminlogin.php'</script>"; 
    }
?>



<?php
$id=$_GET['id'];
//   if(isset($_REQUEST['close'])){  

    //     echo "colse is set";
    // }else{
      // $msg = '<div class="alert alert-success mt-2">Unable to delte </div>';
      $sql = "DELETE FROM upload_pdf_file WHERE id=$id"; //delete data from Database
      if($conn->query($sql) == TRUE){
         header('location:upload_notice.php');
    } 
// }
?>

</div>  <!-- End Row 1st Column    -->
</div> <!-- End Contaner -->
<?php
include("includes/footer.php");
?>