<?php 
		include('db_con.php');
		
		// Escape user inputs for security
		$product_name = mysqli_real_escape_string($conn, $_POST['iproduct-name']);
		$company = mysqli_real_escape_string($conn, $_POST['icompany']);
		$quantity = mysqli_real_escape_string($conn, $_POST['iquantity']);
		$price = mysqli_real_escape_string($conn, $_POST['iprice']);
 
		// attempt insert query execution
		$sql = "INSERT INTO products (product_name, company, quantity, price) VALUES ('$product_name', '$company', $quantity, $price)";
		if(mysqli_query($conn, $sql)){
    		echo "<script> alert('Record Added Successfully'); 
    		window.location = 'index.php'; </script>";
		} else{
    		echo "<script> alert('Record Already Exists! Please Update It'); 
    		window.location = 'add-stock.php'; </script>";
		}
		 
// close connection
mysqli_close($conn);
?>