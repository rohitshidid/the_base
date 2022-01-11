<?php
include 'connection_db.php';
session_start();
//session_destroy();
$_SESSION['reciver']="";
$user = $_SESSION["user"];




if($user==""){
 header("Location:index.php");
}



$sql = "SELECT * from login_data";
						$result = mysqli_query($conn, $sql) or die("Query Failed.");
                           if(mysqli_num_rows($result) > 0){

                                while($row = mysqli_fetch_assoc($result)){
                                 $name = $row['username'];  
								
                                }

                              }



?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>ENC</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->

<div class="container" >
	<div class="row no-gutters" >
	  <div class="col-md-12 border-right" style="height: 2000px;
    overflow-y: scroll;">
		<div class="settings-tray">
		  <?php echo "Welcome $user";?>
		  <span class="settings-tray--right">
			
			 &nbsp;&nbsp;&nbsp;&nbsp;<a href ="logout.php"><img src="ext_icons/logout.png" height="50px"></a>
			
		  </span>
		</div>
		<div class="search-box">
		  <div class="input-wrapper">
			<i class="material-icons">search</i>
			<input placeholder="Search Disabled" type="text" disabled>
		  </div>
		</div>
		
        <?php
        
        $sql = "SELECT * from login_data order by username asc";
						$result = mysqli_query($conn, $sql) or die("Query Failed.");
                           if(mysqli_num_rows($result) > 0){

                                while($row = mysqli_fetch_assoc($result)){
                                 $name = $row['username'];
                                 if($name == $user){continue;}
                                      echo"
                                        <div class='friend-drawer friend-drawer--onhover '>  
                                          <img class='profile-image' src='images/profile_imgs/sample_profile_img.png'>
                                          <div class='text'>
                                            <form action = 'receiver_post_to_session.php' method = 'POST'>
												<input type='hidden' value='$row[username]'
                                                name= 'receiver'>												
												<input type='hidden' value='profile_img' name = 'column_name'>
												<button type ='submit' class='btn btn-primary' value='submit'>
                                            
                                            <h6>" .$name."</h6>
                                            </button></form>
                                            
                                            
                                            <p class='text-muted'>Alpha Tester</p>
                                          </div>
                                          <span class='time text-muted small'>00:00</span>
                                        </div>
                                        
                                        <hr>
                                        
                                        ";
                                        
								
                                }

                              }

        
        
        
        
       
		?>
        
        
	</div>
    
    
      
	</div>
  </div>

  <script>
  function myFunction(strname) {
   alert('strname');
  var x = document.getElementById("myDIV");
  var y = document.getElementById("myDIV2");
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display = "none";
  } else {
    x.style.display = "none";
    y.style.display = "block";
  }
}
  </script>

<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
