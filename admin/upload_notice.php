

<?php
define  ('TITLE', 'Upload Files');
define('PAGE', 'Upload Files');
include ('includes/header.php');

session_start();
if(isset($_SESSION['is_adminlogin']))  { // yeha ek bagg h
    $aEmail = $_SESSION['aEmail'];
    } else{
    echo "<script> location.href='adminlogin.php'</script>"; 
    }
?>
<?php include 'filesLogic.php';?>

<div class="col col-sm-8 mt-4 text-center"> </br>
        <form action="" method="post" enctype="multipart/form-data" >
          <h3 class="text-info">Please Upload Only PDF File</h3></br>
          <span class="text-danger">Result | Test Schedule | FPMT Schedule | Answer Key | ...  </span> </br></br>
          <input type="file" name="myfile">
          <button class="btn btn-info" type="submit" name="save">Upload File</button>
          <?php if(isset($msg)){echo $msg;}	?>
        </form>
      
 </br>  
 </br>  
 
 


 <div class="table text-center mx-4">
 <table width="90%" border="1">
    <tr>
    <th colspan="5" class="bg-info text-white">Notice / FPMT Schedule / Results / Answer Key / FPMT Papers <label></label></th>
    </tr>
    <tr class="text-success">
    <td> <strong>id</strong></td>
    <td> <strong>File Name</strong></td>
    <!-- <td>File Type</td> -->
    <!-- <td>File Size(KB)</td> -->
    <td> <strong>View Files</strong></td>
    <td> <strong>Date</strong></td>
    <td> <strong>Delete</strong></td>
    </tr>
    
    <?php // show data
    $sql = "SELECT * from upload_pdf_file";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
    ?>
        <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <!-- <td><?php echo $row['type']; ?></td> -->
        <!-- <td><?php echo $row['size']; ?></td> -->
        <td> <button class="btn btn-warning" name="view" value="View" type="submit"> <a href="uploadfiles/<?php echo $row['name']; ?>" target="_blank" style="color:#2c87f0;"><i class="far fa-eye"></i> </a> </button></td>
        <td><?php echo $row['uploaded_on']; ?></td>
       
        <!-- <td> <button class="btn btn-secondary" name="close" value="close"><i class="far fa-trash-alt"></i>    </button></td> -->

        <!-- <td><input type="submit" class = "btn btn-secondary" value ="Delete" name="close"> </td> -->
        <td> <button class="btn btn-secondary" name="delete" value="Delete" type="submit"> <a href="delete.php?id=<?php echo $row['id']; ?>" target="_blank" style="color:white;"><i class="far fa-trash-alt"></i> </a> </button></td>
        
        <!-- <td><input type="submit" class = "btn btn-secondary" value ="Close" name="close"></td> -->
        
        </tr>
        <?php
 }
 
}

 ?>


    </table>
    </div>
</div>





</div>  <!-- End Row 1st Column    -->
</div> <!-- End Contaner -->
<?php
include("includes/footer.php");
?>