<!DOCTYPE html>

<?php 		
			include 'connection_db.php'; 
			session_start();
      $t_id = $_SESSION["t_id_session"];

$profile= "";

$dob = "";
$fname = "";
$lname = "";
$email = "";
$designation = "";
$qualification = "";
$phone = "";
$join_date = "";
$teacher_id = "";
$department = "";
$address = "";
$blood_group = "";
$t_email ="";
$t_password ="";
$t_cpassword ="";
 $sql = "SELECT * from teacher_tb where teacher_id = '$t_id'";
            $result = mysqli_query($conn, $sql) or die("Query Failed.");
                           if(mysqli_num_rows($result) > 0){

                                while($row = mysqli_fetch_assoc($result)){
                                 $fname = $row['first_name'];
                                 $lname = $row['last_name'];
                                 $email = $row['email'];
                                 $dob = $row['dob'];
                                 $designation = $row['designation'];
                                 $qualification =  $row['qualification'];
                                 $phone = $row['phone_number']; 
                                 $join_date = $row['join_date'];
                                 $teacher_id = $row['teacher_id'];
                                 $department = $row['department'];
                                 $address = $row['address'];
                                 $blood_group = $row['blood_group'];
                                 $profile = $row['profile_img'];
                                
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
  <title>The Base -Teacher</title>
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
       <h5 class="logo-text">Teacher Login</h5>
     </a>
   </div>
    <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header"><h5>MAIN NAVIGATION (OFFICE STAFF)</h5></li>
    <li>
        <a href="teacher_office_dashboard.php">
          <i class="zmdi zmdi-view-dashboard"></i>  <span>Dashboard</span>
        </a>
      </li>
      <li>
        <a href="teacher_office_profile.php">
         <i class="zmdi zmdi-face"></i> <span>Profile</span>
        </a>
      </li>

   
      <li>
        <a href="teacher_office_stud.php">
          <i class="zmdi zmdi-format-list-bulleted"></i> <span>Student info</span>
        </a>
      </li>

      <li>
        <a href="teacher_office_verify_documents.php">
          <i class="zmdi zmdi-grid"></i> <span>Verify Documents</span>
        </a>
      </li>

        
      <li>
        <a href="login_teacher.php">
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
        <span class="user-profile"><img src="assets\images\profile_img\teacher\<?php echo"$profile";?>" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="assets\images\profile_img\teacher\<?php echo"$profile";?>" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title"><?php echo"$fname $lname";?></h6>
            <p class="user-subtitle"><?php echo"$email";?></p>
            </div>
           </div>
          </a>
        </li>
           <li class="dropdown-divider"></li>
        <a href="teacher_dept_profile.php"> <li class="dropdown-item"><i class="zmdi zmdi-account-circle"></i> Profile</li>
        
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
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
           <div class="card profile-card-2">
            <div class="card-img-block">
			
			
                <img class="img-fluid" src="assets/images/bg.png" alt="Card image cap">
				
				
				
            </div>
			
            <div class="card-body pt-5">
            <img src="assets\images\profile_img\teacher\<?php echo"$profile";?>"  alt="profile-image" class="profile"><br>
                <h5 class="card-title"><?php echo"$fname $lname";?></h5>
                <h5 class="card-title"> Department : <?php echo"$department";?></h5>
                <p class="card-text">Joining Date : <?php echo"$join_date";?></p>
                <div class="icon-block">
                  <a href="javascript:void();"></a>
          <a href="javascript:void();"> </a>
          <a href="javascript:void();"></a>
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
                <?php
							   //query
                 
					if(isset($_POST['submit'])){
								$t_password ="";
								$phone_no = $_POST['phone_no'];
								$address_u = $_POST['address'];
								$t_email = $_POST['t_email'];
								$t_password = $_POST['t_password'];
								$t_cpassword = $_POST['t_cpassword'];
									
								
									
								
										// phone_no
										if ($phone_no != ""){
											if(strlen($phone_no) != 10 || $phone_no == "1111111111" || $phone_no == "2222222222" || $phone_no == "3333333333" || $phone_no == "5555555555" || $phone_no == "4444444444"|| $phone_no == "6666666666"
											|| $phone_no == "7777777777" || $phone_no == "8888888888" || $phone_no == "9999999999" || $phone_no == "0000000000" || $phone_no == "1234567890"){	
											echo "<div class='alert alert-danger'><center>incorrect phone number </div>";
										
											}else{$sql = "Update teacher_tb  set phone_number = '$phone_no' where teacher_id = '$teacher_id' ";
												if ($conn->query($sql) === TRUE) {
												echo "<div class='alert alert-danger'><center>Phone Number Updated Successfully. Please refresh</div>";	
												
												}else{
												echo "error";
												}
											}
										}
										
										
										// Address
										if ($address_u != ""){
										$sql = " Update teacher_tb  set address = '$address_u' where teacher_id = '$teacher_id' ";
												if ($conn->query($sql) === TRUE) {
												echo "<div class='alert alert-danger'><center>Address Updated Successfully. Please refresh</div>";	
												
												}else{
												echo "error";
												}
										}
										
										
										// email
										if ($t_email != ""){
										$sql = " Update teacher_tb  set email = '$t_email' where teacher_id = '$teacher_id' ";
												if ($conn->query($sql) === TRUE) {
												echo "<div class='alert alert-danger'><center>Email Updated Successfully. Please refresh</div>";	
												
												}else{
												echo "error";
												}
										}
								
									
								
										// email
										if ($t_email != ""){
										$sql = " Update teacher_tb  set email = '$t_email' where teacher_id = '$teacher_id' ";
												if ($conn->query($sql) === TRUE) {
												echo "<div class='alert alert-danger'><center>Email Updated Successfully. Please refresh</div>";	
												
												}else{
												echo "error";
												}
										}
								
										// Password
											if ($t_password != "" and $t_cpassword !=""){
											if ($t_password == $t_cpassword && $t_password != "" && $t_cpassword != ""){
											$sql = " Update teacher_tb  set t_password = '$t_password' where teacher_id = '$t_id' ";
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
										$profile_image_user = $_FILES['profile_u']['name'];
										$profile_image= $teacher_id.".png";
										$profile_image_temp = $_FILES['profile_u']['tmp_name'];   
										$profile_image_folder = "assets/images/profile_img/teacher/".$profile_image;
										
										if ($profile_image != ""){
											$sql = "update teacher_tb  
											set profile_img = '$profile_image' 
											where teacher_id  = '$t_id' " ;
                     
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
											}else { echo "error";}
										} 
								
								
								
								
								
								}
															
					
					
					?>

                    <h5 class="mb-3">User Profile</h5><hr>
                    
                    <div class="row">
                        <div class="col-md-12">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"><b>Name</b></label>
                            <div class="col-lg-9">
                                 <label class="col-form-label"><?php echo"$fname $lname";?></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"><b>Designation</b></label>
                            <div class="col-lg-9">
                                 <label class="col-form-label"><?php echo"$designation";?></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Teacher ID</label>
                            <div class="col-lg-9">
                                <label class="col-form-label"><?php echo"$teacher_id";?></label>
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
                               <label>+91 <?php echo"$phone";?></label>
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
                
                             
                            </div>
                          </div>
                           
                          <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Blood Group</label>
                            <div class="col-lg-9">
                                <label class="col-form-label"><?php echo"$blood_group";?></label>
          
                            </div>
                          </div>
                           
                                                    
                        </div>
                      
                       
                    </div>
                    
                    <!--/row-->
                </div>
                <div class="tab-pane" id="messages">
                    <div class="alert alert-info alert-dismissible" role="alert">
           <button type="button" class="close" data-dismiss="alert">&times;</button>
            <div class="alert-icon">
           <i class="icon-info"></i>
            </div>
           
                  </div>
                  
                </div>
                <div class="tab-pane" id="edit">
               





                    <form  action="<?php $_SERVER['PHP_SELF']; ?>" method ="POST" enctype="multipart/form-data">

                        
                       
						<div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
                            <div class="col-lg-9">
                                <input name="t_email" class="form-control" type="email" placeholder="<?php echo"$email";?>">
                            </div>
                        </div>

						

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Change profile</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="file" name="profile_u">
                            </div>
                        </div>
						
						
						<div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Address</label>
                            <div class="col-lg-9">
                                <input name="address" class="form-control" type="text" placeholder="<?php echo"$address";?>">
                            </div>
                        </div>
						
						
						<div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Phone Number</label>
                            <div class="col-lg-9">
                                <input name="phone_no" class="form-control" type="number" placeholder="<?php echo"$phone";?>">
                            </div>
                        </div>
						
						
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Password</label>
                            <div class="col-lg-9">
                                <input name="t_password"class="form-control" type="password" value="">
                            </div>


                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Confirm password</label>
                            <div class="col-lg-9">
                                <input name="t_cpassword"class="form-control" type="password" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <input type="reset" class="btn btn-secondary" value="Cancel">
                                <input type="submit" name ="submit" class="btn btn-primary" value="Save Changes">
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