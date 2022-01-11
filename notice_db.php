
<?php

include 'connection_db.php';

				session_start();
				$notice_txt = $_POST['notice_description'];
				//$notice_img = $_POST['notice_img'];
				$start_date = $_POST['start_date'];
				$end_date = $_POST['end_date'];
				$stud_nos = $_POST['student_no'];
				
if (isset($_POST['submit']) ) {

	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

	
		
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png" , "pdf" , "doc" , "docx"); 

			if ($img_ex_lc!=""){

					if (in_array($img_ex_lc, $allowed_exs)) {
						$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
						$img_upload_path = 'assets/images/notices/'.$new_img_name;
						move_uploaded_file($tmp_name, $img_upload_path);

						// Insert into Database
						$sql = 'insert into notice_tb (notice_txt,notice_img,start_date,end_date,student_no) 
								values("'.$notice_txt.'","'.$new_img_name.'","'.$start_date.'","'.$end_date.'","'.$stud_nos.'")';
						mysqli_query($conn, $sql);
						echo "<script type=\"text/javascript\">
									  alert(\"Notice Added Successfully\");
									  window.close();
									  </script>";

					}
					else {
						echo "<script type=\"text/javascript\">
									  alert(\"You can't upload files of this type.\");
									  window.close();
									  </script>";
						
					}
			}else{
				// Insert into Database
						$sql = 'insert into notice_tb (notice_txt,start_date,end_date,student_no) 
								values("'.$notice_txt.'","'.$start_date.'","'.$end_date.'","'.$stud_nos.'")';
						mysqli_query($conn, $sql);
						echo "<script type=\"text/javascript\">
									  alert(\"Notice Added Successfully\");
									  window.close();
									  </script>";
			}
				
				
		
	}

else {
	echo "<script type=\"text/javascript\">
							  alert(\"unknown error occurred!\");
							  window.close();
							  </script>";
}


	?>
	