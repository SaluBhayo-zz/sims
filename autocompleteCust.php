<?php
 include('db_con.php');

$req = "SELECT customer_name "
	."FROM customers "
	."WHERE customer_name LIKE '".$_REQUEST['term']."%' "; 

$query = mysqli_query($conn,$req);

while($row = mysqli_fetch_array($query))
{
	$results[] = array('label' => $row['customer_name']);
}

echo json_encode($results);

?>