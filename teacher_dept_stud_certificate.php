<?php
			include 'connection_db.php';
			session_start();
				
			$roll_no = "";
			$column = "";
					$roll_no = $_POST['roll_no'];
					$column = $_POST['column_name'];
					
					$sql = "select $column from activity_tb where roll_no = '$roll_no'";
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
	echo"<center><img src='assets/images/activity/$filename'  </img></center>";
}


?>
</body>
</html>