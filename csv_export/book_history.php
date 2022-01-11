<html>
    <head>
        <title>The Base - Exporter</title>
    </head>
    <body>
        <?php 
			
			session_start();
           
		 
            $keyword = $_SESSION['keyword'];
			
			include 'connection_db.php';
			
            $rollno = $name = $email =  $phone_no="";      
            
            $issue_date = "";
            $return_date ="";
            $payment_pending = "";
            $code_of_book = "";
            $name_of_book = "";
            
            $file="";
            $res = mysqli_query($conn,"SELECT rollno,name,email,phone_no,name_of_the_book,code_of_the_book,issue_date,return_date,pending_payment
			from issued_books_history_tb 
			where (rollno like '%$keyword%' or name_of_the_book like '%$keyword%' or name like '%$keyword%' or code_of_the_book like '%$keyword%' ) order by rollno asc ");
			if(mysqli_num_rows($res)>0){
                

            ?>


               <table id="dataTable" class="table">
                    <tr>
                    <td>Roll no              </td>
                    <td>name              </td>
		           
		            
		           
		            <td>Email                </td>
		            <td>Phone NO             </td>

		           
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
		                <td><?php echo $row['name'] ;?></td>
		               

		                <td><?php echo $row['email']; ?></td>
		                <td><?php echo $row['phone_no']; ?></td>
		              

		                
		                <td><?php echo $row['name_of_the_book']; ?></td>

		                <td><?php echo $row['code_of_the_book']; ?></td>
		                <td><?php echo $row['issue_date']; ?></td>
		                <td><?php echo $row['return_date']; ?></td>
		                <td><?php echo $row['pending_payment']; ?></td>
		                
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