
<?php

$db_host = "localhost";
$db_user = "root"; 
$db_password = "";
$db_name = "elerning_db";
$db_port = 3306;

// create connection
// connection bnane ke formate ... here is use mySquli object oryantied 

// try{

$conn = new mysqli($db_host, $db_user, $db_password, $db_name, $db_port);
// }
// catch(mysqliException $e){
//    echo "connection Failed";
// }
// cheking connection
// if ($conn->connect){
//    echo "connection OK";
// }else{
//    echo "connection field";
// }

if($conn->connect_error){
	die("Connection Failed");
}
/*
else{
echo " connecttion is OK . . Connect chek krne ley";	
}
*/
?>
	
	 <?php
       /*  
            $servername = "localhost:3306";
            $username = "root";
            $password = "";
            $dbname = "requesterlogin_tb";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            } 
 /*           $sql = "INSERT INTO tutorials_inf(name)VALUES ('".$_POST["name"]."')";

            if (mysqli_query($conn, $sql)) {
               echo "New record created successfully";
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $conn->close();
			*/
         
		 
      ?>