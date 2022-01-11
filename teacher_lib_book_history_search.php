<?php
include 'connection_db.php';
session_start();
 $t_id = $_SESSION["t_id_session"];

      if($t_id == ""){
        header("Location:login_teacher.php");
      }
	  
$_SESSION['keyword'] = "";
$keyword = $_POST['keyword'];
echo "hello $keyword";
$_SESSION['keyword'] = $keyword;

header("Location: teacher_lib_book_history.php");
?>