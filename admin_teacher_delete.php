<?php 
include 'connection_db.php';
session_start();
$username = $_SESSION["a_username_session"];
$password = $_SESSION["a_password_session"];
if ($username==""){
	header("Location:login_admin.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>The Base - Admin</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/cwit_logo.ico" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme1">
 
<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="index.php">
       <img src="assets/images/cwit_logo.png" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">Admin Login</h5>
     </a>
   </div>
   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">MAIN NAVIGATION</li>
    <li>
        <a href="admin_dashboard.php">
          <i class="zmdi zmdi-view-dashboard"></i>  <span>Dashboard</span>
        </a>
      </li>
    
      <li>
        <a href="admin_stud.php">
          <i class="zmdi zmdi-brush"></i> <span>Student Info</span>
        </a>
      </li>

    
      <li>
        <a href="admin_create_teacher_student.php">
         <i  class="zmdi zmdi-account-box-mail"></i> <span>Create Teacher/Student</span>
        </a>
      </li>

   
      <li>
        <a href="admin_teacher_delete.php">
          <i class="zmdi zmdi-block"></i> <span>Manage Teacher</span>
        </a>
      </li>

        
      <li>
        <a href="login_admin.php">
          <i class="zmdi zmdi-lock"></i> <span>Logout</span>
        </a>
      </li>

       
     
    </ul>
   
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
   
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
  
   
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="assets\images\profile_img\admin_profile.png" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="assets\images\profile_img\admin_profile.png" alt="user avatar"></div>
            <div class="media-body">
         <h6 class="mt-2 user-title"><?php echo"$username"; ?></h6></a>
            
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <a href="admin_change_password.php"> <li class="dropdown-item"><i class="zmdi zmdi-brush"></i>&nbsp;&nbsp;&nbsp;Change Password</li>
        <li class="dropdown-divider"></li>
    <a href="login_admin.php">   
     <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
     <a>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->


<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

  <!--Start Dashboard Content-->


        

         <div class="card">
            <div class="card-body">
              <h5 class="card-title">Active Teacher</h5>
               
			  <div class="table-responsive">
			  <table class="table">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col"><center>#</th>
                    <th scope="col"><center>First</th>
                    <th scope="col"><center>Last</th>
                    <th scope="col"><center>Gender</th>
                    <th scope="col"><center>Address</th>
                    <th scope="col"><center>Faculty Type</th>
                    <th scope="col"><center>Department</th>
                    <th scope="col"><center>qualification</th>
                    <th scope="col"><center>Teacher ID</th>
                     <th scope="col"><center>Phone NO</th>
                      <th scope="col"><center>Email ID </th>
                      <th scope="col"><center>Join Date </th>
                      <th scope="col"><center>DOB </th>
                      <th scope="col"><center>Designation</th>
                      <th scope="col"><center>Blood Group</th>
                      <th scope="col"><center>Delete</th>
                      
                  </tr>
                </thead>
                <tbody>
					<?php 
					
						$sql = "select * from teacher_tb where flag = 1 order by first_name asc";
										
											$count = 1;
											
											$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
											while($row = mysqli_fetch_assoc($result)) {
												echo "<tr><td> <center>".$count." </td><td><center>".$row['first_name']
												." </td><td><center>".$row['last_name']
												." </td><td><center>".$row['gender']
												." </td><td><center>".$row['address']
												." </td><td><center>".$row['category']
												." </td><td><center>".$row['department']
												." </td><td><center>".$row['qualification']
												." </td><td><center>".$row['teacher_id']
												." </td><td><center>".$row['phone_number']
												." </td><td><center>".$row['email']
												." </td><td><center>".$row['join_date']
												." </td><td><center>".$row['dob']
												." </td><td><center>".$row['designation']
												." </td><td><center>".$row['blood_group']
												." </td><td><center>"."<form action = 'admin_teacher_delete_query.php' method = 'POST' ><input type='hidden' value='$row[teacher_id]' name = 'teacher_id'>
												<button type ='submit' class='btn btn-primary' value='submit]'>Delete</button></form>" 
												."</a></tr></td>";
								
												$count++;
											
										} 
										$str = $conn->error;
										echo "$str";
										
										
							
										
					?>
					</tbody>
              </table>
            </div>
			</div> </div>
			<br><br><br>
			<!-- table 2 with flag 0  fror deleted teachers-->
			
           <div class="card">
            <div class="card-body">
              <h5 class="card-title">Unactive Teacher</h5>
               
			  <div class="table-responsive">
			  <table class="table">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col"><center>#</th>
                    <th scope="col"><center>First</th>
                    <th scope="col"><center>Last</th>
                    <th scope="col"><center>Gender</th>
                    <th scope="col"><center>Address</th>
                    <th scope="col"><center>Faculty Type</th>
                    <th scope="col"><center>Department</th>
                    <th scope="col"><center>qualification</th>
                    <th scope="col"><center>Teacher ID</th>
                     <th scope="col"><center>Phone NO</th>
                      <th scope="col"><center>Email ID </th>
                      <th scope="col"><center>Join Date </th>
                      <th scope="col"><center>DOB </th>
                      <th scope="col"><center>Designation</th>
                      <th scope="col"><center>Blood Group</th>
                      <th scope="col"><center>Delete</th>
                      
                  </tr>
                </thead>
                <tbody>
					<?php 
					
						$sql = "select * from teacher_tb where flag = 0 order by first_name asc";
										
											$count = 1;
											
											$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
											while($row = mysqli_fetch_assoc($result)) {
												echo "<tr><td> <center>".$count." </td><td><center>".$row['first_name']
												." </td><td><center>".$row['last_name']
												." </td><td><center>".$row['gender']
												." </td><td><center>".$row['address']
												." </td><td><center>".$row['category']
												." </td><td><center>".$row['department']
												." </td><td><center>".$row['qualification']
												." </td><td><center>".$row['teacher_id']
												." </td><td><center>".$row['phone_number']
												." </td><td><center>".$row['email']
												." </td><td><center>".$row['join_date']
												." </td><td><center>".$row['dob']
												." </td><td><center>".$row['designation']
												." </td><td><center>".$row['blood_group']
												." </td><td><center>"."<form action = 'admin_teacher_recover_query.php' method = 'POST' ><input type='hidden' value='$row[teacher_id]' name = 'teacher_id'>
												<button type ='submit' class='btn btn-primary' value='submit]'>Recover</button></form>" 
												."</a></tr></td>";
								
												$count++;
											
										} 
										$str = $conn->error;
										echo "$str";
										
										
							
										
					?>
					</tbody>
              </table>
            </div>
    
    

		 
			 
				
			  

	
      <!--End Dashboard Content-->
	  
	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->
		
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2021 The Base
        </div>
      </div>
    </footer>
	<!--End footer-->
	
  <!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
		<li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
   
  </div><!--End wrapper-->

  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
 <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  <!-- loader scripts -->
  <script src="assets/js/jquery.loading-indicator.js"></script>
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  <!-- Chart js -->
  
  <script src="assets/plugins/Chart.js/Chart.min.js"></script>
 
  <!-- Index js -->
  <script src="assets/js/index.js"></script>

  
</body>
</html>
	