<?php
include 'connection_db.php';
session_start();


$message=$_POST['message'];
if($message==""){
    $message="empty hai";
    header("Location:chat.php");
    goto end;
}
    


$sender=$_SESSION['user'];
$receiver=$_SESSION['receiver'];
date_default_timezone_set('Asia/Kolkata');
$time=date("d/m/Y H:i:s");

$sql = "INSERT INTO chat(sender,receiver,message,time)values('".$sender."','".$receiver."','".$message."','".$time."');";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header("Location:chat.php");
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
end:
header("Location:chat.php");




?>