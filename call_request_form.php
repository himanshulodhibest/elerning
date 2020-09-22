<?php
// include('db_connection.php');
// if(isset($_REQUEST['submit'])){
    
//     $rname=mysqli_real_escape_string($conn, trim($_REQUEST['name']));
    
//     $rclass=$_REQUEST['class'];
//     $remail=mysqli_real_escape_string($conn, $_REQUEST['email']);
//     $rmobile=mysqli_real_escape_string($conn, trim($_REQUEST['mobile']));
//     $rmessage=mysqli_real_escape_string($conn, trim($_REQUEST['message']));
    
//         // $p_lan = strlen($rmobile ===10);
//         // $p_lan = array("options"=>array("min_range"=>20, "max_range"=>30));

//     if(($_REQUEST['name'] == "") || ($_REQUEST['class'] == "") || ($_REQUEST['email'] == "") || ($_REQUEST['mobile'] == "") ||($_REQUEST['message'] == "") )
//     {
//         $msg = '<div class="alert alert-warning mt-2">Please Fill All Fields</div>';
//     }
    
//     if(!$rname = filter_var($rname, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH)){
//         $msg = '<div class="alert alert-warning mt-2">INPUT Vaild Name</div>';
//     }
//     if (!preg_match("/^[a-zA-Z ]*$/",$rname)) {
//         echo "<script>location.href='error.php';</script>";
//       }
    
//     if(!$rmessage = filter_var($rmessage, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH)){
//         $msg = '<div class="alert alert-warning mt-2">Please INPUT Message</div>';
//     }
//     if (!preg_match("/^[a-zA-Z ]*$/",$rmessage)) {
//         $msg = "Only letters and white space allowed";
//       }

//       if (!preg_match("/^[0-9]{10}+$/",$rmobile)) {
//         $msg = '<div class="alert alert-warning mt-2">only 10 Number allowed</div>';
//     }
    
    
//         else{
            
//         $sql = "INSERT INTO call_request_tb(r_name, r_class, r_email, r_phone, r_message) VALUE ('$rname', '$rclass', '$remail', '$rmobile', '$rmessage')";
//         if($conn->query($sql) == TRUE){
//             $msg = '<div class = "alert alert-success mt-2" role="alert">Request Send Succefully</div>';	
//         } else {
//             $msg ='<div class = "alert alert-danger mt-2" role="alert"> "Unable to Create Account"</div>';	
//         }
//     }
// }

?>


<div class="col-sm">   <!--Start 3st column-->
         
         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="shadow-lg p-4" id="Call_Back">
             <h3 class="text-center text-danger">Request Call me Back</h3> 
           <input type="text" class="form-control" name="name" placeholder="Enter Your Name" autocomplete="off"><br>
           <!-- <input type="text" class="form-control" name="class" placeholder="Enter Your Class"><br> -->
          
        
                <select name="class" class="custom-select mb-3">
                <option selected>Choose in Present Class</option>
                <option value="VI">Class - VI</option>
                <option value="VII">Class - VII</option>
                <option value="VIII">Class - VIII</option>
                <option value="IX">Class - IX</option>
                <option value="X">Class - X</option>
                <option value="XI">Class - XI</option>
                <option value="XII">Class - XII</option>
                <option value="XII">Class - XII-PASS</option>
                </select>
                      
        
           <!-- <label for="Class" style="width:200px;">Choose Present in Class</label></br>
           <select id="class" style="width:200px;" class="block">
            <option value="VI">Class - VI</option>
            <option value="VII">Class - VII</option>
            <option value="VIII">Class - VIII</option>
            <option value="IX">Class - IX</option>
            <option value="X">Class - X</option>
            <option value="XI">Class - XI</option>
            <option value="XII">Class - XII</option>
            <option value="XII">Class - XII-PASS</option>
            </select> </br></br> -->
           <input type="email" class="form-control" name="email" placeholder="Enter Your E-mail id" autocomplete="off"><br>
           <input type="text" class="form-control" name="mobile" placeholder="Enter Your Phone Number" onkeypress="isInputNumber(event)"><br>
           <textarea class="form-control" name="message" maxlength="2000" cols="80" rows="8" placeholder="How Can Help You?" autocomplete="off"> </textarea><br>
           <input type="submit" class="btn btn-primary" value="submit" name="submit"> <br> <br>
           
           <?php if(isset($msg)){echo $msg;}	?>
           </form>
         </div>	<!-- End 3rd column-->





