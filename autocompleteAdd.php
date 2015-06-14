<?php
 include('db_con.php');

$req = "SELECT address "
	."FROM customers "
	."WHERE address LIKE '".$_REQUEST['term']."%' "; 

$query = mysqli_query($conn,$req);

while($row = mysqli_fetch_array($query))
{
	$results[] = array('label' => $row['address']);
}

echo json_encode($results);

?>