<?php
			include 'connection_db.php';
			session_start();
			
			
					$id = $_POST['id'];
					
					$sql = "select certificate from activity_tb where id = '$id'";
					//echo "$sql";
					
					/*if ($conn->query($sql) === TRUE) {
					
						echo "success";
					
					}else{
						echo" error contact the database manager";	
					}*/
					
					$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
						while($row = mysqli_fetch_assoc($result)) {
									
								$filename = $row["certificate"];
							
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