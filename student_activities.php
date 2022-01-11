<!DOCTYPE html>

<?php 
include 'connection_db.php';
session_start();


$rollno = $_SESSION["rollno_session"];
				
if ($rollno==""){
	header("Location:index.php");
}



// Get the student info

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
           <div class="card-title">Add New</div>

           <hr>
            <form  action="<?php $_SERVER['PHP_SELF']; ?>" method ="POST" enctype="multipart/form-data">
           <div class="form-group">
            <label for="input-1" >Name of Event</label>
            <input name ="event_name" type="text" class="form-control" id="input-1" placeholder="Enter Name of Event." required>
           </div>
           <div class="form-group">
            <label for="input-2">Start Date</label>
            <input name ="start_date" type="date" class="form-control" id="input-2" placeholder="Enter Your Issue Date" required>
           </div>
           <div class="form-group">
            <label for="input-3">End Date</label>
            <input name ="end_date" type="date" class="form-control" id="input-3" placeholder="Enter Your Return Date" required>
           </div>
           <div class="form-group">
            <label for="input-4">Event Venue</label>
            <input name ="event_venue" type="text" class="form-control" id="input-4" placeholder="Enter Event Name" required>
           </div>
           
        

            <label for="exampleInputEmailAddress" class="">Event Description</label>
			   <div class="position-relative has-icon-right" >
				  <textarea name="event_description" class="form-control input-shadow" rows="4" cols="50" required> </textarea>
				  <div class="form-control-position">
				  </div>
				   <br>

           <label for="exampleInputEmailAddress" class="">Select Certificate</label>
         <div class="position-relative has-icon-right">
          <input class="form-control" name="my_image" type="file" class="input-large" required>
          <div class="form-control-position">
            <i class="icon-envelope-open"></i>
          </div>
         </div><br>

             
           
         
		    
           <div class="form-group">
           <center> <button type="submit" name ="submit" class="btn btn-light px-5"><i class="zmdi zmdi-book"></i> Submit</button>&nbsp;&nbsp;
           <br><br>
			</form>
			<form action= "<?php $_SERVER['PHP_SELF'];?>" method ="POST">
            <center><button type="submit" name ="view_history" class="btn btn-light px-5"><i class="icon-lock"></i> View History</button>
			</form >	
			<br><br>
			

		 </div>
         </div>
         </div>
		</div>
	
		
          <div class="card">
				<div class="card-body">

         <?php 
       
         
         
         
            if(isset($_POST['view_history'])){
          
            
            
            
            echo'
                <h5 class="card-title">History</h5>
                 
                <div class="table-responsive">
                <table class="table">
                <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col"><center>Event Name</th>
                    <th scope="col"><center>Start Date</th>
                    <th scope="col"><center>End Date</th>
                    <th scope="col"><center>Event Venue</th>
                    <th scope="col"><center>Event Description</th>
                    <th scope="col"><center>Ref ID</th>
                    <th scope="col"><center>Certificate</th>
                    <th scope="col"><center>Action</th>
                     
                  </tr>
                </thead>';
          
            
            
            
            
            
             
            
               $sql = "select * from activity_tb where roll_no = '$rollno'";

            
                    
                      $count = 1;
                      
                      $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                      while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr><td> <center>".$count." </td><td><center>".$row['event_name']
                        ." </td><td><center>".$row['start_date']
                        ." </td><td><center>".$row['end_date']
                        ." </td><td><center>".$row['event_venue']
                        ." </td><td><center>".$row['event_desc']
                        ." </td><td><center>".$row['id']
						." </td><td><center>"."<form action = 'student_viewcertificate.php' method = 'POST' target = 'blank' >
                        <input type='hidden' value='$row[id]' name = 'id'>
                        <button type ='submit' class='btn btn-primary' value='submit]'>View Certificate</button></form>"
                        ." </td><td><center>"."<form action = 'student_delete_activity_query.php' method = 'POST'  >
                        <input type='hidden' value='$row[id]' name = 'id'>
                        <button type ='submit' class='btn btn-primary' value='submit]'>Delete</button></form>"
                        ."</a></tr></td>";
						
                        $count++;
                      
                    } 
                    $str = $conn->error;
                    echo "$str";
                    
            } 
            
                            
          ?>
         
                </tbody>
              </table>
           </div>
            </div>
         
      </div>
    
         
  
               
 <!--End Row-->

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



<?php 
     include 'connection_db.php';

     if(isset($_POST["submit"])){

    $event_name = $_POST['event_name'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $event_venue = $_POST['event_venue'];
    $event_description = $_POST['event_description'];
   
    
    
if (isset($_POST['submit']) ) {

	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];
	$name= $fname." ".$lname;

		
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png" , "pdf"); 

			if ($img_ex_lc!=""){

					if (in_array($img_ex_lc, $allowed_exs)) {
						$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
						
						$img_upload_path = 'assets/images/activity/'.$new_img_name;
						move_uploaded_file($tmp_name, $img_upload_path);

						// Insert into Database
						$sql = 'insert into activity_tb (roll_no , name ,	event_name , start_date	, end_date , event_venue , event_desc , certificate) 
								values("'.$rollno.'","'.$name.'","'.$event_name.'","'.$start_date.'","'.$end_date.'","'.$event_venue.'","'.$event_description.'" ,"'.$new_img_name.'")';
						mysqli_query($conn, $sql);
						echo "<script type=\"text/javascript\">
									  alert(\"Activity Added Successfully\");
									  window.close();
									  </script>";

					}
					else {
						echo "<script type=\"text/javascript\">
									  alert(\"You can't upload files of this type.\");
									  window.close();
									  </script>";
						
					}
			}else{
				// Insert into Database
						$sql = 'insert into activity_tb (roll_no , name ,	event_name , start_date	, end_date , event_venue , event_desc , certificate) 
								values("'.$rollno.'","'.$name.'","'.$event_name.'","'.$start_date.'","'.$end_date.'","'.$event_venue.'","'.$event_description.'" ,"'.$new_img_name.'")';
						mysqli_query($conn, $sql);
						echo "<script type=\"text/javascript\">
									  alert(\"Activity Added Successfully\");
									  window.close();
									  </script>";
			}
				
				
		
	}

else {
	echo "<script type=\"text/javascript\">
							  alert(\"unknown error occurred!\");
							  window.close();
							  </script>";
}


	
	
}
?>

</html>
