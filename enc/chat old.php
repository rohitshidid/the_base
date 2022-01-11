<!DOCTYPE html>

<?php
include 'connection_db.php';
session_start();
//session_destroy();

$user = $_SESSION["user"];


    $receiver= $_POST['receiver'];


if($receiver!=""){
    $_SESSION['receiver']=$receiver;
    
}




if($user==""){
 header("Location:index.php");
}

?>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>ENC</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<center>
	  <div class="col-md-12" >
		<div class="settings-tray">
			<div class="friend-drawer no-gutters friend-drawer--grey">
			<img class="profile-image" src='images/profile_imgs/sample_profile_img.png' alt=''>
			<div class="text">
			  <h6><?php echo"$receiver"; ?></h6>
			  <p class="text-muted">Alpha tester</p>
			</div>
			<span class="settings-tray--right">
			 <a href=""> <i class="material-icons">cached</i></a>
			  <i class="material-icons"src="ext_icons/exit_icon.png" >message</i>
			  &nbsp;&nbsp;&nbsp;&nbsp;<a href ="logout.php"><img src="ext_icons/exit_icon.png" height="22px"></a>
			</span>
		  </div>
		</div>
		<div class="chat-panel" style="height: 2000px;
    overflow-y: scroll;">
    <?php
    
    
    
    $sql = "SELECT * from chat";
						$result = mysqli_query($conn, $sql) or die("Query Failed.");
                           if(mysqli_num_rows($result) > 0){

                                while($row = mysqli_fetch_assoc($result)){
                              
                                // received messages
                               if($row['sender']=="$receiver " && $row['receiver']=="$user"){
                               
                               echo"
                                <div class='row no-gutters'>
                                    <div class='col-md-9'>
                                      <div class='chat-bubble chat-bubble--left'>".
                                        $row['message']
                                      ."</div>
                                    </div>
                                  </div>
                                ";
                                
                                }
                                
                                else if($row['sender']=="$user" && $row['receiver']=="$receiver ")
                                {
                                echo"   
                                  <div class='row no-gutters'>
                                    <div class='col-md-9 offset-md-3 '>
                                      <div class='chat-bubble chat-bubble--right'>"
                                        .$row['message'].
                                      "</div>
                                    </div>
                                  </div> 
                                    ";
                                    
                                }
                                
                                }
                           }
                           
                           
                           
                           
                           
                                    
    
    
    
    
    
    ?>
		 <!-- <div class="row no-gutters">
			<div class="col-md-9">
			  <div class="chat-bubble chat-bubble--left">
				Hello dsssssssssss ssssssssssss ssssss sds ds ds ds ds d s dude!
			  </div>
			</div>
		  </div>
		  <div class="row no-gutters">
			<div class="col-md-9 offset-md-3 ">
			  <div class="chat-bubble chat-bubble--right">
				dfsfs d fd  d fds see e efsef e fs 
			  </div>
			</div>
		  </div> 
          -->
		  
          <!-- send button -->
          
		  <div class="row">
			<div class="col-12">
			  <div class="chat-box-tray">
				<!-- <i class="material-icons">sentiment_very_satisfied</i> -->
				<input type="text" placeholder="Type your message here...">
				
				<i class="material-icons">send</i>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
      </center>
      </body>