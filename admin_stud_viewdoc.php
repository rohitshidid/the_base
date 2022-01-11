<?php
			include 'connection_db.php';
			session_start();
			
			
					$rollno = $_POST['roll'];
					$column = $_POST['column_name'];
					
					$sql = "select $column from student_tb where rollno = '$rollno'";
					//echo "$sql";
					
					/*if ($conn->query($sql) === TRUE) {
					
						echo "success";
					
					}else{
						echo" error contact the database manager";	
					}*/
					
					$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
						while($row = mysqli_fetch_assoc($result)) {
									
								$filename = $row["$column"];
							
						}
					
	
?>
<html>
<body>
<?php
if($filename==""){
echo "$rollno has not uploaded $column";
}else{
	echo"<center><img src='assets/images/documents/$filename'  </img></center>";
}


?>
</body>
</html>