<?php
include 'connection_db.php';
$name = $_POST['name'];
$link = $_POST['link'];
$id = $_POST['id'];
$value = $_POST['val'];


if($value == ""){
	
	$sql = "UPDATE `curriculam_tb` SET `flag`='1' WHERE name = '$name' AND link = '$link' AND id = '$id'";
	if ($conn->query($sql) === TRUE) {
		header("Location:teacher_dept_curriculum_delete.php");
	}else{
		echo "Error, Please contact the database manager";
	}
	
}else{
	$sql = "UPDATE `curriculam_tb` SET `flag`='1' WHERE name = '$name' AND link = '$link' AND id = '$id' ";
	if ($conn->query($sql) === TRUE) {
		header("Location:teacher_dept_curriculum_delete.php");
	}else{
		echo "Error, Please contact the database manager";
	}
}


?>