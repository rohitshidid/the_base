<?php
//urlencode($body)

include('libs/phpqrcode/qrlib.php'); 


$roll = $_POST['roll'];
$fname = $_POST['fname'];
$lname = $_POST['last_name'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone_no = $_POST['phone_no'];
$address = $_POST['address'];
$dob = $_POST['dob'];
$blood_group = $_POST['blood_group'];
$nationality = $_POST['nationality'];
$caste = $_POST['caste'];
$code_of_book = $_POST['code_of_book'];
$name_of_book = $_POST['name_of_book'];
$latest_marks = $_POST['latest_marks'];
$issue_date = $_POST['issue_date'];
$return_date = $_POST['return_date'];
$payment_pending = $_POST['payment_pending'];
$sem1_marks = $_POST['sem1_marks'];
$sem2_marks = $_POST['sem2_marks'];
$sem3_marks = $_POST['sem3_marks'];
$sem4_marks = $_POST['sem4_marks'];
$sem5_marks = $_POST['sem5_marks'];
$sem6_marks = $_POST['sem6_marks'];


	$tempDir = 'temp/'; 
	$filename = $roll."_information";
	$codeContents = 
	"	Roll no: $roll  
	Name: $fname $lname  
	Password: $password 
	email: $email  
	Phone no: $phone_no 
	address: $address 
	dob: $dob 
	Blood Group: $blood_group 
	Nationality: $nationality 
	Category: $caste 
	Code of book: $code_of_book 
	Name of book: $name_of_book 
	Semester 1 marks :$sem1_marks 
	Semester 2 marks :$sem2_marks 
	Semester 3 marks :$sem3_marks 
	Semester 4 marks :$sem4_marks 
	Semester 5 marks :$sem5_marks 
	Semester 6 marks :$sem6_marks 
	Latest Marks: $latest_marks 
	Issue Date of book: $issue_date 
	Return Date: $return_date 
	Pending Payment of Book: $payment_pending "; 
	QRcode::png($codeContents, $tempDir.''.$filename.'.png', QR_ECLEVEL_L, 5);

?>
<!DOCTYPE html>
<html lang="en-US">
	<head>
	<title>The Base - QR</title>
	<link rel="icon" href="img/cwit_logo.ico" type="image/png">
	<link rel="stylesheet" href="libs/css/bootstrap.min.css">
	<link rel="stylesheet" href="libs/style.css">
	<script src="libs/navbarclock.js"></script>
	</head>
	<body onload="startTime()">
		
		<div class="myoutput">
			
			<?php
			if(!isset($filename)){
				$filename = "author";
			}
			?>
			<center><div class="input-field">
				<h2 style="text-align:center">QR Code Result: <?php echo"$roll ";?> </h2>
				<center>
					<div class="qrframe" style="border:2px solid black; width:210px; height:210px;">
							<?php echo '<img src="temp/'. @$filename.'.png" style="width:200px; height:200px;"><br>'; ?>
					</div>
					<a class="btn btn-primary submitBtn" style="width:210px; margin:5px 0;" href="download.php?file=<?php echo $filename; ?>.png ">Download QR Code</a>
				</center>
			</div>
			<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2021 The Base
        </div>
      </div>
    </footer>
		</div>
	</body>
	
</html>