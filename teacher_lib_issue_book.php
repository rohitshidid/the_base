<!DOCTYPE html>
<?php 		
			include 'connection_db.php'; 
			session_start();
      $t_id = $_SESSION["t_id_session"];
	  
	  
	   if(isset($_SESSION['keyword'])){
	
}else{
	$_SESSION['keyword']="";
}

$profile= "";


$fname = "";
$lname = "";
$email = "";
$rollno = "";
$name_of_book ="";
$issue_date ="";
$return_date ="";
$code_of_book ="";
$name_of_book ="";

$t_password ="";

 $sql = "SELECT * from teacher_tb where teacher_id = '$t_id'";
            $result = mysqli_query($conn, $sql) or die("Query Failed.");
                           if(mysqli_num_rows($result) > 0){

                                while($row = mysqli_fetch_assoc($result)){
                                 $fname = $row['first_name'];
                                 $lname = $row['last_name'];
                                 $email = $row['email'];
                                 $profile = $row['profile_img'];
                                 $t_password = $row['t_password'];
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
  <title>The Base - Teacher</title>
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
        <li class="sidebar-header"><h5>MAIN NAVIGATION (LIBRARY STAFF)</h5></li>
	  <li>
        <a href="teacher_lib_dashboard.php">
          <i class="zmdi zmdi-view-dashboard"></i>  <span>Dashboard</span>
        </a>
      </li>
      <li>
        <a href="teacher_lib_profile.php">
         <i class="zmdi zmdi-face"></i> <span>Profile</span>
        </a>
      </li>

   
      <li>
        <a href="teacher_lib_stud.php">
          <i class="zmdi zmdi-format-list-bulleted"></i> <span>Student info</span>
        </a>
      </li>

      <li>
        <a href="teacher_lib_issue_book.php">
          <i class="zmdi zmdi-grid"></i> <span>Update books Data</span>
        </a>
      </li>

        <li>
        <a href="teacher_lib_book_history.php">
          <i class="zmdi zmdi-grid"></i> <span>Book History</span>
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
          <h6 class="mt-2 user-title"><?php echo"$fname $lname"; ?></h6></a>
            <p class="user-subtitle"><?php echo"$email";?></p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <a href="teacher_lib_profile.php"> <li class="dropdown-item"><i class="zmdi zmdi-account-circle"></i> Profile</li>
        <li class="dropdown-divider"></li>
		<a href="login_teacher.php">   
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

    <?php
							   //query
							   
						
					
							   
							   
							   
							   
							   
                 
					if(isset($_POST['submit'])){
							$count = 0;
							$del = 0;
							$password_u= $_POST['password_u'];
							$issue_date = $_POST['issue_date'];
							$return_date = $_POST['return_date'];
							$name_of_book = $_POST['name_of_book'];
							$code_of_book = $_POST['code_of_book'];
							$rollno = $_POST['rollno'];
						   
			   
			   //get student data
			   $sql = "SELECT * from student_tb where rollno = '$rollno'";
            $result = mysqli_query($conn, $sql) or die("Query Failed.");
                           if(mysqli_num_rows($result) > 0){

                                while($row = mysqli_fetch_assoc($result)){
                                 $name_of_book_u =  $row['name_of_book'];                               }

                             }
			   
			   
				
			   
			   
			   
			   
			   
			   
			   
			   
			  
						if($rollno != ""){
						
						 if($name_of_book_u == ""){
								// Password
								if ($t_password == $password_u &&  $password_u != ""){
                       
								// Issue Date
								if ($issue_date != ""){
								  $sql = " Update student_tb set issue_date = '$issue_date' where rollno = '$rollno' ";
									  if ($conn->query($sql) === TRUE) {
			  
										$count++;
									  
									  }else{
									  echo "error1";
									  }
								  }else{
									 $sql = " Update student_tb set issue_date = '' where rollno = '$rollno' ";
									  if ($conn->query($sql) === TRUE) {$del++;}
									  $sql = " Update student_tb set issue_date = '' where rollno = '$rollno' ";
									  if ($conn->query($sql) === TRUE) {$del++;}
									}
									
									
									
									
									
									// Return Date
								if ($return_date != ""){
								  $sql = " Update student_tb set return_date = '$return_date' where rollno = '$rollno' ";
									  if ($conn->query($sql) === TRUE) {
										$count++;
									  
									  }else{
									  echo "error2";
									  }
								  }else{
									$sql = " Update student_tb set return_date = '' where rollno = '$rollno' ";
									  if ($conn->query($sql) === TRUE) {$del++;}
									}
									
									
									
									
									
								// Name Of Book
								if ($name_of_book != ""){
								  $sql = " Update student_tb set name_of_book = '$name_of_book' where rollno = '$rollno' ";
									  if ($conn->query($sql) === TRUE) {
										$count++;
										
									  }else{
									  echo "error3";
									  }
								  }else{
									 $sql = " Update student_tb set name_of_book = '' where rollno = '$rollno' ";
									  if ($conn->query($sql) === TRUE) {$del++;}
									}
									
									
									
									
								// Code Of Book
								if ($code_of_book != ""){
								  $sql = " Update student_tb set code_of_book = '$code_of_book' where rollno = '$rollno' ";
									  if ($conn->query($sql) === TRUE) {
										$count++;
										
									  }else{
									  
									  
										
									  }
								  }else{
										$sql = " Update student_tb set code_of_book = '' where rollno = '$rollno' ";
										if ($conn->query($sql) === TRUE) {$del++; echo"Rerr";}
										$sql = " Update student_tb set payment_pending = '' where rollno = '$rollno' ";
										if ($conn->query($sql) === TRUE) {$del++;}
									}
								  
								  
								  // not working, displaying both conditions count as well as del 
								 if($count= 4){ 
								  echo "<div class='alert alert-danger'><center>Book Status of $rollno Updated Successfully</div>";	
								 }
								 else if($del= 5){ 
								  echo "<div class='alert alert-danger'><center>$rollno Book received</div>";	
								 }
								 
								}else{
								echo "<div class='alert alert-danger'><center>Confirm Password Incorrect</div>";	

								}
							}else{
								
								echo "<div class='alert alert-danger'><center>Book Already issued to $rollno</div>";	
								
							}
						}else{
							echo "<div class='alert alert-danger'><center>Please enter Roll number</div>";	

									
						}
								
					
			   	
						
						
						
						
						
						
					
					 
					
					
					
					
					}
					?>		

							
								
								
								
															
					
					
					
         <div class="card">
           <div class="card-body">
           <div class="card-title">Book Management</div>
		   <?php // view issued books
					
						$sql = "select * from student_tb where return_date != '' and payment_pending ='' ";
					
						 $today_date = date('Y-m-d');
						$stud_roll ="";
						$fined_stud = 0;
						$stud_return_date ="";
						$stud_pending_payment ="";
						$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
											while($row = mysqli_fetch_assoc($result)) {
												$stud_roll = $row['rollno'];
												$stud_return_date = $row['return_date'];
												$stud_pending_payment = $row['payment_pending'];
												
												if($today_date > $stud_return_date){
													$sql1 = "update student_tb set payment_pending = '50' where rollno = $stud_roll";
													if ($conn->query($sql1) === TRUE) { $fined_stud++;}
												}
										 
																
										} 
										$str = $conn->error;
										echo "$str";
										echo "<div>$fined_stud student(s) fined </div>";
					?>
           <hr>
            <form  action="<?php $_SERVER['PHP_SELF']; ?>" method ="POST">
           <div class="form-group">
            <label for="input-1" >Enrollment No.</label>
            <input name ="rollno" type="text" class="form-control" id="input-1" placeholder="Enter Your enrollment No." required>
           </div>
           <div class="form-group">
            <label for="input-2">Issue Date</label>
            <input name ="issue_date" type="date" class="form-control" id="input-2" placeholder="Enter Your Issue Date" required>
           </div>
           <div class="form-group">
            <label for="input-3">Return Date</label>
            <input name ="return_date" type="date" class="form-control" id="input-3" placeholder="Enter Your Return Date" required>
           </div>
           <div class="form-group">
            <label for="input-4">Name of Book</label>
            <input name ="name_of_book" type="text" class="form-control" id="input-4" placeholder="Enter Name of Book" required>
           </div>
             <div class="form-group">
            <label for="input-3">Code of Book</label>
            <input name ="code_of_book" type="text" class="form-control" id="input-3" placeholder="Enter Your Code of Book" required>
           </div>
           
           <div class="form-group">
            <label for="input-5">Enter Password</label>
            <input name ="password_u" type="password" class="form-control" id="input-5" placeholder="Enter Password" required>
           </div>
		   
		    
           <div class="form-group">
           <center> <button type="submit" name ="submit" class="btn btn-light px-5"><i class="zmdi zmdi-book"></i> Issue Book</button>&nbsp;&nbsp;
           <br><br>
			</form>
			<form action= "<?php $_SERVER['PHP_SELF'];?>" method ="POST">
            <center><button type="submit" name ="view_issued_books" class="btn btn-light px-5"><i class="icon-lock"></i> View Issued Books</button>
			</form >	
			<br><br>
			

		 </div>
         </div>
         </div>
		</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
          <div class="card">
				<div class="card-body">
               

			   <?php 
			 
			   
			   
			   
						if(isset($_POST['view_issued_books'])){
					
						
						
						
						echo'
							  <h5 class="card-title">Issued Books</h5>
							   
							  <div class="table-responsive">
							  <table class="table">
							  <table class="table table-hover">
								<thead>
								  <tr>
										<th scope="col">#</th>
										<th scope="col"><center>First</th>
										<th scope="col"><center>Last</th>
										<th scope="col"><center>Roll no</th>
										<th scope="col"><center>Email</th>
										<th scope="col"><center>Phone NO</th>
										<th scope="col"><center>Name of the Book</th>
										<th scope="col"><center>Code of the Book</th>
										<th scope="col"><center>Issue Date</th>
										<th scope="col"><center>Return Date</th>
										<th scope="col"><center>Pending Book payments</th>
										<th scope="col"><center>Status</th>
										 
								  </tr>
								</thead>';
					
						
						
						
						
						
						 //$keyword = $_SESSION['keyword'];
						 $keyword = "";
						 if ($keyword == ""){
							 $sql = "select * from student_tb where code_of_book != '' ";
						 }else{
							 $sql = "select * from student_tb where rollno like '%$keyword%' and flag = 1 order by rollno asc ";
						 }
						
						
										
											$count = 1;
											
											$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
											while($row = mysqli_fetch_assoc($result)) {
												echo "<tr><td> <center>".$count." </td><td><center>".$row['first_name']
												." </td><td><center>".$row['last_name']
												." </td><td><center>".$row['rollno']
												." </td><td><center>".$row['email']
												." </td><td><center>".$row['phone_no']
												." </td><td><center>".$row['name_of_book']
												." </td><td><center>".$row['code_of_book']
												." </td><td><center>".$row['issue_date']
												." </td><td><center>".$row['return_date']
												." </td><td><center>".$row['payment_pending']
												." </td><td><center>".$row['status']
												." </td><td><center>"."<form action = 'teacher_lib_book_received_query.php' method = 'POST' >
												<input type='hidden' value='$row[rollno]' name = 'roll'>
												<button type ='submit' class='btn btn-primary' value='submit]'>Book Received</button></form>"
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


   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2021 The Base.
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
