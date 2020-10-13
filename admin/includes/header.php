<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style.css">
        <!-- font assome -->
        <link rel="stylesheet" href="../css/all.min.css">
    <title>Admin Area</title>
</head>
<body>
<!--Top Navbar -->
<nav class="navbar navbar-dark fixed-top bg-danger flex-md-nowrap p-0 shadow"><a class="navbar-brand col-sm-3 col-md-2 mr-0" href="dashboard.php">E-Learning</a></nav>


<!--Start Container Bar -->
<div class="container-fluid" style="margin-top: 20px">
    <div class="row"> <!--Start 1st Row -->
        <nav class="col-sm-2 bg-light sidebar py-5 d-print-none">
       <!--1st column Start -->
        <!--Start Side Bar -->
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                <li class="nav-item"><a class="nav-link" href="dashboard.php"><i class="fas fa-user" style='font-size:16px;color:red'></i> Dashboard</a></li>

                <li class="nav-item"><a class="nav-link" href="upload_tt.php"><i class="far fa-file-pdf" style='font-size:16px;color:red'></i> Upload Time Table</a></li>

                <li class="nav-item"><a class="nav-link" href="upload_notice.php"><i class="far fa-file-pdf" style='font-size:16px;color:red'></i> Upload Notices</a></li>

                <li class="nav-item"><a class="nav-link" href="upload_video.php"><i class="far fa-file-pdf" style='font-size:16px;color:red'></i> Upload Video</a></li>

                <li class="nav-item"><a class="nav-link" href="call_request.php"><i class="fas fa-phone-square-alt" style='font-size:16px;color:red'></i> Call Requests</a></li>

                <li class="nav-item"><a class="nav-link <?php if(PAGE == 'changepass'){echo 'active';} ?>" href="changepass.php"><i class="fas fa-key" style='font-size:16px;color:red'></i> Change Password</a></li>

                <li class="nav-item"><a class="nav-link" href="../logout.php"><i class="fas fa-sign-out-alt" style='font-size:16px;color:red'></i> Logout</a></li>

                </ul>   <!-- if(PAGE == 'requesterprofile'){echo 'active';} but active code not working --> 
            </div>
        </nav><!--1st column End Side Bar -->