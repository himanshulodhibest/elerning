
<?php      
 define  ('TITLE', 'Upload Time Table');
 define('PAGE', 'Upload Video');
 include ('includes/header.php');
 include('../db_connection.php');
 session_start();
 if(isset($_SESSION['is_adminlogin']))  { // yeha ek bagg h
    // header("Location:($hostname)/admin/dashboard.php");  
    $aEmail = $_SESSION['aEmail'];
	 } else{
	 echo "<script> location.href='adminlogin.php'</script>"; 
     }
     
?>
 <?php
// connect to the database
if(isset($_FILES['myfile']))
{
$sql = "SELECT * FROM org_video";
$result = mysqli_query($conn, $sql);
$files = mysqli_fetch_all($result, MYSQLI_ASSOC);
// uploadfiles files
if (isset($_POST['save'])) { // if save button on the form is clicked

   
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'uploadfiles/v_upload/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploadfiles directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['mp4', 'avi', 'mov', '3gp', 'mpeg'])) {
        echo "You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['myfile']['size'] > 6000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
           $sql = "INSERT INTO org_video (name, size, views, uploaded_on) VALUES ('$filename', $size, 0, NOW())";
            if (mysqli_query($conn, $sql)) {
                $msg = '<div class="alert alert-success mt-2">File Uploaded successfully </div>';
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}
}else {
    $msg = '<div class="alert alert-info mt-2">Please select the file  </div>';
}
?>






<div class="col col-sm-8 mt-4 text-center"> </br>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  method="post" enctype="multipart/form-data" >
          <h3 class="text-info">VIDEO</h3></br>
          <input type="file" name="myfile"> 
          <button class="btn btn-info" type="submit" name="save">Upload VIDEO</button>
		  <?php if(isset($msg)){echo $msg;}	?>  
        </form>

      </div>
      




     











</div>  <!-- End Row 1st Column    -->
</div> <!-- End Contaner -->
<?php
include("includes/footer.php");
?>