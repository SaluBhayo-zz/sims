<?php
 include('db_con.php');

$req = "SELECT company "
	."FROM products "
	."WHERE company LIKE '".$_REQUEST['term']."%' "; 

$query = mysqli_query($conn,$req);

while($row = mysqli_fetch_array($query))
{
	$results[] = array('label' => $row['company']);
}

echo json_encode($results);

?>