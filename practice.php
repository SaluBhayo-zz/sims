<?php
session_start();

if ( is_array($_SESSION['orders'])){
  foreach($_SESSION['orders'] as $items){
        echo $items[0]."<br>"; 
      }
    }
else{ echo "<p>You have not selected any book categories
yet</p>";
}
?>