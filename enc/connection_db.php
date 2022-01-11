<?php $servername = "localhost";
							$username = "a1625v1r";
							$password = "Rohit@@2002";
							$dbname = "a1625v1r_ency";
							// Create connection
							$conn = new mysqli($servername, $username, $password, $dbname);
							// Check connection
							if ($conn->connect_error) {
								die("Connection failed: " . $conn->connect_error);
							
							}else
							
?>