<?php
include 'connection_db.php';
session_start();
$username = $_SESSION["a_username_session"];
$password = $_SESSION["a_password_session"];

if ($username==""){
	header("Location:login_admin.php");
}
$_SESSION['keyword'] = "";
$keyword = $_POST['keyword'];
echo "hello $keyword";
$_SESSION['keyword'] = $keyword;

header("Location: admin_stud.php");


?>