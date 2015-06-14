<?php 
session_start();
$cars = array
   (
   array("Volvo",22,18),
   array("BMW",15,13),
   array("Saab",5,2),
   array("Land Rover",17,15)
   );
   echo "array created";
   

if ( ! isset($_SESSION['orders'])){
$_SESSION['orders']=array();
echo "session variable created";
}
if ( is_array($cars)){
echo "items merged";
$totalorder=array_merge($_SESSION['orders'],$cars);
$_SESSION['orders'] = array_unique($totalorder,SORT_REGULAR);
}
?>