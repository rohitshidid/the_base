<?php
include 'connection_db.php';

$roll = $_POST['roll'];

$sql = "select * from student_tb where rollno = '$roll' ";

$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
											while($row = mysqli_fetch_assoc($result)) {
												$fname = $row['first_name'];
												$lname = $row['last_name'];
												$email = $row['email'];
												$phoneno = $row['phone_no'];
												$name_of_book = $row['name_of_book'];
												$code_of_book = $row['code_of_book'];
												$issue_date = $row['issue_date'];
												$return_date = $row['return_date'];
												$payment_pending = $row['payment_pending'];
												
											}


$name = $fname." ".$lname;
$count =0;
$sql1 = "insert into issued_books_history_tb (rollno,name,email,phone_no,name_of_the_book,code_of_the_book,pending_payment,issue_date,return_date) 
		values ('$roll','$name','$email','$phoneno','$name_of_book','$code_of_book','$payment_pending','$issue_date','$return_date')";
if ($conn->query($sql1) === TRUE) {$count++;}else{ $error = $conn ->error ; echo"$error Query 1 error";}

$sql = "update student_tb set name_of_book= '' , code_of_book = '', issue_date='' , return_date='', payment_pending = '' where rollno = '$roll' ";
	if ($conn->query($sql) === TRUE){
		if($count=1){
			header("Location:teacher_lib_issue_book.php");
		}
		
	
	}else{echo"Query 2 error";}

?>