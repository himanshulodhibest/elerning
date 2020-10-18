<?php      
//  define  ('TITLE', 'Upload Time Table');
//  define('PAGE', 'Upload Video');
//  include ('header.php');
 include('db_connection.php');
?>
<div>
    <?php
     $fetchVideos = mysqli_query($conn, "SELECT name FROM org_video ORDER BY id_org DESC");
     while($row = mysqli_fetch_array($fetchVideos)){
       $location = 'admin/uploadfiles/v_upload/'. $row['name'];
      ?>
      <div class="col-md-4">
        <video id="myVideo"controls width='320px' height='200px' src="<?php echo $location; ?>"></video>
      </div>
          
    <?php }
     ?>
    </div>    
     <!-- <video playsinline autoplay muted loop src="admin/uploadfiles/v_upload/video1.mp4" controls width='320px' height='200px'>
    </video> -->