<!DOCTYPE html>

<?php
include 'connection_db.php';
session_start();
$username = $_SESSION["a_username_session"];
$password  = $_SESSION["a_password_session"];


if ($username==""){
	header("Location:login_admin.php");
	
	
}
?>


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

           

        </div>

           <div class="card">
            <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#profile" data-toggle="pill" class="nav-link active"><i class="icon-user"></i> <span class="hidden-xs">Create Teacher</span></a>
                </li>
               
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"><i class="icon-note"></i> <span class="hidden-xs">Create Student</span></a>
                </li>
            </ul>
            <div class="tab-content p-3">
                <div class="tab-pane active" id="profile">
                    <h5 class="mb-3">User Profile</h5>
                     <form action="<?php $_SERVER['PHP_SELF']; ?>" method ="POST" enctype="multipart/form-data">
					 
					 <?php
							   //query
								if(isset($_POST['submit'])){
									$dup =0;
									$roll = $_POST['roll_digits'];
									$nos_students_to_create = $_POST['nos_students_to_create'];
									$roll_start = $roll;
										for ($i=0;$i<$nos_students_to_create;$i++){
										$sql = "insert into student_tb (rollno,password,profile_img) values('$roll','$roll','default_profile.png')";
										if ($conn->query($sql) === TRUE) {
										$roll++;
										} 
										$str = $conn->error;
										$error ="/Duplicate entry/i";
										$duplicate = preg_match($error,$str) ;
										 if ($duplicate==1)
											{
												$dup++;
												$roll++;
											}
										}
										if ($dup > 0){
										echo "<div class='alert alert-danger'><center>Roll numbers from $roll_start till $roll Created duplicate entries were skipped </div>";
										}else{
											$roll--;
										echo "<div class='alert alert-danger'><center>Roll numbers from $roll_start till $roll Created </div>";	
										
										}	
								}					
										
											/*	$result = mysqli_query($conn, $sql) or die("Query Failed.");
										$roll++;
										}
										$roll--;
									echo "<div class='alert alert-danger'>Students till roll no $roll Created </div>";
								*/
								if(isset($_POST['submit2'])){
										
										$fname  =$_POST['fname'];
										$fname = ucfirst($fname);
										$lname  =$_POST['lname'];
										$lname = ucfirst($lname);
										$address  =$_POST['address'];
										$address = strtoupper($address);
										$email  =$_POST['email'];
										$email  =strtolower($email);
										$id  =$_POST['ID'];
										$id  =strtoupper($id);
										$department  =$_POST['department'];
										$qualification  =$_POST['qualification'];
										$category  =$_POST['category'];
										$category  = ucfirst($category);
										$date  =$_POST['date'];
										$dob  =$_POST['dob'];
										$designation  =$_POST['designation'];
										$designation = ucfirst($designation);
										$phone  =$_POST['phone'];
										$blood_group  =$_POST['blood_group'];
										$blood_group  =strtoupper($blood_group);
										$gender  =$_POST['gender'];
										$t_password  =$_POST['t_password'];
										$confirm_password  =$_POST['confirm_password'];
										$filename = $_FILES['profile_img']['name'];
										$filename = $id.".png";
										$tempname = $_FILES['profile_img']['tmp_name'];   
										$folder = "assets/images/profile_img/teacher/".$filename;
										
										//file_put_contents("rs.txt",$filename."==>".$tempname."-->".$folder);
											
											
										$sql = "insert into teacher_tb 
										(email,first_name,last_name,t_password,c_password,address,teacher_id,phone_number,category,department,qualification,join_date,dob,designation,blood_group,gender,profile_img,flag) values
										('$email','$fname','$lname','$t_password','$confirm_password','$address','$id','$phone','$category','$department','$qualification','$date','$dob','$designation','$blood_group','$gender','$filename',1)";
																				
										if($email_verified=preg_match("/[a-zA-Z0-9.-_]+\@[a-zA-Z0-9]+\.[a-zA-Z.]/",$email) != 1){
										echo "<div class='alert alert-danger'><center>Inavalid Email </div>";	
										}else if (strlen($phone) != 10 || $phone == "1111111111" || $phone == "2222222222" || $phone == "3333333333" || $phone == "5555555555" || $phone == "4444444444"|| $phone == "6666666666"
										|| $phone == "7777777777" || $phone == "8888888888" || $phone == "9999999999" || $phone == "0000000000" || $phone == "1234567890"){
											echo "<div class='alert alert-danger'><center>incorrect phone number </div>";
										}else if ($t_password != $confirm_password){
											echo "<div class='alert alert-danger'><center>Entered Password does not match </div>";
										}
										else{
										if ($conn->query($sql) === TRUE) {
											$tempname = $_FILES['profile_img']['tmp_name'];   
												$folder = "assets/images/profile_img/teacher/".$filename;
												 // Now let's move the uploaded image into the folder: image	
													if (move_uploaded_file($tempname, $folder))  {
															$msg = "Image uploaded successfully";
													}else{
															$msg = "Failed to upload image";
													}
												echo "<div class='alert alert-danger'><center>Teacher created sucessfully </div>";
												} 
												
											
												$str = $conn->error;
												$error ="/'PRIMARY'/i";
												$duplicate = preg_match($error,$str) ;
												if($duplicate==1){
													echo "<div class='alert alert-danger'><center>Teacher already exists with that Teacher ID</div>";
												}
										
										}	
									}
										
										
								if(isset($_POST['remove'])){
								
									
									$sql = "SELECT count(*) from student_tb";
										$result = mysqli_query($conn, $sql) or die("Query Failed.");
										   if(mysqli_num_rows($result) > 0){

												while($row = mysqli_fetch_assoc($result)){
												 $old_count =  $row['count(*)'];
												}

											}
									
										$sql = "delete from student_tb where flag = '' ";
									if ($conn->query($sql) === TRUE) {
										$count_student = 0;
										$sql = "SELECT count(*) from student_tb";
																$result = mysqli_query($conn, $sql) or die("Query Failed.");
																   if(mysqli_num_rows($result) > 0){

																		while($row = mysqli_fetch_assoc($result)){
																		 $count_student =  $row['count(*)'];
																		}
																	}
														$deleted_students = $old_count-$count_student;
														
																	echo "<div class='alert alert-danger'><center>  $deleted_students unused Students were removed</div>";
									}else{
									    echo "error";	
									}
									
								}
					
							
						
									
               ?>
					 
					 
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">First Name</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" placeholder="First Name" name = "fname" required>
                            </div>
                        </div>
                               <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Last Name</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" placeholder="Last Name" name = "lname" required>
                            </div>
                        </div>
                                                <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Address</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="" placeholder="Street" name = "address" required>
                            </div>
                        </div>                                                                      
                        
                      
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="email" placeholder="example@example.com" name = "email" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Profile Photo</label>
                            <div class="col-lg-9">
                                <input type="file" name="profile_img" id="profile_img">
                            </div> 
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">ID</label>
                            <div class="col-lg-9">
                                <input class="form-control" type = "text" value="" placeholder="Eg CP2345" name = "ID" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Category</label>
                            <input type="radio" id="male" name="category" value="Department" required>&nbsp;&nbsp;&nbsp;
							<label>Department</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="radio" id="female" name="category" value="Office">&nbsp;&nbsp;&nbsp;
							<label>Office</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<br><input type="radio" id="other" name="category" value="Library">&nbsp;&nbsp;&nbsp;
							<label>Library</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
						
						<div class="form-group row">
                           <label class="col-lg-3 col-form-label form-control-label">Department</label>
								<input type="radio" id="male" name="department" value="Computer" required>&nbsp;&nbsp;	
							<label>Computer</label>&nbsp;&nbsp;&nbsp;&nbsp; 
								<input type="radio" id="female" name="department" value="Mechanical">&nbsp;&nbsp;
							<label>Mechanical</label> &nbsp;&nbsp;&nbsp;&nbsp;
								<br><input type="radio" id="other" name="department" value="Civil">&nbsp;&nbsp;
							<label>Civil</label>&nbsp;&nbsp;&nbsp;&nbsp;
								<br><input type="radio" id="other" name="department" value="ENTC">&nbsp;&nbsp;
							<label>ENTC</label>&nbsp;&nbsp;&nbsp;&nbsp;
								<br><input type="radio" id="other" name="department" value="Electrical">&nbsp;&nbsp;&nbsp;
							<label>Electrical</label>&nbsp;&nbsp;&nbsp;&nbsp;
								<br><input type="radio" id="other" name="department" value="Science">&nbsp;&nbsp;
							<label>Science</label>&nbsp;&nbsp;&nbsp;
								<br><input type="radio" id="other" name="department" value="Office">&nbsp;&nbsp;
							<label>Office</label>&nbsp;&nbsp;&nbsp;
							<br><input type="radio" id="other" name="department" value="Library">&nbsp;&nbsp;
							<label>Library</label>
						</div>
							
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Qualification</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="" placeholder="Qualification" name = "qualification" required>
                            </div>
                        </div>
						<div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Join date</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="date" value="" placeholder="DD/MM/YYYY" name = "date" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">DOB</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="date" value="" placeholder="DOB" name = "dob" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Designation</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="" placeholder="Designation" name = "designation" required> 
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Phone</label>
                            <div class="col-lg-9">
                                <input class="form-control" maxlength="10" type="number"  value="" placeholder="Phone Number" name = "phone" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Blood group</label>
                            <div class="col-lg-9">
                                
								<input class="form-control" type="text" value="" placeholder="Blood group" name = "blood_group" required>
                            </div>
                        </div>
                        <div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Gender</label>
                            <input type="radio" id="male" name="gender" value="Male" required>&nbsp;&nbsp;&nbsp;
							<label>Male</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="radio" id="female" name="gender" value="Female">&nbsp;&nbsp;&nbsp;
							<label> Female</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<br><input type="radio" id="other" name="gender" value="Other">&nbsp;&nbsp;&nbsp;
							<label>  Other</label>
                        </div>  
						<div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Password</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="password" maxlength="25" placeholder="Password" name = "t_password" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Confirm password</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="password" maxlength="25" placeholder="confirm password" name = "confirm_password" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <input type="reset" class="btn btn-secondary" value="Cancel">
                                <button type="submit" value = "submit2" name="submit2" class="btn btn-primary">Create Teacher</button>
                            </div>
                        </div>
                    </form>
                    <!--/row-->
                </div>
                
                <div class="tab-pane" id="edit">
				
				
				
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method ="POST">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Roll Number</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="number" placeholder="Enter First Roll Number" name="roll_digits" required>
                            </div>
                        </div>
						<div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Count</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="number" placeholder="Enter number of students to be created" name="nos_students_to_create" required>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <input type="reset" class="btn btn-secondary" value="Cancel">
								 <button type="submit" value = "submit" name="submit" class="btn btn-primary">Create Students</button>
                            </div>
                        </div>
						
						
						
                    </form>
					 <form action="<?php $_SERVER['PHP_SELF']; ?>" method ="POST">
					<button type="submit" value = "remove" name="remove" class="btn btn-primary" style="float: right;" ><i class="zmdi zmdi-chart-donut text-success"></i>Clean up</button>
					  </form>
                </div>
            </div>
        </div>
      </div>
      </div>
        
    </div>

  <!--start overlay-->
      <div class="overlay toggle-menu"></div>
    <!--end overlay-->
  
    </div>
    <!-- End container-fluid-->
   </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
  
  <!--Start footer--><!--

  <footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2021 The Base
        </div>
      </div>
    </footer>-->
    
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
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  
</body>
</html>
