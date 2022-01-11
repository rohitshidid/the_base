<?php 
      include 'connection_db.php';
      session_start();
      $t_id = $_SESSION["t_id_session"];

      if($t_id == ""){
        header("Location:login_teacher.php");
        }

$fname = "";
$lname = "";
$email = "";
$profile= "";
$category= "";

 $sql = "SELECT * from teacher_tb where teacher_id = '$t_id'";
            $result = mysqli_query($conn, $sql) or die("Query Failed.");
                           if(mysqli_num_rows($result) > 0){

                                while($row = mysqli_fetch_assoc($result)){
                                 $fname = $row['first_name'];
                                 $lname = $row['last_name'];
                                 $email = $row['email'];
                                 $profile = $row['profile_img'];
                                 $category = $row['category'];
                                
                                }

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
       <li class="sidebar-header"><h5>MAIN NAVIGATION (Department Staff) </h5></li>
      <li>
        <a href="teacher_dept_dashboard.php">
          <i class="zmdi zmdi-view-dashboard"></i>  <span>Dashboard</span>
        </a>
      </li>
      <li>
        <a href="teacher_dept_profile.php">
         <i class="zmdi zmdi-face"></i> <span>Profile</span>
        </a>
      </li>

   
      <li>
        <a href="teacher_dept_stud.php">
          <i class="zmdi zmdi-format-list-bulleted"></i> <span>Student info</span>
        </a>
      </li>
      
      <li>
        <a href="teacher_dept_stud_activity.php">
          <i class="zmdi zmdi-calendar-check"></i> <span>Activity </span>
        </a>
      </li>

      <li>
        <a href="teacher_dept_marks.php">
          <i class="zmdi zmdi-grid"></i> <span>Upload Marks</span>
        </a>
      </li>
      
      <li>
        <a href="teacher_dept_curriculum.php">
          <i class="zmdi zmdi-assignment-o"></i><span>Curriculum</span>
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
  <ul class="navbar-nav mr-auto align-items-center">
    
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
        <a href="teacher_dept_profile.php"> <li class="dropdown-item"><i class="zmdi zmdi-account-circle"></i> Profile</li></a>
        
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
   <center>
        
        <br>
    <div class="card card-authentication1 mb-0">
    <div class="card-body">
     <div class="card-content p-2">
      <div class="card-title text-uppercase pb-2">Upload Marks </div>
        <p class="pb-2">Please select the Semester And Select CSV File To Upload Marks</p>

        

        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="upload_excel" enctype="multipart/form-data">
                          
			
                           <label>Semester</label><br>
								<input type="radio" name="sem_select" value="SEM1" required>
							<label>Sem1</label>
								<input type="radio"  name="sem_select" value="SEM2">
							<label>sem2</label>
								<input type="radio" name="sem_select" value="SEM3">
							<label>Sem3</label>
								<br><input type="radio"  name="sem_select" value="SEM4">
							<label>Sem4</label>
								<input type="radio"  name="sem_select" value="Sem5">
							<label>Sem5</label>
								<input type="radio"  name="sem_select" value="SEM6">
							<label>Sem6</label>
								
						

           <div class="form-group">
        <label for="exampleInputEmailAddress" class="">Select CSV File </label>
         <div class="position-relative has-icon-right">
          <input class="form-control" type="file" type="file" name="file" id="file" class="input-large" >
          <div class="form-control-position">
            <i class="icon-envelope-open"></i>
          </div>
         </div>
        </div>
       <br>
      <center>  <button type="submit" id="submit" name="upload_csv" class="btn btn-primary button-loading" data-loading-text="Loading..."><i class="fa fa-upload"></i>  Upload</button>
		<br>
		<br>
		</form>
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" >		
        <button type="submit" id="abc" name="delete_csv" class="btn btn-primary button-loading" ><i class="fa fa-trash-o"></i>  New Semester Entry</button>
        <br> <br>
        <a href="assets/images/documents/reference.png" target = "blank"><button type="button" id="abc" name="sample_csv" class="btn btn-light px-5" >   <i class="fa fa-eye"></i>    View Sample</a></center>
       </form>
       </div>
      </div>
     
       </div>
         </div>
         </div>
      </div>

	
    </center> 
    <!--End Row-->

	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->

    
    <!-- End container-fluid-->
    <!--Start footer-->
	
      
    
	<!--End footer-->
   <!--End content-wrapper-->
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
   
 <!--End wrapper-->


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

<?php
    
    include 'connection_db.php';
    
     if(isset($_POST["upload_csv"])){
		$semester= $_POST['sem_select'];
		$semester = strtoupper($semester);
		
		
		
        $filename=$_FILES["file"]["tmp_name"];    
         if($_FILES["file"]["size"] > 0)
         {
            $file = fopen($filename, "r");
            
              while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
               {
               $sql = "INSERT into marks_tb (s_roll,s_name,s_marks) 
                       values ('".$getData[0]."','".$getData[1]."','".$getData[2]."')";
                       $result = mysqli_query($conn, $sql); 

                    

            if(!isset($result))
            {
              echo "<script type=\"text/javascript\">
                  alert(\"Invalid File:Please Upload CSV File.\");
                  window.location = \"index.php\"
                  </script>";    
            }
            else {
				// update the student_tb with latest marks from marks_tb		
				$sql = "update student_tb join marks_tb
							on student_tb.rollno = marks_tb.s_roll
							set student_tb.latest_marks = marks_tb.s_marks";
					
				if ($conn->query($sql) === TRUE){
						
					}else{$str = $conn->error; echo"$str";}
					
					
							
				
			// Sem1

			if($semester == "SEM1"){
				$sql = "update student_tb join marks_tb
							on student_tb.rollno = marks_tb.s_roll
							set student_tb.sem1_marks = marks_tb.s_marks";
					
				if ($conn->query($sql) === TRUE){
						
					}else{$str = $conn->error; echo"$str";}
				
			}


// Sem2

			if($semester == "SEM2"){
				$sql = "update student_tb join marks_tb
							on student_tb.rollno = marks_tb.s_roll
							set student_tb.sem2_marks = marks_tb.s_marks";
					
				if ($conn->query($sql) === TRUE){
						
					}else{$str = $conn->error; echo"$str";}
				
			}


// Sem3

			if($semester == "SEM3"){
				$sql = "update student_tb join marks_tb
							on student_tb.rollno = marks_tb.s_roll
							set student_tb.sem3_marks = marks_tb.s_marks";
					
				if ($conn->query($sql) === TRUE){
						
					}else{$str = $conn->error; echo"$str";}
				
			}


// Sem4

			if($semester == "SEM4"){
				$sql = "update student_tb join marks_tb
							on student_tb.rollno = marks_tb.s_roll
							set student_tb.sem4_marks = marks_tb.s_marks";
					
				if ($conn->query($sql) === TRUE){
						
					}else{$str = $conn->error; echo"$str";}
				
			}


// Sem5

			if($semester == "SEM5"){
				$sql = "update student_tb join marks_tb
							on student_tb.rollno = marks_tb.s_roll
							set student_tb.sem5_marks = marks_tb.s_marks";
					
				if ($conn->query($sql) === TRUE){
						
					}else{$str = $conn->error; echo"$str";}
				
			}


// Sem6

			if($semester == "SEM6"){
				$sql = "update student_tb join marks_tb
							on student_tb.rollno = marks_tb.s_roll
							set student_tb.sem6_marks = marks_tb.s_marks";
					
				if ($conn->query($sql) === TRUE){
						
					}else{$str = $conn->error; echo"$str";}
				
			}




				
				
                echo "<script type=\"text/javascript\">
                alert(\"CSV File for $semester has been successfully Imported.\");
                window.location = \"teacher_dept_marks.php\"
              </script>";
            }
               }
          
               fclose($file);  
         }echo "<script type=\"text/javascript\">
                  alert(\"Invalid File:Please Upload CSV File.\");
                  window.location = \"teacher_dept_marks.php\"
                  </script>";  
      }   

      if(isset($_POST["delete_csv"])){
		  
		  
		  
		// truncTE marks_tb  
      $sql = " truncate table marks_tb";
      if ($conn->query($sql) === TRUE) { echo "<script type=\"text/javascript\">
                alert(\"Table cleaned for new Semester Entries\");
                window.location = \"teacher_dept_marks.php\"
              </script>";}
			  else{echo"error";}

}


      
     ?>