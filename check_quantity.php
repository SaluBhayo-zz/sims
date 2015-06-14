<?php 
					include('db_con.php');
					$itemname = $_POST['item1'];  
                	$company = $_POST['comp1'];
					$sql = "Select quantity from products WHERE product_name = '$itemname' and company = '$company'";
                    $result = mysqli_query($conn, $sql);
                    $quantity = 0;
                    if(mysqli_num_rows($result) > 0)    
                    while($row = mysqli_fetch_row($result)) {   
                    $quantity = $row[0];
                    }
                   echo $quantity;
                   exit(); 
                  
?>