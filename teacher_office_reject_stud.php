<?php
include 'connection_db.php';
$value = $_POST['val'];
$roll = $_POST['roll'];

$comment_text = $_POST['comment_text'];


if($value == "Accept"){
	
	$sql = "update student_tb set flag = 1,status = 'Verified', comment = 'Basic Profile Completed' where rollno = '$roll' ";
	if ($conn->query($sql) === TRUE) {
		header("Location:teacher_office_verify_documents.php");
	}else{
		echo "Error, Please contact the database manager";
	}
	
}else{
	$sql = "update student_tb set flag = 0, comment = '$comment_text', status = 'Rejected' where rollno = '$roll' ";
	if ($conn->query($sql) === TRUE) {
		header("Location:teacher_office_verify_documents.php");
	}else{
		echo "Error, Please contact the database manager";
	}
}
echo $comment_text;

?>