<?php
include 'connection_db.php';
session_start();
$username = $_SESSION["a_username_session"];
$password = $_SESSION["a_password_session"];

if ($username==""){
	header("Location:login_admin.php");
}
$id = $_POST['teacher_id'];
echo"$id";

$sql = "update teacher_tb set flag = 1 where teacher_id = '$id'";
if ($conn->query($sql) === TRUE) {
	header("Location:admin_teacher_delete.php");
}else{
	echo "Error deleting, Please contact the database manager";
}
?>