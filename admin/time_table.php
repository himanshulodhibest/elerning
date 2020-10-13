<?php
 include('../db_connection.php');
$sql = "SELECT name FROM time_table_db WHERE name='uploadfiles/TT.pdf' " ; // TABLE NAME M se "file_name" change with "name" only for cheking  where = []

$result = $conn->query($sql); 
if($result->num_rows ==1) ; // fetch only one file from database
$row = $result->fetch_assoc() ; 
$file = $row['name'];


?>

<?php
// where = ['uploadfiles/TT.pdf']
// echo "<img src='$file' height='100' width='100'/>"; code for showing image
// echo "<li><a target='_blank' href='tt.php?id='>'".$file."'</a></li>";

 ?>
 
<div>

<table>
<td>View Time table</td>
<tr>
<td> <a href="<?php echo $file; ?>"><button>View time table</button> </a>   </td> 

<!--for showing files -->
</tr>
</table>


</div>