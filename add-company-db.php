<?php 
		include('db_con.php');
		
		// Escape user inputs for security
		$company_name = mysqli_real_escape_string($conn, $_POST['icompany-name']);
		$address = mysqli_real_escape_string($conn, $_POST['iaddress']);
		$email = mysqli_real_escape_string($conn, $_POST['iemail']);
		$contact = mysqli_real_escape_string($conn, $_POST['icontact']);
 
		// attempt insert query execution
		$sql = "INSERT INTO company (company_name, address, email, contact_no) VALUES ('$company_name', '$address', '$email', '$contact')";
		if(mysqli_query($conn, $sql)){
    		echo "<script> alert('Company Added Successfully'); 
    		window.location = 'view-company.php'; </script>";
		} else{
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    		echo "<script> alert('Company Already Exists! Please Update It'); 
    		window.location = 'add-company.php'; </script>";
		}
		 
// close connection
mysqli_close($conn);
?>