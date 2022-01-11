<?php
include 'connection_db.php';
session_start();

$sender=$_SESSION['user'];
$receiver=$_SESSION['receiver'];

// sender messages
$sql = "delete from chat where sender = '".$sender."' and receiver = '".$receiver."';";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

//receiver messages
$sql = "delete from chat where sender = '".$receiver."' and receiver = '".$sender."';";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header("Location:chat.php");
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>