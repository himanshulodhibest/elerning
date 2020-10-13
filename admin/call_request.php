<?php
define  ('TITLE', 'Call Resquest');
define('PAGE', 'Call request');
include ('includes/header.php');
include('../db_connection.php');
session_start();
if(isset($_SESSION['is_adminlogin']))  { // yeha ek bagg h
    $aEmail = $_SESSION['aEmail'];
    } else{
    echo "<script> location.href='adminlogin.php'</script>"; 
    } 
 ?>

<!--Start 2nd column  -->
<!--Start Dashboard area 2nd column-->
<div class="col-sm-8 mb-5">
<?php
$sql = "SELECT request_id, r_name, r_class, r_email, r_phone, r_message, r_date FROM call_request_tb"  ;
$result = $conn->query($sql);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      echo '<div class="card mt-5 mx-3">';
      echo '<div class="card-header">';
        echo 'Request ID :' .$row['request_id']; 
      echo '</div>'; 
      echo '<div class="card-body">'; 
        echo '<h5 class="card-title"> <strong> Requester Name : </strong> ' .$row['r_name'];
        echo '</h5>';
       echo '<p class="card-text"> <b> Requester Class : </b>' .$row['r_class'];
        echo '</p>';
        echo '<p class="card-text"> <b> Requester Email : </b> ' .$row['r_email'];
        echo '</p>';
        echo '<p class="card-text"> <b> Requester Phone No. : </b> ' .$row['r_phone'];
        echo '</p>';
        echo '<p class="card-text"> <b> Requester message : </b> ' .$row['r_message'];
        echo '</p>';
        echo '<p class="card-text"> <b> Request Date : </b> ' .$row['r_date'];
        echo '</p>';
        
        echo '<div class="float-right">';
            echo '<form action="" method="POST">';
            echo '<input type="hidden" name="id" value='.$row["request_id"].'>';
                echo '<input type="submit" class = "btn btn-danger mr-3" value ="View" name="view">';
                echo '<input type="submit" class = "btn btn-secondary" value ="Close" name="close">';
            echo '</form>';
        echo '</div>';     
      echo '</div>';         
      echo '</div>';      

    }
}
?>
<?php
if(isset($_REQUEST['close'])){  
    $sql = "DELETE FROM call_request_tb WHERE request_id = {$_REQUEST['id']}"; //delete data from Database
    if($conn->query($sql) == TRUE){
        echo '<meta http-equiv="refresh" content ="0;URL=?closed"/>';
    }else{
        echo "unable to Delete";
    } 
}
?>
 </div> <!--End 2nd column -->














</div>  <!-- End Row 1st Column    -->
</div> <!-- End Contaner -->
<?php
include("includes/footer.php");
?>