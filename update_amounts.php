<?php 
			include('db_con.php');
			$ci = $_POST['customerid'];//Customer ID
			$ma = $_POST['remAmount']; //Remaining Amount from Current Bill + Previous Bill;
			$ma1 =$_POST['remAmount1'];//Remainging Amount from Current Bill
			$ra = $_POST['recAmount']; //Recieved Amount from Current Bill
			$bi = $_POST['billid'];	 //Current Bill's ID
			$sql = "UPDATE customers SET remaining_amount = '$ma' WHERE customer_id = $ci";
			$conn->query($sql);

			$sql = "UPDATE bill SET Rec_Amount = '$ra', Rem_Amount = '$ma1' WHERE billID = $bi";
			$conn->query($sql);
			echo "Bill Created Successfully";
?>