<?php

session_Start();
$_SESSION['receiver']=$_POST['receiver'];

header("location:chat.php");



?>