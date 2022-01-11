<!DOCTYPE html>

<?php 
include 'connection_db.php';
//$u_id = $_POST['unique'];
//echo"$u_id";



?>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>The Base - Notice</title>
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
		  <div class="card-title text-uppercase pb-2">New Notice</div>
		    <p class="pb-2">Please Details for new Notice</p>
		    
			
			<form action="notice_db.php" method ="POST" enctype="multipart/form-data"> 
			  <div class="form-group">
			  
			  <label for="exampleInputEmailAddress" class="">Notice Description</label>
			   <div class="position-relative has-icon-right" >
				  <textarea name="notice_description" class="form-control input-shadow" rows="4" cols="50" required> </textarea>
				  <div class="form-control-position">
				  </div>
				   <br>
			  
				    <br>
			   </div>
				     <div class="form-group">
        <label for="exampleInputEmailAddress" class="">Select Notice </label>
         <div class="position-relative has-icon-right">
          <input class="form-control" type="file" type="file" name="my_image" id="file" class="input-large" >
          <div class="form-control-position">  	
            <i class="icon-envelope-open"></i>
          </div>
         </div>
        </div>


			   
			   
			   <label for="exampleInputEmailAddress" class="">Roll Nos to send (Optional)</label>
			   <div class="position-relative has-icon-right" >
				  <input class="form-control input-shadow" type = "number" name="student_no">
				  
				    <br>
			   
			   <label for="exampleInputEmailAddress" class="">Start Date</label>
			   <div class="position-relative has-icon-right">
				  <input type="date"  class="form-control input-shadow" name="start_date" required>
				 </div>
			   <br>
			   <label for="exampleInputEmailAddress" class="">End Date</label>
			   <div class="position-relative has-icon-right">
				  <input type="date"  class="form-control input-shadow" name="end_date" required>
				 </div>
			   <br>
			   
			  </div>
			
			  <button type="submit" name="submit" class="btn btn-light btn-block mt-3">Create Notice</button>
			   <input type="reset" class="btn btn-light btn-block mt-3"value="Cancel">
			 </form>
		   </div>
		  </div>
		    <?php
               /* //query
			    if(isset($_POST['submit'])){
					
				$notice_txt = $_POST['notice_description'];
				//$notice_img = $_POST['notice_img'];
				$start_date = $_POST['start_date'];
				$end_date = $_POST['end_date'];
				
				
										/*$profile_image_user = $_FILES['profile_img_u']['name'];
										$profile_image= $profile_image_user."_notice_img.png";
										$profile_image_temp = $_FILES['profile_img_u']['tmp_name'];   
										$profile_image_folder = "assets/images/notices/".$profile_image;
										
										
											
													
												if($profile_image_user != ""){
												 // Now let's move the uploaded image into the folder: image	
												 
													if (move_uploaded_file($profile_image_temp, $profile_image_folder))  {
															
															$msg = "Notice Updated Succesfully";
														
													
													}else {
														$msg = "error";
													}
													echo "<div class='alert alert-danger'><center>$msg</div>";
												}
											
										
										
									
					
						
						
						$sql = 'insert into notice_tb (notice_txt,start_date,end_date) 
						values("'.$notice_txt.'","'.$start_date.'","'.$end_date.'")';
						$result = mysqli_query($conn, $sql) or die("Query Failed.");
						$error = $conn->error;
						echo "$error sd";
						echo"$sql ";
						
						
						echo '<div class="alert alert-danger"><center>Notice Created Succesfully</div>';
						
						 echo "<script type=\"text/javascript\">
							  alert(\"Notice Added Successfully.\");
							  window.close();
							  </script>"; 
						
										
						
						
				}
			   	*/
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
