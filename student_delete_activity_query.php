<?php
include 'connection_db.php';

$id= $_POST['id'];

echo"$id";


$sql1 = "delete from activity_tb where id = '$id' ";
if ($conn->query($sql1) === TRUE) {
	header("Location:student_activities.php");
	}else{ 
	$error = $conn ->error ; echo"$error Query 1 error contact the admin. :)";
	}


?>