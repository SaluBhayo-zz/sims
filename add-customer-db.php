<?php 
		include('db_con.php');
		
		// Escape user inputs for security
		$customer_name = mysqli_real_escape_string($conn, $_POST['icustomer-name']);
		$address = mysqli_real_escape_string($conn, $_POST['iaddress']);
		$email = mysqli_real_escape_string($conn, $_POST['iemail']);
		$contact = mysqli_real_escape_string($conn, $_POST['icontact']);
 
		// attempt insert query execution
		$sql = "INSERT INTO customers (customer_name, address, email, contact_no) VALUES ('$customer_name', '$address', '$email', '$contact')";
		if(mysqli_query($conn, $sql)){
    		echo "<script> alert('Customer Added Successfully'); 
    		window.location = 'view-customer.php'; </script>";
		} else{
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    		echo "<script> alert('Customer Already Exists! Please Update It'); 
    		window.location = 'add-customer.php'; </script>";
		}
		 
// close connection
mysqli_close($conn);
?>