<html>
    <head>
        <title>The Base - Exporter</title>
    </head>
    <body>
        <?php 
			
			session_start();
           
		 
            $keyword = $_SESSION['keyword'];
			
			include 'connection_db.php';
			
            $roll = $fname = $lname = $password = $caste = $email = $phone_no = $address = $dob ="";      
            $blood_group = "";
            $nationality = "";           
            $issue_date = "";
            $return_date ="";
            $payment_pending = "";
            $code_of_book = "";
            $name_of_book = "";
            $latest_marks = "";
            $sem1_marks = "";
            $sem2_marks = "";
            $sem3_marks = "";
            $sem4_marks = "";
            $sem5_marks = "";
            $sem6_marks = "";
            $file="";
            $res = mysqli_query($conn,"SELECT rollno,first_name,last_name,email,phone_no,address,dob,blood_group,nationality,caste,latest_marks,sem1_marks,sem2_marks,sem3_marks,sem4_marks,sem5_marks,sem6_marks,name_of_book,code_of_book,issue_date,return_date,payment_pending
			FROM student_tb 
			where (rollno like '%$keyword%' or caste like '%$keyword%' or first_name like '%$keyword%'or last_name like '%$keyword%') and flag = 0 order by rollno asc ");
            if(mysqli_num_rows($res)>0){
                

            ?>


               <table id="dataTable" class="table">
                    <tr>
                    <td>Roll no              </td>
                    <td>First                </td>
		            <td>Last                 </td>
		            
		           
		            <td>Email                </td>
		            <td>Phone NO             </td>

		            <td>Address              </td>
		            <td>DOB                  </td>
		            <td>Blood Group          </td>

		            <td>Nationality          </td>
		            <td>Category                </td>
		            <td>Latest Percentage    </td>

		            <td>Name of the Book     </td>
		            <td>Code of the Book     </td>
		            <td>Issue Date           </td>

		            <td>Return Date          </td>
		            <td>Pending Book payments</td>
                    
                </tr>
<?php while($row = mysqli_fetch_assoc($res)){
    
    ?>

               
                    <tr>
		                <td><?php echo $row['rollno'] ;?></td>
		                <td><?php echo $row['first_name'] ;?></td>
		                <td><?php echo $row['last_name'] ;?></td>

		                <td><?php echo $row['email']; ?></td>
		                <td><?php echo $row['phone_no']; ?></td>
		                <td><?php echo $row['address']; ?></td>

		                <td><?php echo $row['dob']; ?></td>
		                <td><?php echo $row['blood_group']; ?></td>
		                <td><?php echo $row['nationality']; ?></td>

		                <td><?php echo $row['caste']; ?></td>
		                <td><?php echo $row['latest_marks']; ?></td>
		                <td><?php echo $row['name_of_book']; ?></td>

		                <td><?php echo $row['code_of_book']; ?></td>
		                <td><?php echo $row['issue_date']; ?></td>
		                <td><?php echo $row['return_date']; ?></td>

		                <td><?php echo $row['payment_pending']; ?></td>
		                <td><?php echo $row['sem6_marks']; ?></td>
                    </tr>
<?php 
}?>
                 
                </table>

                <?php
                
            }
            else{
                $html = "Data Not Found";
            }
            ?>
<button id="btnExportToCsv" type="button" class="button" value = "true">Export to CSV</button>
<script src="TableCSVExporter.js"></script>
    <script>
        const dataTable = document.getElementById("dataTable");
        const btnExportToCsv = document.getElementById("btnExportToCsv");

       // btnExportToCsv.addEventListener("click", () => {
            const exporter = new TableCSVExporter(dataTable);
            const csvOutput = exporter.convertToCSV();
            const csvBlob = new Blob([csvOutput], { type: "text/csv" });
            const blobUrl = URL.createObjectURL(csvBlob);
            const anchorElement = document.createElement("a");

            anchorElement.href = blobUrl;
            anchorElement.download = '<?php echo"$keyword"; ?>_keyword_export.csv';
            anchorElement.click();
			
            setTimeout(() => {
                URL.revokeObjectURL(blobUrl);
            }, 500);
			
        //});
		window.close();
	</script>
	
	
    </body>
</html>