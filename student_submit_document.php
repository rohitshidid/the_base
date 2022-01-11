<!DOCTYPE html>

<?php 
include 'connection_db.php';
session_start();


$rollno = $_SESSION["rollno_session"];
				
if ($rollno==""){
	header("Location:index.php");
}




// Get the studrnt info

$profile_img ="";	
$fname ="";	
$lname ="";	
$email ="";	
$if_adhar_card ="";	
$if_passport ="";	
$if_birth_certificate ="";	
$if_caste_certificate ="";	
$if_ssc_marksheet="";
$if_hsc_marksheet="";
$if_jee_marksheet="";
$if_passport_size_photo="";
$non_cremiliear="";
$physical_handicap="";
$domicile="";
$if_1_sem_marksheet = "";
$if_2_sem_marksheet = "";
$if_3_sem_marksheet = "";
$if_4_sem_marksheet = "";
$if_5_sem_marksheet = "";
$if_6_sem_marksheet = "";
$if_1_year_receipt= "";
$if_2_year_receipt= "";
$if_3_year_receipt= "";
$if_certificate_1="";
$if_certificate_2="";
$if_certificate_3="";
$if_certificate_4="";
$if_certificate_5="";
$if_certificate_6="";
$if_certificate_7="";
$if_flag="";
 $sql = "SELECT * from student_tb where rollno = $rollno";
						$result = mysqli_query($conn, $sql) or die("Query Failed.");
                           if(mysqli_num_rows($result) > 0){

                                while($row = mysqli_fetch_assoc($result)){
                                 $profile_img = $row['profile_img'];
								$fname = $row['first_name'];
								$lname = $row['last_name'];
								$email = $row['email'];
								$if_adhar_card = $row['adhar_card'];
								$if_passport = $row['passport'];
								$if_birth_certificate= $row['birth_certificate'];
								$if_caste_certificate= $row['caste_certificate'];
								$if_ssc_marksheet= $row['ssc_marksheet'];
								$if_hsc_marksheet= $row['hsc_marksheet'];
								$if_jee_marksheet= $row['jee_marksheet'];
								$if_passport_size_photo= $row['passport_size_photo'];
								$if_domicile= $row['domicile'];
								$if_non_cremiliear= $row['non_cremiliear'];
								$if_physical_handicap= $row['physical_handicap'];
								$if_1_sem_marksheet= $row['1_sem_marksheet'];
								$if_2_sem_marksheet= $row['2_sem_marksheet'];
								$if_3_sem_marksheet= $row['3_sem_marksheet'];
								$if_4_sem_marksheet= $row['4_sem_marksheet'];
								$if_5_sem_marksheet= $row['5_sem_marksheet'];
								$if_6_sem_marksheet= $row['6_sem_marksheet'];
								$if_1_year_receipt= $row['1_year_receipt'];
								$if_2_year_receipt= $row['2_year_receipt'];
								$if_3_year_receipt= $row['3_year_receipt'];
								$if_certificate_1= $row['certificate_1'];
								$if_certificate_2= $row['certificate_2'];
								$if_certificate_3= $row['certificate_3'];
								$if_certificate_4= $row['certificate_4'];
								$if_certificate_5= $row['certificate_5'];
								$if_certificate_6= $row['certificate_6'];
								$if_certificate_7= $row['certificate_7'];
								$if_flag= $row['flag'];
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
       <h5 class="logo-text">Student Login</h5>
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
        <span class="user-profile"><img src="assets\images\documents\<?php echo "$profile_img"; ?>"  class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="assets\images\documents\<?php echo "$profile_img"; ?>" alt="user avatar"></div>
            <div class="media-body">
          <a href="profile.php">   <h6 class="mt-2 user-title"><?php echo "$fname $lname"; ?></h6></a>
            <p class="user-subtitle"><?php echo "$email"; ?></p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
         <a href="student_profile.php"> <li class="dropdown-item"><i class="zmdi zmdi-account-circle"></i> Profile</li>
        <li class="dropdown-divider"></li>
    <a href="index.php">   
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

     <div class="card">
           <div class="card-body">
           <div class="card-title">Submit Documents</div>
           <hr>
            
			
			
			
			<form action="<?php $_SERVER['PHP_SELF']; ?>" method ="POST" enctype="multipart/form-data">
			
			 <?php
							   //query
							   $adhar_card = "";
							   $passport = "";
							   $birth_certificate = "";
							   $caste_certificate = "";
							   $ssc_marksheet = "";
							   $hsc_marksheet = "";
							   $jee_marksheet = "";
							   $passport_size_photo = "";
							   $domicile = "";
							   $non_cremiliear = "";
							   $physical_handicap = "";
							   $sem_1_marksheet = "";
							   $sem_2_marksheet = "";
							   $sem_3_marksheet = "";
							   $sem_4_marksheet = "";
							   $sem_5_marksheet = "";
							   $sem_6_marksheet = "";
							   $year_1_receipt = "";
							   $year_2_receipt = "";
							   $year_3_receipt = "";
							   $certificate_1 = "";
							   $certificate_2 = "";
							   $certificate_3 = "";
							   $certificate_4 = "";
							   $certificate_5 = "";
							   $certificate_6 = "";
							   $certificate_7 = "";
							   
							   $msg = "";
							   
							   
							if(isset($_POST['submit'])){
										$adhar_card_user = $_FILES['adhar_card']['name'];
										$adhar_card = $rollno."_adhar_card.png";
										$adhar_card_temp = $_FILES['adhar_card']['tmp_name'];   
										$adhar_card_folder = "assets/images/documents/".$adhar_card;
								
										$passport_user = $_FILES['passport']['name'];
										$passport = $rollno."_passport.png";
										$passport_temp = $_FILES['passport']['tmp_name'];   
										$passport_folder = "assets/images/documents/".$passport;
										
										$birth_certificate_user = $_FILES['birth_certificate']['name'];
										$birth_certificate = $rollno."_birth_certificate.png";
										$birth_certificate_temp = $_FILES['birth_certificate']['tmp_name'];   
										$birth_certificate_folder = "assets/images/documents/".$birth_certificate;
										
										$caste_certificate_user = $_FILES['caste_certificate']['name'];
										$caste_certificate = $rollno."_caste_certificate.png";
										$caste_certificate_temp = $_FILES['caste_certificate']['tmp_name'];   
										$caste_certificate_folder = "assets/images/documents/".$caste_certificate;
										
										$ssc_marksheet_user = $_FILES['ssc_marksheet']['name'];
										$ssc_marksheet = $rollno."_ssc_marksheet.png";
										$ssc_marksheet_temp = $_FILES['ssc_marksheet']['tmp_name'];   
										$ssc_marksheet_folder = "assets/images/documents/".$ssc_marksheet;
										
										$hsc_marksheet_user = $_FILES['hsc_marksheet']['name'];
										$hsc_marksheet = $rollno."_hsc_marksheet.png";
										$hsc_marksheet_temp = $_FILES['hsc_marksheet']['tmp_name'];   
										$hsc_marksheet_folder = "assets/images/documents/".$hsc_marksheet;
										
										$jee_marksheet_user = $_FILES['jee_marksheet']['name'];
										$jee_marksheet = $rollno."_jee_marksheet.png";
										$jee_marksheet_temp = $_FILES['jee_marksheet']['tmp_name'];   
										$jee_marksheet_folder = "assets/images/documents/".$jee_marksheet;
										
										$passport_size_photo_user = $_FILES['passport_size_photo']['name'];
										$passport_size_photo = $rollno."_passport_size_photo.png";
										$passport_size_photo_temp = $_FILES['passport_size_photo']['tmp_name'];   
										$passport_size_photo_folder = "assets/images/documents/".$passport_size_photo;
										
										$domicile_user = $_FILES['domicile']['name'];
										$domicile = $rollno."_domicile.png";
										$domicile_temp = $_FILES['domicile']['tmp_name'];   
										$domicile_folder = "assets/images/documents/".$domicile;
										
										$non_cremiliear_user = $_FILES['non_cremiliear']['name'];
										$non_cremiliear = $rollno."_non_cremiliear.png";
										$non_cremiliear_temp = $_FILES['non_cremiliear']['tmp_name'];   
										$non_cremiliear_folder = "assets/images/documents/".$non_cremiliear;
										
										$physical_handicap_user = $_FILES['physical_handicap']['name'];
										$physical_handicap = $rollno."_physical_handicap.png";
										$physical_handicap_temp = $_FILES['physical_handicap']['tmp_name'];   
										$physical_handicap_folder = "assets/images/documents/".$physical_handicap;
										
										$sem_1_marksheet_user = $_FILES['1_sem_marksheet']['name'];
										$sem_1_marksheet = $rollno."_sem_1_marksheet.png";
										$sem_1_marksheet_temp = $_FILES['1_sem_marksheet']['tmp_name'];   
										$sem_1_marksheet_folder = "assets/images/documents/".$sem_1_marksheet;
										
										$sem_2_marksheet_user = $_FILES['2_sem_marksheet']['name'];
										$sem_2_marksheet = $rollno."_sem_2_marksheet.png";
										$sem_2_marksheet_temp = $_FILES['2_sem_marksheet']['tmp_name'];   
										$sem_2_marksheet_folder = "assets/images/documents/".$sem_2_marksheet;
										
										$sem_3_marksheet_user = $_FILES['3_sem_marksheet']['name'];
										$sem_3_marksheet = $rollno."_sem_3_marksheet.png";
										$sem_3_marksheet_temp = $_FILES['3_sem_marksheet']['tmp_name'];   
										$sem_3_marksheet_folder = "assets/images/documents/".$sem_3_marksheet;
										
										$sem_4_marksheet_user = $_FILES['4_sem_marksheet']['name'];
										$sem_4_marksheet = $rollno."_sem_4_marksheet.png";
										$sem_4_marksheet_temp = $_FILES['4_sem_marksheet']['tmp_name'];   
										$sem_4_marksheet_folder = "assets/images/documents/".$sem_4_marksheet;
										
										$sem_5_marksheet_user = $_FILES['5_sem_marksheet']['name'];
										$sem_5_marksheet = $rollno."_sem_5_marksheet.png";
										$sem_5_marksheet_temp = $_FILES['5_sem_marksheet']['tmp_name'];   
										$sem_5_marksheet_folder = "assets/images/documents/".$sem_5_marksheet;
										
										$sem_6_marksheet_user = $_FILES['6_sem_marksheet']['name'];
										$sem_6_marksheet = $rollno."_sem_6_marksheet.png";
										$sem_6_marksheet_temp = $_FILES['6_sem_marksheet']['tmp_name'];   
										$sem_6_marksheet_folder = "assets/images/documents/".$sem_6_marksheet;
										
										$year_1_receipt_user = $_FILES['1_year_receipt']['name'];
										$year_1_receipt = $rollno."_year_1_receipt.png";
										$year_1_receipt_temp = $_FILES['1_year_receipt']['tmp_name'];   
										$year_1_receipt_folder = "assets/images/documents/".$year_1_receipt;
										
										$year_2_receipt_user = $_FILES['2_year_receipt']['name'];
										$year_2_receipt = $rollno."_year_2_receipt.png";
										$year_2_receipt_temp = $_FILES['2_year_receipt']['tmp_name'];   
										$year_2_receipt_folder = "assets/images/documents/".$year_2_receipt;
										
										$year_3_receipt_user = $_FILES['3_year_receipt']['name'];
										$year_3_receipt = $rollno."_year_3_receipt.png";
										$year_3_receipt_temp = $_FILES['3_year_receipt']['tmp_name'];   
										$year_3_receipt_folder = "assets/images/documents/".$year_3_receipt;
										
										$certificate_1_user = $_FILES['certificate_1']['name'];
										$certificate_1 = $rollno."_certificate_1.png";
										$certificate_1_temp = $_FILES['certificate_1']['tmp_name'];   
										$certificate_1_folder = "assets/images/documents/".$certificate_1;
										
										$certificate_2_user = $_FILES['certificate_2']['name'];
										$certificate_2 = $rollno."_certificate_2.png";
										$certificate_2_temp = $_FILES['certificate_2']['tmp_name'];   
										$certificate_2_folder = "assets/images/documents/".$certificate_2;
										
										$certificate_3_user = $_FILES['certificate_3']['name'];
										$certificate_3 = $rollno."_certificate_3.png";
										$certificate_3_temp = $_FILES['certificate_3']['tmp_name'];   
										$certificate_3_folder = "assets/images/documents/".$certificate_3;
										
										$certificate_4_user = $_FILES['certificate_4']['name'];
										$certificate_4 = $rollno."_certificate_4.png";
										$certificate_4_temp = $_FILES['certificate_4']['tmp_name'];   
										$certificate_4_folder = "assets/images/documents/".$certificate_4;
										
										$certificate_5_user = $_FILES['certificate_5']['name'];
										$certificate_5 = $rollno."_certificate_5.png";
										$certificate_5_temp = $_FILES['certificate_5']['tmp_name'];   
										$certificate_5_folder = "assets/images/documents/".$certificate_5;
										
										$certificate_6_user = $_FILES['certificate_6']['name'];
										$certificate_6 = $rollno."_certificate_6.png";
										$certificate_6_temp = $_FILES['certificate_6']['tmp_name'];   
										$certificate_6_folder = "assets/images/documents/".$certificate_6;
										
										$certificate_7_user = $_FILES['certificate_7']['name'];
										$certificate_7 = $rollno."_certificate_7.png";
										$certificate_7_temp = $_FILES['certificate_7']['tmp_name'];   
										$certificate_7_folder = "assets/images/documents/".$certificate_7;
										
										
								
								// write similar queries for all the field even the move the file section like below, do the if uploaded for all the
								// fields and give no error message ir updated if file not passed , give delete option for uploaded files
								
							if($if_flag != 1){
								
								// adhar card
								
							
								if ($adhar_card_user != ""){
									$sql = "update student_tb  
									set adhar_card = '$adhar_card', status = 'Under Scrutiny'
									where rollno = $rollno" ;
									if ($conn->query($sql) === TRUE) {
											
												
												 // Now let's move the uploaded image into the folder: image	
													if (move_uploaded_file($adhar_card_temp, $adhar_card_folder))  {
														if ($if_adhar_card==""){
															$msg = "$adhar_card Uploaded Succesfully";
														}
														else{
															$msg ="$adhar_card Updated successfully";
														}
													}echo "<div class='alert alert-danger'><center>$msg</div>";
									}
								}
							
								// passport
								if ($passport_user != ""){
									$sql = "update student_tb  
									set passport = '$passport', status = 'Under Scrutiny' 
									where rollno = $rollno" ;
									if ($conn->query($sql) === TRUE) {
											
												
												 // Now let's move the uploaded image into the folder: image	
													if (move_uploaded_file($passport_temp, $passport_folder))  {
														$msg = "$passport Uploaded Succesfully";
														echo "<div class='alert alert-danger'><center>$msg</div>";
																									
													}else {
														echo "error uploading";
													}
									}
								}
								
								// birth_certificate
								if ($birth_certificate_user != ""){
									
									$sql = "update student_tb  
									set birth_certificate = '$birth_certificate', status = 'Under Scrutiny' 
									where rollno = $rollno" ;
									if ($conn->query($sql) === TRUE) {
											
												
												 // Now let's move the uploaded image into the folder: image	
													if (move_uploaded_file($birth_certificate_temp, $birth_certificate_folder))  {
														$msg = "$birth_certificate Uploaded Succesfully";
														echo "<div class='alert alert-danger'><center>$msg</div>";
																									
													}else {
														echo "error uploading";
													}
									}
								}
								
								// caste_certificate
								if ($caste_certificate_user != "" ){
									
									$sql = "update student_tb  
									set caste_certificate = '$caste_certificate', status = 'Under Scrutiny'
									where rollno = $rollno" ;
									if ($conn->query($sql) === TRUE) {
											
												
												 // Now let's move the uploaded image into the folder: image	
													if (move_uploaded_file($caste_certificate_temp, $caste_certificate_folder))  {
														$msg = "$caste_certificate Uploaded Succesfully";
														echo "<div class='alert alert-danger'><center>$msg</div>";
																									
													}else {
														echo "error uploading";
													}
									}
								}
								
								// ssc_marksheet
								if ($ssc_marksheet_user != ""){
									
									$sql = "update student_tb  
									set ssc_marksheet = '$ssc_marksheet', status = 'Under Scrutiny'
									where rollno = $rollno" ;
									if ($conn->query($sql) === TRUE) {
											
												
												 // Now let's move the uploaded image into the folder: image	
													if (move_uploaded_file($ssc_marksheet_temp, $ssc_marksheet_folder))  {
														$msg = "$ssc_marksheet Uploaded Succesfully";
														echo "<div class='alert alert-danger'><center>$msg</div>";
																									
													}else {
														echo "error uploading";
													}
									}
								}
								
								
								// hsc_marksheet
								if ($hsc_marksheet_user != ""){
									
									$sql = "update student_tb  
									set hsc_marksheet = '$hsc_marksheet', status = 'Under Scrutiny' 
									where rollno = $rollno" ;
									if ($conn->query($sql) === TRUE) {
											
												
												 // Now let's move the uploaded image into the folder: image	
													if (move_uploaded_file($hsc_marksheet_temp, $hsc_marksheet_folder))  {
														$msg = "$hsc_marksheet Uploaded Succesfully";
														echo "<div class='alert alert-danger'><center>$msg</div>";
																									
													}else {
														echo "error uploading";
													}
									}
								}
								
								
								// jee_marksheet
								if ($jee_marksheet_user != ""){
									
									$sql = "update student_tb  
									set jee_marksheet = '$jee_marksheet', status = 'Under Scrutiny' 
									where rollno = $rollno" ;
									if ($conn->query($sql) === TRUE) {
											
												
												 // Now let's move the uploaded image into the folder: image	
													if (move_uploaded_file($jee_marksheet_temp, $jee_marksheet_folder))  {
														$msg = "$jee_marksheet Uploaded Succesfully";
														echo "<div class='alert alert-danger'><center>$msg</div>";
																									
													}else {
														echo "error uploading";
													}
									}
								}
								
								
								// passport_size_photo
								if ($passport_size_photo_user != ""){
									
									$sql = "update student_tb  
									set passport_size_photo = '$passport_size_photo', status = 'Under Scrutiny' 
									where rollno = $rollno" ;
									if ($conn->query($sql) === TRUE) {
											
												
												 // Now let's move the uploaded image into the folder: image	
													if (move_uploaded_file($passport_size_photo_temp, $passport_size_photo_folder))  {
														$msg = "$passport_size_photo Uploaded Succesfully";
														echo "<div class='alert alert-danger'><center>$msg</div>";
																									
													}else {
														echo "error uploading";
													}
									}
								}
								
								
								// domicile
								if ($domicile_user != ""){
									
									$sql = "update student_tb  
									set domicile = '$domicile', status = 'Under Scrutiny' 
									where rollno = $rollno" ;
									if ($conn->query($sql) === TRUE) {
											
												
												 // Now let's move the uploaded image into the folder: image	
													if (move_uploaded_file($domicile_temp, $domicile_folder))  {
														$msg = "$domicile Uploaded Succesfully";
														echo "<div class='alert alert-danger'><center>$msg</div>";
																									
													}else {
														echo "error uploading";
													}
									}
								}
								
								
								// non_cremiliear
								if ($non_cremiliear_user != ""){
									
									$sql = "update student_tb  
									set non_cremiliear = '$non_cremiliear', status = 'Under Scrutiny' 
									where rollno = $rollno" ;
									if ($conn->query($sql) === TRUE) {
											
												
												 // Now let's move the uploaded image into the folder: image	
													if (move_uploaded_file($non_cremiliear_temp, $non_cremiliear_folder))  {
														$msg = "$non_cremiliear Uploaded Succesfully";
														echo "<div class='alert alert-danger'><center>$msg</div>";
																									
													}else {
														echo "error uploading";
													}
									}
								}
								
								
								// physical_handicap
								if ($physical_handicap_user != ""){
									
									$sql = "update student_tb  
									set physical_handicap = '$physical_handicap', status = 'Under Scrutiny' 
									where rollno = $rollno" ;
									if ($conn->query($sql) === TRUE) {
											
												
												 // Now let's move the uploaded image into the folder: image	
													if (move_uploaded_file($physical_handicap_temp, $physical_handicap_folder))  {
														$msg = "$physical_handicap Uploaded Succesfully";
														echo "<div class='alert alert-danger'><center>$msg</div>";
																									
													}else {
														echo "error uploading";
													}
									}
								}
							}
								
								// 1_sem_marksheet
								if ($sem_1_marksheet_user != ""){
									
									$sql = "update student_tb  
									set 1_sem_marksheet = '$sem_1_marksheet' 
									where rollno = $rollno" ;
									if ($conn->query($sql) === TRUE) {
											
												
												 // Now let's move the uploaded image into the folder: image	
													if (move_uploaded_file($sem_1_marksheet_temp, $sem_1_marksheet_folder))  {
														$msg = "$sem_1_marksheet Uploaded Succesfully";
														echo "<div class='alert alert-danger'><center>$msg</div>";
																									
													}else {
														echo "error uploading";
													}
									}
								}
								
								
								// 2_sem_marksheet
								if ($sem_2_marksheet_user != ""){
									
									$sql = "update student_tb  
									set 2_sem_marksheet = '$sem_2_marksheet' 
									where rollno = $rollno" ;
									if ($conn->query($sql) === TRUE) {
											
												
												 // Now let's move the uploaded image into the folder: image	
													if (move_uploaded_file($sem_2_marksheet_temp, $sem_2_marksheet_folder))  {
														$msg = "$sem_2_marksheet Uploaded Succesfully";
														echo "<div class='alert alert-danger'><center>$msg</div>";
																									
													}else {
														echo "error uploading";
													}
									}
								}
								
								
								// 3_sem_marksheet
								if ($sem_3_marksheet_user != ""){
									
									$sql = "update student_tb  
									set 3_sem_marksheet = '$sem_3_marksheet' 
									where rollno = $rollno" ;
									if ($conn->query($sql) === TRUE) {
											
												
												 // Now let's move the uploaded image into the folder: image	
													if (move_uploaded_file($sem_3_marksheet_temp, $sem_3_marksheet_folder))  {
														$msg = "$sem_3_marksheet Uploaded Succesfully";
														echo "<div class='alert alert-danger'><center>$msg</div>";
																									
													}else {
														echo "error uploading";
													}
									}
								}
								
								
								// 4_sem_marksheet
								if ($sem_4_marksheet_user != ""){
									
									$sql = "update student_tb  
									set 4_sem_marksheet = '$sem_4_marksheet'
									where rollno = $rollno" ;
									if ($conn->query($sql) === TRUE) {
											
												
												 // Now let's move the uploaded image into the folder: image	
													if (move_uploaded_file($sem_4_marksheet_temp, $sem_4_marksheet_folder))  {
														$msg = "$sem_4_marksheet Uploaded Succesfully";
														echo "<div class='alert alert-danger'><center>$msg</div>";
																									
													}else {
														echo "error uploading";
													}
									}
								}
								
								
								// 5_sem_marksheet
								if ($sem_5_marksheet_user != ""){
									
									$sql = "update student_tb  
									set 5_sem_marksheet = '$sem_5_marksheet' 
									where rollno = $rollno" ;
									if ($conn->query($sql) === TRUE) {
											
												
												 // Now let's move the uploaded image into the folder: image	
													if (move_uploaded_file($sem_5_marksheet_temp, $sem_5_marksheet_folder))  {
														$msg = "$sem_5_marksheet Uploaded Succesfully";
														echo "<div class='alert alert-danger'><center>$msg</div>";
																									
													}else {
														echo "error uploading";
													}
									}
								}
								
								
								// 6_sem_marksheet
								if ($sem_6_marksheet_user != ""){
									
									$sql = "update student_tb  
									set 6_sem_marksheet = '$sem_6_marksheet'
									where rollno = $rollno" ;
									if ($conn->query($sql) === TRUE) {
											
												
												 // Now let's move the uploaded image into the folder: image	
													if (move_uploaded_file($sem_6_marksheet_temp, $sem_6_marksheet_folder))  {
														$msg = "$sem_6_marksheet Uploaded Succesfully";
														echo "<div class='alert alert-danger'><center>$msg</div>";
																									
													}else {
														echo "error uploading";
													}
									}
								}
								
								
								// 1_year_receipt
								if ($year_1_receipt_user != ""){
									
									$sql = "update student_tb  
									set 1_year_receipt = '$year_1_receipt' 
									where rollno = $rollno" ;
									if ($conn->query($sql) === TRUE) {
											
												
												 // Now let's move the uploaded image into the folder: image	
													if (move_uploaded_file($year_1_receipt_temp, $year_1_receipt_folder))  {
														$msg = "$year_1_receipt Uploaded Succesfully";
														echo "<div class='alert alert-danger'><center>$msg</div>";
																									
													}else {
														echo "error uploading";
													}
									}
								}
								
								
								// 2_year_receipt
								if ($year_2_receipt_user != ""){
									
									$sql = "update student_tb  
									set 2_year_receipt = '$year_2_receipt' 
									where rollno = $rollno" ;
									if ($conn->query($sql) === TRUE) {
											
												
												 // Now let's move the uploaded image into the folder: image	
													if (move_uploaded_file($year_2_receipt_temp, $year_2_receipt_folder))  {
														$msg = "$year_2_receipt Uploaded Succesfully";
														echo "<div class='alert alert-danger'><center>$msg</div>";
																									
													}else {
														echo "error uploading";
													}
									}
								}
								
								
								// 3_year_receipt
								if ($year_3_receipt_user != ""){
									
									$sql = "update student_tb  
									set 3_year_receipt = '$year_3_receipt' 
									where rollno = $rollno" ;
									if ($conn->query($sql) === TRUE) {
											
												
												 // Now let's move the uploaded image into the folder: image	
													if (move_uploaded_file($year_3_receipt_temp, $year_3_receipt_folder))  {
														$msg = "$year_3_receipt Uploaded Succesfully";
														echo "<div class='alert alert-danger'><center>$msg</div>";
																									
													}else {
														echo "error uploading";
													}
									}
								}
								
								
								// certificate_1
								if ($certificate_1_user != ""){
									
									$sql = "update student_tb  
									set certificate_1 = '$certificate_1' 
									where rollno = $rollno" ;
									if ($conn->query($sql) === TRUE) {
											
												
												 // Now let's move the uploaded image into the folder: image	
													if (move_uploaded_file($certificate_1_temp, $certificate_1_folder))  {
														$msg = "$certificate_1 Uploaded Succesfully";
														echo "<div class='alert alert-danger'><center>$msg</div>";
																									
													}else {
														echo "error uploading";
													}
									}
								}
								
								
								// certificate_2
								if ($certificate_2_user != ""){
									
									$sql = "update student_tb  
									set certificate_2 = '$certificate_2' 
									where rollno = $rollno" ;
									if ($conn->query($sql) === TRUE) {
											
												
												 // Now let's move the uploaded image into the folder: image	
													if (move_uploaded_file($certificate_2_temp, $certificate_2_folder))  {
														$msg = "$certificate_2 Uploaded Succesfully";
														echo "<div class='alert alert-danger'><center>$msg</div>";
																									
													}else {
														echo "error uploading";
													}
									}
								}
								
								
								// certificate_3
								if ($certificate_3_user != ""){
									
									$sql = "update student_tb  
									set certificate_3 = '$certificate_3' 
									where rollno = $rollno" ;
									if ($conn->query($sql) === TRUE) {
											
												
												 // Now let's move the uploaded image into the folder: image	
													if (move_uploaded_file($certificate_3_temp, $certificate_3_folder))  {
														$msg = "$certificate_3 Uploaded Succesfully";
														echo "<div class='alert alert-danger'><center>$msg</div>";
																									
													}else {
														echo "error uploading";
													}
									}
								}
								
								
								// certificate_4
								if ($certificate_4_user != ""){
									
									$sql = "update student_tb  
									set certificate_4 = '$certificate_4' 
									where rollno = $rollno" ;
									if ($conn->query($sql) === TRUE) {
											
												
												 // Now let's move the uploaded image into the folder: image	
													if (move_uploaded_file($certificate_4_temp, $certificate_4_folder))  {
														$msg = "$certificate_4 Uploaded Succesfully";
														echo "<div class='alert alert-danger'><center>$msg</div>";
																									
													}else {
														echo "error uploading";
													}
									}
								}
								
								
								// certificate_5
								if ($certificate_5_user != ""){
									
									$sql = "update student_tb  
									set certificate_5 = '$certificate_5' 
									where rollno = $rollno" ;
									if ($conn->query($sql) === TRUE) {
											
												
												 // Now let's move the uploaded image into the folder: image	
													if (move_uploaded_file($certificate_5_temp, $certificate_5_folder))  {
														$msg = "$certificate_5 Uploaded Succesfully";
														echo "<div class='alert alert-danger'><center>$msg</div>";
																									
													}else {
														echo "error uploading";
													}
									}
								}
								
								
								// certificate_6
								if ($certificate_6_user != ""){
									
									$sql = "update student_tb  
									set certificate_6 = '$certificate_6' 
									where rollno = $rollno" ;
									if ($conn->query($sql) === TRUE) {
											
												
												 // Now let's move the uploaded image into the folder: image	
													if (move_uploaded_file($certificate_6_temp, $certificate_6_folder))  {
														$msg = "$certificate_6 Uploaded Succesfully";
														echo "<div class='alert alert-danger'><center>$msg</div>";
																									
													}else {
														echo "error uploading";
													}
									}
								}
								
								
								// certificate_7
								if ($certificate_7_user != ""){
									
									$sql = "update student_tb  
									set certificate_7 = '$certificate_7' 
									where rollno = $rollno" ;
									if ($conn->query($sql) === TRUE) {
											
												
												 // Now let's move the uploaded image into the folder: image	
													if (move_uploaded_file($certificate_7_temp, $certificate_7_folder))  {
														$msg = "$certificate_7 Uploaded Succesfully";
														echo "<div class='alert alert-danger'><center>$msg</div>";
																									
													}else {
														echo "error uploading";
													}
									}
								}
								
								
								
								
								
								
								// error message 
												$str = $conn->error;
												echo "$str";
												
												$error ="/'PRIMARY'/i";
												$duplicate = preg_match($error,$str) ;
												if($duplicate==1){
													echo "<div class='alert alert-danger'><center>Data already entered</div>";
												}
			
							}
					?>
			
			

          <div class="form-group">
		  
              <label class="form-control-label">Adhar Card <?php if ($if_adhar_card != ""){echo "&nbsp;&nbsp;&nbsp; *Uploaded"; }?> </label>
              <div class="">
                  <input class="form-control" type="file" name ="adhar_card">
              </div>
			 
			  <!-- <br>
			  <form action="student_remove_document.php" method ="POST" enctype="multipart/form-data">
			  <input type = "hidden" value "adhar_card">
			  <button type = "submit" name="delete" class="btn btn-secondary" value = "submit" style="float: right;"> delete</button>
			  </form>
			  <br> -->
			  
          </div>

          <div class="form-group">
              <label class="form-control-label">Passport <?php if ($if_passport != ""){echo "&nbsp;&nbsp;&nbsp; *Uploaded"; }?></label>
              <div class="">
                  <input class="form-control" type="file" name ="passport">
              </div>
          </div>

          <div class="form-group">
              <label class="form-control-label">Birth certificate <?php if ($if_birth_certificate != ""){echo "&nbsp;&nbsp;&nbsp; *Uploaded"; }?></label>
              <div class="">
                  <input class="form-control" type="file" name ="birth_certificate">
              </div>
          </div>

          <div class="form-group">
              <label class="form-control-label">Caste certificate <?php if ($if_caste_certificate != ""){echo "&nbsp;&nbsp;&nbsp; *Uploaded"; }?></label>
              <div class="">
                  <input class="form-control" type="file" name ="caste_certificate"> 
              </div>
          </div>


          <div class="form-group">
              <label class="form-control-label">SSC marksheet<?php if ($if_ssc_marksheet != ""){echo "&nbsp;&nbsp;&nbsp; *Uploaded"; }?></label>
              <div class="">
                  <input class="form-control" type="file" name ="ssc_marksheet">
              </div>
          </div>


          <div class="form-group">
              <label class="form-control-label">HSC (if DSY)<?php if ($if_hsc_marksheet != ""){echo "&nbsp;&nbsp;&nbsp; *Uploaded"; }?></label>
              <div class="">
                  <input class="form-control" type="file" name ="hsc_marksheet">
              </div>
          </div>


          <div class="form-group">
              <label class="form-control-label">JEE(if Dsy)<?php if ($if_jee_marksheet != ""){echo "&nbsp;&nbsp;&nbsp; *Uploaded"; }?></label>
              <div class=""> 
                  <input class="form-control" type="file" name ="jee_marksheet">
              </div>
          </div>


          <div class="form-group">
              <label class="form-control-label">Passport Size Photo<?php if ($if_passport_size_photo != ""){echo "&nbsp;&nbsp;&nbsp; *Uploaded"; }?></label>
              <div class="">
                  <input class="form-control" type="file" name ="passport_size_photo">
              </div>
          </div>


          <div class="form-group">
              <label class="form-control-label">Domicile (if applicable)<?php if ($if_domicile != ""){echo "&nbsp;&nbsp;&nbsp; *Uploaded"; }?></label>
              <div class="">
                  <input class="form-control" type="file" name ="domicile">
              </div>
          </div>


          <div class="form-group">
              <label class="form-control-label">Non Cremiliear (if applicable)<?php if ($if_non_cremiliear != ""){echo "&nbsp;&nbsp;&nbsp; *Uploaded"; }?></label>
              <div class="">
                  <input class="form-control" type="file" name ="non_cremiliear">
              </div>
          </div>

          <div class="form-group">
              <label class="form-control-label">Physical Handicap (if applicable)<?php if ($if_physical_handicap != ""){echo "&nbsp;&nbsp;&nbsp; *Uploaded"; }?></label>
              <div class="">
                  <input class="form-control" type="file" name ="physical_handicap">
              </div>
          </div>


          <div class="form-group">
              <label class="form-control-label">1st Sem Marksheet (if received)<?php if ($if_1_sem_marksheet != ""){echo "&nbsp;&nbsp;&nbsp; *Uploaded"; }?></label>
              <div class="">
                  <input class="form-control" type="file" name ="1_sem_marksheet">
              </div>
          </div>


          <div class="form-group">
              <label class="form-control-label">2nd Sem Marksheet (if received)<?php if ($if_2_sem_marksheet != ""){echo "&nbsp;&nbsp;&nbsp; *Uploaded"; }?></label>
              <div class="">
                  <input class="form-control" type="file" name ="2_sem_marksheet">
              </div>
          </div>


          <div class="form-group">
              <label class="form-control-label">3rd Sem Marksheet (if received)<?php if ($if_3_sem_marksheet != ""){echo "&nbsp;&nbsp;&nbsp; *Uploaded"; }?></label>
              <div class="">
                  <input class="form-control" type="file" name ="3_sem_marksheet">
              </div>
          </div>

           <div class="form-group">
              <label class="form-control-label">4th Sem Marksheet (if received)<?php if ($if_4_sem_marksheet != ""){echo "&nbsp;&nbsp;&nbsp; *Uploaded"; }?></label>
              <div class="">
                  <input class="form-control" type="file" name ="4_sem_marksheet">
              </div>
          </div>
           <div class="form-group">
              <label class="form-control-label">5th Sem Marksheet (if received)<?php if ($if_5_sem_marksheet != ""){echo "&nbsp;&nbsp;&nbsp; *Uploaded"; }?></label>
              <div class="">
                  <input class="form-control" type="file" name ="5_sem_marksheet">
              </div>
          </div>
           <div class="form-group">
              <label class="form-control-label">6th Sem Marksheet (if received)<?php if ($if_6_sem_marksheet != ""){echo "&nbsp;&nbsp;&nbsp; *Uploaded"; }?></label>
              <div class="">
                  <input class="form-control" type="file" name ="6_sem_marksheet">
              </div>
          </div>
           <div class="form-group">
              <label class="form-control-label">1st year Fee receipt (if received)<?php if ($if_1_year_receipt != ""){echo "&nbsp;&nbsp;&nbsp; *Uploaded"; }?></label>
              <div class="">
                  <input class="form-control" type="file" name ="1_year_receipt">
              </div>
          </div>
  
           <div class="form-group">
              <label class="form-control-label">2nd year Fee receipt (if received)<?php if ($if_2_year_receipt != ""){echo "&nbsp;&nbsp;&nbsp; *Uploaded"; }?></label>
              <div class="">
                  <input class="form-control" type="file" name ="2_year_receipt" >
              </div>
          </div>
           <div class="form-group">
              <label class="form-control-label">3rd year Fee receipt (if received)<?php if ($if_3_year_receipt != ""){echo "&nbsp;&nbsp;&nbsp; *Uploaded"; }?></label>
              <div class="">
                  <input class="form-control" type="file" name ="3_year_receipt" >
              </div>
          </div> 
		  <div class="form-group">
              <label class="form-control-label">Certificate 1 (optional)<?php if ($if_certificate_1 != ""){echo "&nbsp;&nbsp;&nbsp; *Uploaded"; }?></label>
              <div class="">
                  <input class="form-control" type="file" name ="certificate_1">
              </div>
          </div>
		   <div class="form-group">
              <label class="form-control-label">Certificate 2 (optional)<?php if ($if_certificate_2 != ""){echo "&nbsp;&nbsp;&nbsp; *Uploaded"; }?></label>
              <div class="">
                  <input class="form-control" type="file" name ="certificate_2">
              </div>
          </div>
           <div class="form-group">
              <label class="form-control-label">Certificate 3 (optional)<?php if ($if_certificate_3 != ""){echo "&nbsp;&nbsp;&nbsp; *Uploaded"; }?></label>
              <div class="">
                  <input class="form-control" type="file" name ="certificate_3">
              </div>
          </div><div class="form-group">
              <label class="form-control-label">Certificate 4 (optional)<?php if ($if_certificate_4 != ""){echo "&nbsp;&nbsp;&nbsp; *Uploaded"; }?></label>
              <div class="">
                  <input class="form-control" type="file" name ="certificate_4">
              </div>
          </div><div class="form-group">
              <label class="form-control-label">Certificate 5 (optional)<?php if ($if_certificate_5 != ""){echo "&nbsp;&nbsp;&nbsp; *Uploaded"; }?></label>
              <div class="">
                  <input class="form-control" type="file" name ="certificate_5">
              </div>
          </div><div class="form-group">
              <label class="form-control-label">Certificate 6 (optional)<?php if ($if_certificate_6 != ""){echo "&nbsp;&nbsp;&nbsp; *Uploaded"; }?></label>
              <div class="">
                  <input class="form-control" type="file" name ="certificate_6">
              </div>
          </div><div class="form-group">
              <label class="form-control-label">Certificate 7 (optional)<?php if ($if_certificate_7 != ""){echo "&nbsp;&nbsp;&nbsp; *Uploaded"; }?></label>
              <div class="">
                  <input class="form-control" type="file" name ="certificate_7">
              </div>
          </div>             

           <div class="form-group">
            <button type="submit" name="submit" class="btn btn-light px-5"><i class="icon-lock"></i> Submit</button>
			<input type="reset" class="btn btn-secondary" value="Cancel">
          </div>
          </form>
         </div>
         </div>
      </div>

    
    </div><!--End Row-->

	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->

    </div>
    <!-- End container-fluid-->
    
   </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer
	<footer class="footer">
      <div class="container">
        <div class="text-center">
           Copyright © 2021 The Base
        </div>
      </div>
    </footer>
	End footer-->
	
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
