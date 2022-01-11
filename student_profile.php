<!DOCTYPE html>
<?php
include 'connection_db.php';
session_start();

$rollno_session = $_SESSION["rollno_session"];

  if ($rollno_session==""){
    header("Location:index.php");
}
$profile_img ="";
$fname = "";
$lname = "";
$email = "";
$roll = "";
$mobile = "";
$address = "";
$dob = "";
$blood_group = "";
$nationality = "";
$caste = "";
$latest_marks = "";
$payment_pending = "";
$status = "";
$name_of_book = "";
$code_of_book = "";
$issue_date = "";
$return_date = "";
$comment = "";

 $sql = "SELECT * from student_tb where rollno = '$rollno_session'";
            $result = mysqli_query($conn, $sql) or die("Query Failed.");
                           if(mysqli_num_rows($result) > 0){

                                while($row = mysqli_fetch_assoc($result)){
                                	$profile_img = $row['profile_img'];
	                                $fname = $row['first_name'];
	                               
	                                $lname = $row['last_name'];
	                                
	                                $email = $row['email'];
	                                $roll = $row['rollno'];
									$mobile = $row['phone_no'];
									$address = $row['address'];
									$dob = $row['dob'];
									$blood_group = $row['blood_group'];
									$nationality = $row['nationality'];
									$caste = $row['caste'];
									
									$latest_marks = $row['latest_marks'];
									$payment_pending = $row['payment_pending'];
									$status = $row['status'];
									$name_of_book = $row['name_of_book'];
									$code_of_book = $row['code_of_book'];
									$issue_date = $row['issue_date'];
									$return_date = $row['return_date'];
									$comment = $row['comment'];

                                }

                              }

?>

<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>The Base - Student</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
 <link rel="icon" href="assets/images/cwit_logo.ico" type="image/x-icon">
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
   <style type="text/css">
  

    .profile-card-2 .card-img-block{
    float:left;
    width:100%;
    height:300px;
    
}
  
  
  </style>
</head>

<body class="bg-theme bg-theme1">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="index.php">
       <img src="assets/images/cwit_logo.png" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">Student Login </h5>
     </a>
   </div>
   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      <li>
        <a href="student_dashboard.php">
          <i class="zmdi zmdi-view-dashboard"></i>  <span>Dashboard</span>
        </a>
      </li>
      <li>
        <a href="student_profile.php">
         <i class="zmdi zmdi-face"></i> <span>Profile</span>
        </a>
      </li>
      <li>
        <a href="student_activities.php">
         <i class="zmdi zmdi-calendar-check"></i> <span>Activities</span>
        </a>
      </li>
      <li>
        <a href="student_curriculum.php">
         <i class="zmdi zmdi-assignment-o"></i> <span>Curriculum</span>
        </a>
      </li>
   
      <li>
        <a href="student_submit_document.php">
          <i class="zmdi zmdi-format-list-bulleted"></i> <span>Upload Documents</span>
        </a>
      </li>

      <li>
        <a href="index.php">
          <i class="zmdi zmdi-lock"></i> <span>Logout</span>
        </a>
      </li>


   
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
        <span class="user-profile"><img src="assets\images\documents\<?php echo "$profile_img"; ?>" height="20" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3"src="assets\images\documents\<?php echo "$profile_img"; ?>" height="20" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title"><?php echo"$fname $lname";?></h6>
            <p class="user-subtitle"><?php echo"$email";?></p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
		<a href ="student_profile.php">
        <li class="dropdown-item"><i class="zmdi zmdi-account-circle"></i> Profile</li>
        </a>
        <li class="dropdown-divider"></li>
		<a href="index.php">
        <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
		</a>	
	  </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

      <div class="row mt-3">
        <div class="col-lg-4">
		<img class="img-fluid" src="assets/images/bg.png"  alt="Card image cap">
           <div class="card profile-card-2">
            
			     <div class="card-body pt-5">
                <img src="assets\images\documents\<?php echo "$profile_img"; ?>"  alt="profile-image" class="profile"><br>
                <h5 class="card-title"><?php echo"$fname $lname";?></h5> 
                <h3 class="card-title">latest Percentage : <?php echo"$latest_marks";?></h3>
                <h3 class="card-title">Status : <?php echo"$status";?></h3>
                <h3 class="card-title">Comment : <?php echo"$comment";?></h3>
                
               
            </div>

            <div class="card-body border-top border-light">
                <h4 class="card-title">Library</h4><hr>
                 <div class="media align-items-center">
                   
                     <div class="media-body text-left ml-3">
                       <div class="progress-wrapper">
                         <p>Name of Book : <?php 
						 if($name_of_book == ""){
							echo"NONE";
						 }else{
							echo"$name_of_book";
						 }
						 ?></p><hr>
                         <p>Book code : <?php
						 if($code_of_book == ""){
							echo"NONE";
						 }else{
							echo"$code_of_book";
						 }
						 ?></p><hr>
                         <p>Issue Date :<?php 
						 if($issue_date == ""){
							echo"NONE";
						 }else{
						 echo"$issue_date";
						 }
						 ?></p><hr>
                         <p>Return Date : <?php
						 if($return_date == ""){
							echo"NONE";
						 }else{
						 echo"$return_date";
						 }
						 ?></p><hr>
                         <p>Payment pending : <?php 
						 if($payment_pending == ""){
							echo"NONE";
						 }else{
						 echo"$payment_pending";
						 }
						 ?></p><hr>
                          
                        </div>                   
                    </div>
                  </div>
          </div>
        </div>

        </div>

        <div class="col-lg-8">
           <div class="card">
            <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#profile" data-toggle="pill" class="nav-link active"><i class="icon-user"></i> <span class="hidden-xs">Profile</span></a>
                </li>
               
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"><i class="icon-note"></i> <span class="hidden-xs">Edit</span></a>
                </li>
            </ul>
            <div class="tab-content p-3">
                <div class="tab-pane active" id="profile">
                  
                    <form>
					 
					<?php
							   //query
								if(isset($_POST['submit'])){
								
										$fname_u = $_POST['fname'];
										$lname_u = $_POST['lname'];
										 $fname_u = ucfirst($fname_u);
										 $lname_u = ucfirst($lname_u);
										$address_u = $_POST['address'];
										$address_u =ucwords($address_u);
										$dob_u = $_POST['dob'];
										$blood_group_u = $_POST['blood_group'];
										$blood_group_u = strtoupper($blood_group_u);
										$nationality_u = $_POST['nationality'];
										$nationality_u = strtoupper($nationality_u);
										$caste_u = $_POST['caste'];
										$caste_u = strtoupper($caste_u);
										$email_u = $_POST['email'];
										$email_u = strtolower($email);
										$phone_no_u = $_POST['phone_no'];
										$password_u = $_POST['password'];
										$c_password_u = $_POST['c_password'];
										$email_u = $_POST['email'];
										
										
										
										
										
										// fname
										if ($fname == "" && $fname_u != "" ){
										$sql = " Update student_tb set first_name = '$fname_u' where rollno = '$roll' ";
												if ($conn->query($sql) === TRUE) {
												echo "<div class='alert alert-danger'><center>First Name Updated Successfully. Please refresh</div>";	
												}else{
												echo "error";
												}
										}
								
								
										// lname
										if ($lname == "" && $lname_u != "" ){
										$sql = " Update student_tb set last_name = '$lname_u' where rollno = '$roll' ";
												if ($conn->query($sql) === TRUE) {
												echo "<div class='alert alert-danger'><center>Last Name Updated Successfully. Please refresh</div>";	
												}else{
												echo "error";
												}	
										}
								
								
										// Address
										if ($address_u != "" ){
										$sql = " Update student_tb set address = '$address_u' where rollno = '$roll' ";
												if ($conn->query($sql) === TRUE) {
												echo "<div class='alert alert-danger'><center>Address Updated Successfully. Please refresh</div>";	
												
												}else{
												echo "error";
												}
										}
								
								
										// Date of birth
										if ($dob == "" && $dob_u != "" ){
										$sql = " Update student_tb set dob = '$dob_u' where rollno = '$roll' ";
												if ($conn->query($sql) === TRUE) {
												echo "<div class='alert alert-danger'><center>Date of Birth Updated Successfully. Please refresh</div>";	
												
												}else{
												echo "error";
												}
										}
								
								
										// blood group
										if ($blood_group_u != ""  && $blood_group ==""){
										$sql = " Update student_tb set blood_group = '$blood_group_u' where rollno = '$roll' ";
												if ($conn->query($sql) === TRUE) {
												echo "<div class='alert alert-danger'><center>Blood Group Updated Successfully. Please refresh</div>";	
												
												}else{
												echo "error";
												}
										}
								
										// email
										if ($email_u != ""){
										$sql = " Update student_tb set email = '$email_u' where rollno = '$roll' ";
												if ($conn->query($sql) === TRUE) {
												echo "<div class='alert alert-danger'><center>Email Updated Successfully. Please refresh</div>";	
												
												}else{
												echo "error";
												}
										}
								
								
										// nationality
										if ($nationality_u != ""  && $nationality ==""){
										$sql = " Update student_tb set nationality = '$nationality_u' where rollno = '$roll' ";
												if ($conn->query($sql) === TRUE) {
												echo "<div class='alert alert-danger'><center>Nationality Updated Successfully. Please refresh</div>";	
												
												}else{
												echo "error";
												}
										}
								
										// caste
										if ($caste_u != ""  && $caste ==""){
										$sql = " Update student_tb set caste = '$caste_u' where rollno = '$roll' ";
												if ($conn->query($sql) === TRUE) {
												echo "<div class='alert alert-danger'><center>Caste Updated Successfully. Please refresh</div>";	
												
												}else{
												echo "error";
												}
										}
								
								
										// Phone number
										if ($phone_no_u != ""){
											if (strlen($phone_no_u) != 10 || $phone_no_u == "1111111111" || $phone_no_u == "2222222222" || $phone_no_u == "3333333333" || $phone_no_u == "5555555555" || $phone_no_u == "4444444444"|| $phone_no_u == "6666666666"
											|| $phone_no_u == "7777777777" || $phone_no_u == "8888888888" || $phone_no_u == "9999999999" || $phone_no_u == "0000000000" || $phone_no_u == "1234567890" ){
											echo "<div class='alert alert-danger'><center>Please enter a Valid Phone Number</div>";	
											}else{
												$sql = " Update student_tb set phone_no = '$phone_no_u' where rollno = '$roll' ";
													if ($conn->query($sql) === TRUE) {
													echo "<div class='alert alert-danger'><center>Phone Number Updated Successfully. Please refresh</div>";	
													
													}else{
													echo "error";
													}
											}
										}
								
								
										// Password
										
										if ($password_u != ""){
											if ($password_u == $c_password_u && $password_u != "" && $c_password_u != ""){
											$sql = " Update student_tb set password = '$password_u' where rollno = '$roll' ";
													if ($conn->query($sql) === TRUE) {
													echo "<div class='alert alert-danger'><center>Password Updated Successfully. Please refresh</div>";	
													
													}else{
													echo "error";
													}
											}else{
												echo "<div class='alert alert-danger'><center>Confirm Pasword Does not Match</div>";	

											}
										}
								
								
								
										// Profile
										$profile_image_user = $_FILES['profile_img_u']['name'];
										$profile_image= $roll."_profile_img.png";
										$profile_image_temp = $_FILES['profile_img_u']['tmp_name'];   
										$profile_image_folder = "assets/images/documents/".$profile_image;
										
										if ($profile_image_user != ""){
											$sql = "update student_tb  
											set profile_img = '$profile_image' 
											where rollno = $roll " ;
											if ($conn->query($sql) === TRUE) {
													
												if($profile_image_user != ""){
												 // Now let's move the uploaded image into the folder: image	
												 
													if (move_uploaded_file($profile_image_temp, $profile_image_folder))  {
															
															$msg = "Profile Updated Succesfully";
														
													
													}else {
														$msg = "error";
													}
													echo "<div class='alert alert-danger'><center>$msg</div>";
												}
											}
										}
								
								
								
								
								
								}
															
					
					
					?>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"><b>Name</b></label>
                            <div class="col-lg-9">
                                 <label class="col-form-label"><?php echo"$fname $lname";?></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Roll Number</label>
                            <div class="col-lg-9">
                                <label class="col-form-label"><?php echo"$roll";?></label>
							</div>
                            

                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
                            <div class="col-lg-9">
                                <label><?php echo"$email";?></label>
                            </div>
                        </div>
                        

                         <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Phone Number</label>
                            <div class="col-lg-9">
                               <label>+91 <?php echo"$mobile";?></label>
                            </div>
                        </div>


                         <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Address</label>
                            <div class="col-lg-9">
                               <label><?php echo"$address";?></label>
                            </div>
                        </div>

                       
                        
                       
                          <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Date Of Birth</label>
                            <div class="col-lg-9">
                                <label class="col-form-label"><?php echo"$dob";?></label>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label >Blood Group </label>&nbsp;&nbsp;&nbsp;
                              <label class="col-form-label" ><?php echo"$blood_group";?></label>
                             
                            </div>
                          </div>
                           <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Nationality</label>
                            <div class="col-lg-9">
                                <label class="col-form-label"><?php echo"$nationality";?></label>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label >Caste </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <label class="col-form-label" ><?php echo"$caste";?></label>
                             
                            </div>
                          </div>
                        
                     
                    </form>
                    <!--/row-->
                </div>
               
                <div class="tab-pane" id="edit">
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method ="POST" enctype="multipart/form-data">
                       
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">First Name</label>
                            <div class="col-lg-9">
                               <input class="form-control" type="text" value="<?php if($fname != "") {echo "$fname";} ?>" placeholder="First name" name ="fname" >
                            </div>
                        </div>
						
						<div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Last Name</label>
                            <div class="col-lg-9">
                               <input class="form-control" type="Text" value="<?php if($lname != "") {echo "$lname";} ?>" placeholder="Last Name" name ="lname" >
                            </div>
                        </div>
						
						<div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Address</label>
                            <div class="col-lg-9">
                               <input class="form-control" type="text" placeholder="Address"  name ="address" >
                            </div>
                        </div>
						
						<div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Date of Birth</label>
                            <div class="col-lg-9">
                               <input class="form-control" type="date" placeholder="Date of birth" value="<?php if($dob != "") {echo "$dob";} ?>" name ="dob" >
                            </div>
                        </div>
						
						<div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Blood group</label>
                            <div class="col-lg-9">
                               <input class="form-control" type="text" placeholder="Blood Group" value="<?php if($blood_group != "") {echo "$blood_group";} ?>" name ="blood_group" >
                            </div>
                        </div>
						
						<div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Nationality</label>
                            <div class="col-lg-9">
                               <input class="form-control" type="text" placeholder="Nationality" value="<?php if($nationality != "") {echo "$nationality";} ?>" name ="nationality" >
                            </div>
                        </div>
						
						<div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Category</label>
                            <div class="col-lg-9">
                               <input class="form-control" type="text" placeholder="Category" value="<?php if($caste != "") {echo "$caste";} ?>" name ="caste" >
                            </div>
                        </div>
						
						
						
						<div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
                            <div class="col-lg-9">
                               <input class="form-control" type="email" placeholder="Email" name ="email" >
                            </div>
                        </div>
						
						
						
						
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Profile Photo</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="file" name = "profile_img_u">
                            </div>
                        </div>
                       
                      
                       
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Phone Number</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="number" maxlength="10" name ="phone_no" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">New Password</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="password" maxlength="25" placeholder="Password" name ="password" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Confirm Password</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="password"  maxlength="25" placeholder="Password" name ="c_password" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <input type="reset" class="btn btn-secondary" value="Cancel">
                                <button type="submit" value = "submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
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
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
	
</body>
</html>

