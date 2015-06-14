<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "<script> alert('Connected Successfully'); </script>";

$db_selected = mysqli_select_db($conn,'sims_db');
		if (!$db_selected) {
    		die ('Can\'t use sims_db : ' . mysql_error());
		}
		
?>