<!DOCTYPE html>



<?php
include 'connection_db.php';
session_start();
//session_destroy();

$user = $_SESSION["user"];






$receiver=$_SESSION['receiver'];



if($user==""){
 header("Location:index.php");
}

?>



<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>ENC</title>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge"><link rel="stylesheet" href="./style2.css">

</head>
<body>
<!-- partial:index.partial.html -->
<section class="msger">
  <header class="msger-header">
    <div class="msger-header-title">
      <i class="fas fa-comment-alt"></i><?php echo"$receiver"; ?>
    </div>
    <div class="msger-header-options">
      <span><i class="fas fa-cog"></i></span>
    </div>
  </header>

  <main class="msger-chat">
  
  
   <?php
    
   
    
    $sql = "SELECT * from chat";
						$result = mysqli_query($conn, $sql) or die("Query Failed.");
                           if(mysqli_num_rows($result) > 0){

                                while($row = mysqli_fetch_assoc($result)){
                              
                                // received messages
                               if($row['sender']=="$receiver" && $row['receiver']=="$user"){
                               
                               echo"
                                <div class='msg left-msg'>
                                  <div
                                   class='msg-img'
                                   style='background-image: url(https://image.flaticon.com/icons/svg/327/327779.svg)'
                                  ></div>

                                  <div class='msg-bubble'>
                                    <div class='msg-info'>
                                      <div class='msg-info-name'>$receiver</div>
                                      <div class='msg-info-time'>$row[time]</div>
                                    </div>

                                    <div class='msg-text'>".
                                      $row['message']
                                    ."</div>
                                  </div>
                                </div>
    
                                ";
                                
                                }
                                //sent messages
                                else if($row['sender']=="$user" && $row['receiver']=="$receiver")
                                {
                                echo"   <div class='msg right-msg'>
                                          <div
                                           class='msg-img'
                                           style='background-image: url(https://image.flaticon.com/icons/svg/145/145867.svg)'
                                          ></div>

                                          <div class='msg-bubble'>
                                            <div class='msg-info'>
                                              <div class='msg-info-name'>$user</div>
                                              <div class='msg-info-time'>$row[time]</div>
                                            </div>

                                            <div class='msg-text'>".
                                             $row['message']
                                           ."</div>
                                          </div>
                                        </div>
                                  
                                    ";
                                    
                                }
                                
                                }
                           }
                          

                           
                           
                           
                           
                                    
    
    
    
    
    
    ?>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <!--
    <div class="msg left-msg">
      <div
       class="msg-img"
       style="background-image: url(https://image.flaticon.com/icons/svg/327/327779.svg)"
      ></div>

      <div class="msg-bubble">
        <div class="msg-info">
          <div class="msg-info-name">BOT</div>
          <div class="msg-info-time">12:45</div>
        </div>

        <div class="msg-text">
          Hi, welcome to SimpleChat! Go ahead and send me a message. 😄
        </div>
      </div>
    </div>
    
    

    <div class="msg right-msg">
      <div
       class="msg-img"
       style="background-image: url(https://image.flaticon.com/icons/svg/145/145867.svg)"
      ></div>

      <div class="msg-bubble">
        <div class="msg-info">
          <div class="msg-info-name">Sajad</div>
          <div class="msg-info-time">12:46</div>
        </div>

        <div class="msg-text">
          You can change your name in JS section!
        </div>
      </div>
    </div>
    -->
    
    
    
    
  </main>

  <form class="msger-inputarea" action="send_button.php" method="POST">
    <input type="text" class="msger-input" placeholder="Enter your message..." name="message">
    <button type="submit" class="msger-send-btn">Send/fetch</button>
  </form>
  <form class="msger-inputarea" action="delete_button.php" method="POST">
      <a href="dashboard.php"> Back </a>
  <button type="submit" class="msger-send-btn">Delete all</button>
  
  </form>
</section>
<!-- partial 
  <script src='https://use.fontawesome.com/releases/v5.0.13/js/all.js'></script><script  src="./script2.js"></script>
-->
</body>
</html>

