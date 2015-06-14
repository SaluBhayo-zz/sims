<?php 
                session_start();include 'db_con.php';
                $itemname = $_POST['item1'];  
                $company = $_POST['comp1'];
                $quantity = $_POST['quantity1'];
                $ct = $_POST['cthidden1'];
                $cname;
                $caddress;
                $price = 0;
                    //if retailer
                if($ct == "Retailer")
                {
                      $cname = "Retailer";
                      $caddress = "NA";
                      $price = $_POST['price1'];
                }
                    //else returning customer
                else{
                    $cname = $_POST['cname1'];
                    $caddress = $_POST['address1'];
                    $sql = "Select price from products WHERE product_name = '$itemname' and company = '$company'";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0)    
                    while($row = mysqli_fetch_row($result)) {   
                    $price = $row[0];
                    }
                    
                  }
                  $totalprice = $price*$quantity;
                $order = array
                (
                    
                	  array($itemname,$company,$price,$quantity,$totalprice,$cname,$caddress)
                
                );

                //$rows =  sizeof($order);
   				      //$columns =  max(array_map('count', $order));
   				      //echo "Orders are".$rows."x".$columns;

   				if ( ! isset($_SESSION['orders'])){
				$_SESSION['orders']=array();
				//echo "session variable created";
				}
				if ( is_array($order)){
				//echo "items merged";
				$totalorder=array_merge($_SESSION['orders'],$order);	
				$_SESSION['orders'] = array_unique($totalorder,SORT_REGULAR);
				}
        echo $price." ".$quantity." ".$totalprice;
        exit();
    	 //echo "<script> window.location = 'create-bill.php'; </script>";
?>