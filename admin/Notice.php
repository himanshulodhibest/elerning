<?php
 include('../db_connection.php');
 include ('includes/header.php');
 ?>

  <div class="col col-sm-8 mt-4">
  <?php
$sql = "SELECT * from upload_pdf_file";
$result = $conn->query($sql);
if($result->num_rows > 0){
    echo '
    <table class="table"> 
       <thead> 
       <tr>
        <th scope = "col"> Links </th>
        </tr>
       </thead>
       <tbody>';
       while($row = $result->fetch_assoc()){
            $file = $row['name'];
    // echo '<tr>';
    // echo '<td>'.$file.'</td>';
    // echo '</tr>';
    
    // echo '<form action="" method="POST" class="d-inline">';
    // echo '<input type="hidden" name="id" value='.$file.'> <button class="btn btn-warning" name="view" value="View" type="submit"><i class="far fa-eye"></i> </button>';
    // echo '</form>';
   
        
    echo "<li><a target='_blank' href='uploadfiles/$file?id='><button>".$file."</button> </a></li>";
      
    }
    
       '</tbody>
    </table>
    
    ';
}


?>
  
  
  
  </div>

    
   



   


</div>  <!-- End Row 1st Column    -->
</div> <!-- End Contaner -->
<?php
include("includes/footer.php");
?>