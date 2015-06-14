<?php
 include('db_con.php');

$req = "SELECT product_name "
	."FROM products "
	."WHERE product_name LIKE '".$_REQUEST['term']."%' "; 

$query = mysqli_query($conn,$req);

while($row = mysqli_fetch_array($query))
{
	$results[] = array('label' => $row['product_name']);
}

echo json_encode($results);

?>