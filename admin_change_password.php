<!DOCTYPE html>

<?php 
include 'connection_db.php';
session_start();
$username = $_SESSION["a_username_session"];
$password = $_SESSION["a_password_session"];
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

 <div class="height-100v d-flex align-items-center justify-content-center">
	<div class="card card-authentication1 mb-0">
		<div class="card-body">
		 <div class="card-content p-2">
		  <div class="card-title text-uppercase pb-2">Reset Password</div>
		    <p class="pb-2">Please enter your old password and the confirm the new password.</p>
		    
			
			<form action="<?php $_SERVER['PHP_SELF']; ?>" method ="POST">
			  <div class="form-group">
			  
			  <label for="exampleInputEmailAddress" class="">Old Password</label>
			   <div class="position-relative has-icon-right">
				  <input type="password" id="exampleInputEmailAddress" maxlength="25" class="form-control input-shadow" placeholder="Old Password" name ="old_pass" required>
				  <div class="form-control-position">
				  </div>
				  
				    <br>
			   
			   </div>
			   <label for="exampleInputEmailAddress" class="">New Password</label>
			   <div class="position-relative has-icon-right">
				  <input type="password" id="exampleInputEmailAddress" maxlength="25" class="form-control input-shadow" placeholder="New Password" name="new_pass" required>
				  <div class="form-control-position">
				  </div>
				 </div>
			   <br>
			   <label for="exampleInputEmailAddress" class="">Confirm New Password</label>
			   <div class="position-relative has-icon-right">
				  <input type="password" id="exampleInputEmailAddress"  maxlength="25" class="form-control input-shadow" placeholder="Confirm New Password" name = "confirm_new_pass" required>
				  <div class="form-control-position">
				  </div>
			   </div>
			  </div>
			 <input type="reset" class="btn btn-light btn-block mt-3"value="Cancel">
			  <button type="submit" value = "submit" name="submit" class="btn btn-light btn-block mt-3">Reset Password</button>
			 </form>
		   </div>
		  </div>
		   <div class="card-footer text-center py-3">
		    <p class="text-warning mb-0">Return to the <a href="login_admin.php"> Sign In</a></p>
			
			 <?php
               //query
			    if(isset($_POST['submit'])){
					
			   $old_pass = $_POST['old_pass'];
			   $new_pass = $_POST['new_pass'];
			   $confirm_new_pass = $_POST['confirm_new_pass'];
				
				
				
					if($old_pass == $password){
						
						if($confirm_new_pass==$new_pass) {
						$sql = "update admin_tb set a_password = '$new_pass' where a_username= '$username' ";
						$result = mysqli_query($conn, $sql) or die("Query Failed.");
						echo '<div class="alert alert-danger"><center>Password Changed Successfully Please Sign in again</div>';
						session_destroy();
						$_SESSION["a_username_session"]="";
						}
						else{
							echo '<div class="alert-danger "><center>New Password does not match. </div>';
						}
					
					}else {
					
					echo '<div class="alert alert-danger"><center>Old Password does not match. </div>';
					}						
						
						
				}
			   
               ?>
			
		  </div>
	     </div>
	     </div>
		 
		 
		 
		 
		 
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
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
	
	</div><!--wrapper-->
	
  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  
	
</body>
</html>
