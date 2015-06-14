<?php 
		include('db_con.php');
		
		// Escape user inputs for security
		$product_name = mysqli_real_escape_string($conn, $_POST['uproduct-name']);
		$company = mysqli_real_escape_string($conn, $_POST['ucompany']);
		$quantity = mysqli_real_escape_string($conn, $_POST['uquantity']);
		$quantity2 = 0;

		$sql = "Select quantity from products WHERE product_name = '$product_name' and company = '$company'";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0)    
                    while($row = mysqli_fetch_row($result)) {  
                    $quantity2 = (int)$row[0];     
                }
                $quantity = $quantity2 + $quantity;
		// attempt insert query execution
		$sql = "UPDATE Products SET quantity =  $quantity WHERE product_name = '$product_name' and company = '$company'";
		mysqli_query($conn, $sql);
		if (mysqli_affected_rows($conn) > 0) {
    		echo "<script> alert('Record Updated Successfully'); 
    		window.location = 'index.php'; </script>";

		} else {
   			echo "<script> alert('Record Not Updated'); 
    		window.location = 'add-stock.php'; </script>";
	}

mysqli_close($conn);
?>