<!doctype html>


<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
	<br><br><br><br><br>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login Encryp</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	
		      	<form action="<?php $_SERVER['PHP_SELF']; ?>" method ="POST" class="signin-form">
		      		<div class="form-group">
		      			<input type="text" class="form-control" placeholder="Username" name ="user" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" placeholder="Password" name="pass" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit"  name ="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
	            </div>
	          
	          </form>
	         
		      </div>
				</div>
			</div>
		</div>
	</section>
	
	  <?php
   
		include 'connection_db.php';
           
          if(isset($_POST['submit'])){ 
			  
          $user = $_POST['user'];
		
		 
         $pass = $_POST['pass'];
		 
		  $user=strtolower($user);
		  
		  $sql = "SELECT * FROM login_data WHERE username = '{$user}' AND pass = '{$pass}'";
            $result = mysqli_query($conn, $sql) or die("Query Failed.");
                              if(mysqli_num_rows($result) > 0){

                                while($row = mysqli_fetch_assoc($result)){
                                  session_start();
                                     //session_destroy();
                                  $_SESSION["user"] = $user;
                                  //$_SESSION["pass"] = $row['pass'];

                                  header("Location:dashboard.php");
                                }

                              }else{
                 
                              echo '<br><div class="alert alert-danger"><center>Username and Password are not matched.</div>';
                            } 
        }         
         ?>
     

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

