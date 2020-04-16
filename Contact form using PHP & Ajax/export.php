<?php
/*******EDIT LINES 3-8*******/
        include "DB_config.php";
		
      $con=  mysqli_connect($HostName,$UserName,$Password,$DatabaseName);
             //print_r($_POST);   
            $sql="select * from products";
            // $sql2 = "SELECT * FROM tbl_agent_solutions";   
            $res2=mysqli_query($con,$sql);
            $columnHeader = '';  
            $columnHeader = "Id" . "\t" . " First Name" . "\t" . " Last Name" . "\t" . " Email" . "\t" . " Message" . "\t" . " Dare" ;  
            $setData = '';  

			while($row = mysqli_fetch_row($res2)){ 
			
			
				$rowData = '';  
				$rowData .=  '"' . $row[0]. '"' . "\t";  
				$rowData .=  '"' . $row[1]. '"' . "\t";  
				$rowData .=  '"' . $row[2]. '"' . "\t";  
				$rowData .=  '"' . $row[3]. '"' . "\t"; 
                                $rowData .=  '"' . $row[4]. '"' . "\t"; 
                                $rowData .=  '"' . $row[5]. '"' . "\t"; 
				
				
				$setData .= trim($rowData) . "\n";  
			}  


			header("Content-type: application/octet-stream");  
			header("Content-Disposition: attachment; filename=Contact.xls");  
			header("Pragma: no-cache");  
			header("Expires: 0");  
			  
			echo ucwords($columnHeader) . "\n" . $setData . "\n";  

?>