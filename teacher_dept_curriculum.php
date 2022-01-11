<!DOCTYPE html>
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
              

     if($category != "Department"){
        header("Location:login_teacher.php");
      }
    
    
      $count_admin = 0;
 $sql = "SELECT count(*) from admin_tb";
            $result = mysqli_query($conn, $sql) or die("Query Failed.");
                           if(mysqli_num_rows($result) > 0){

                                while($row = mysqli_fetch_assoc($result)){
                                 $count_admin = $row['count(*)'];
                                }

                              }

// Get the count of the teachers
$count_teacher =0;
$sql = "SELECT count(*) from teacher_tb";
            $result = mysqli_query($conn, $sql) or die("Query Failed.");
                           if(mysqli_num_rows($result) > 0){

                                while($row = mysqli_fetch_assoc($result)){
                                 $count_teacher = $row['count(*)'];
                                }

                              }


                


// Get the count of the students
$count_student = 0;
$sql = "SELECT count(*) from student_tb";
            $result = mysqli_query($conn, $sql) or die("Query Failed.");
                           if(mysqli_num_rows($result) > 0){

                                while($row = mysqli_fetch_assoc($result)){
                                 $count_student =  $row['count(*)'];
                                }

                              }
             

// Get the count of the data
$count_data = 0;
$sql = "SELECT count(*) from admin_tb";
            $result = mysqli_query($conn, $sql) or die("Query Failed.");
                           if(mysqli_num_rows($result) > 0){

                                while($row = mysqli_fetch_assoc($result)){
                                $count_data =  $row['count(*)'];
                                }

                              }
$first_name = "SELECT first_name FROM teacher_tb WHERE teacher_id = '{$t_id}'";
$result = mysqli_query($conn, $first_name) or die("Query Failed.");
?>
<html>
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

<style >
  
/* Dashed blue border */
hr.new2 {
  border-top: 1px dashed #FFFFFF;
}

</style>
<body class="bg-theme bg-theme1">
 
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
     
  <ul class="navbar-nav align-items-center right-nav-link">
  
   
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="assets\images\profile_img\teacher\<?php echo"$profile";?>" class="img" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="assets\images\profile_img\teacher\<?php echo"$profile";?>" alt="user avatar"></div>
            <div class="media-body">
           <h6 class="mt-2 user-title"><?php echo"$fname $lname";?></h6></a>
            <p class="user-subtitle"><?php echo"$email";?></p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <a href="teacher_dept_profile.php"> <li class="dropdown-item"><i class="zmdi zmdi-account-circle"></i> Profile</li>
          
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


  <!--Start Dashboard Content-->
<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">

     <div class="card">
           <div class="card-body">
           <div class="card-title">Curriculum</div>
           <hr>
            <form action="teacher_dept_curriculum_delete.php" method = "POST" >
          <button  type="submit" name="notice" class="btn btn-primary" style="float: right;" ><i class="fa fa-trash-o"></i> Delete</button>
		
          </form>
			
		<form action = "teacher_dept_curriculum_add_new.php" method = "POST" >
          <button  type="submit" name="notice" class="btn btn-primary" style="float: right;" > + Add New</button>
          </form>



            <br>
            <form>
            <?php
            $s = "select * from curriculam_tb where flag != 1 ORDER BY id DESC";

            $result = mysqli_query($conn , $s);

            $num = mysqli_num_rows($result);

            if ($num != 0) 
            {
              ?>
              <ol style="list-style-type:square;" >
                <?php

                  while ($data = mysqli_fetch_assoc($result)) 

                    {
                ?>
          <div class="form-group">
             <li><label class="form-control-label"><?php echo $data['name'] ; ?></label></li>
             <label class="form-control-label" style="float: right;"><?php echo $data['date'] ; ?></label>
        
              <div class=""><a href="assets\images\curriculum\<?=$data['link']?>" target="_blank">
                  <u><input class="form-control" type="" value="Download" disabled> </u>
                    
                    <!--<button  type="submit" name="curriculum_delete" class="btn btn-primary" style="float: right;" ><i class="zmdi zmdi-attachment text-success"></i>- Delete</button><br>-->
                  </a>
                    
              </div>
          </div>
          <hr class="new2">
          <hr class="new2">
          <?php
      } 
      ?>
        
      <?php

}
else
{
$reg = "ALTER TABLE curriculam_tb AUTO_INCREMENT=1;"; 
mysqli_query($conn , $reg); 
}

?>
          </form>
      
         </div>
         </div>
      </div>

    
    </div>
    <!--End Row-->

  <!--start overlay-->
      <div class="overlay toggle-menu"></div>
    <!--end overlay-->

    </div>
    <!-- End container-fluid-->
    
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
