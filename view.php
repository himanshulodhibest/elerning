<?php      
 define  ('TITLE', 'Upload Time Table');
 define('PAGE', 'Upload Video');
//  include ('header.php');
 include('db_connection.php');
    
?>

<div class="container">
  <h2>Card Image</h2>
  <p>Image at the top (card-img-top):</p>
  <?php
    $sql = "SELECT * from org_video";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
    
     $filepath = $row['name']; 
     echo "<div >";
       echo "<video src='".$filepath."' controls width='320px' height='200px' >";
       echo "</div>";
    }
}
?>


  
    <div class="card-body">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </div>
</div>

<script>
var vid = document.getElementById("myVideo");

function getPlaySpeed() { 
  alert(vid.playbackRate);
} 

function setPlaySpeed() { 
  vid.playbackRate = 0.5;
} 
</script> 