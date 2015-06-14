<?php
		session_start(); include 'header.php'; include('db_con.php');
		$customername =  $_SESSION['orders'][0][5]; //Customer Name
		$address      =  $_SESSION['orders'][0][6]; //Customer Address
		$NetAmount	  =  $_POST['nta']; 			//Total Bill Amount
		$cID;										// Customer ID 
		$contact; 									// Customer Contact Number	
		$remainingamount;							// Cutomer Remaining Amount
		$itemID;									// Item ID
		$quantiy;									// Stock Quantity
		$t=time();
		$pdate = date("Y:m:d H:i:s",$t);			// Purchase Date Time
		$dateMonth = date("mY",$t);
		$pBillID  = 0;								// Previous Bill ID
		//Get Invoice Number
		$sql = "SELECT BILLID FROM bill ORDER BY BILLID DESC LIMIT 1";
        $result = mysqli_query($conn, $sql);    
            if(mysqli_num_rows($result) > 0)
            while($row = mysqli_fetch_row($result)) {   
                    
                    $pBillID =  $row[0];
            }
		$length = strlen($pBillID);
		$output = substr($pBillID, 5, $length); 
		$output = (int)$output + 1;
		//Set Invoice Number
		$bID = $dateMonth.$output; 				// New Bill ID
		// Get Cusomter ID, Contact and Remaining Amount
		$sql = "SELECT customer_id, contact_no, remaining_amount FROM customers WHERE customer_name = '$customername' and address = '$address'";
        $result = mysqli_query($conn, $sql);    
            if(mysqli_num_rows($result) > 0)
            while($row = mysqli_fetch_row($result)) {   
                    
                    $cID = $row[0];
                    $contact =  $row[1];
                    $remainingamount = $row[2];
            }
        // Add Bill Record
		$sql = "INSERT INTO Bill (BillID, Customer_ID, T_Amount) VALUES ('$bID', '$cID', '$NetAmount')";
		$conn->query($sql);
?>

    <!-- After Nav -->
    <div class="container">
      <div class="row">
        <div class="col-xs-12 main-content"> 
            <div class="row">
            <div class="col-xs-12 col-sm-7"> 
                <div class="form-group">
                  <label for="cname">Customer Name</label>
                  <input type="text" class="form-control" name="cname" id="cname" value = "<?php echo $customername; ?>">
                </div>
          		<input type="hidden" class="form-control" name="cid" id="cid" value = "<?php echo $cID; ?>">
          		<input type="hidden" class="form-control" name="remainA" id="remainA" value = "<?php echo $remainingamount; ?>">      
                <div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" class="form-control" name="address" id="address" value = "<?php echo $address;?>">
                </div>

                <div class="form-group">
                  <label for="contact">Contact</label>
                  <input type="text" class="form-control" name="contact" id="contact" value = "<?php echo $contact;?>">
                </div>
                <div class="form-group">
                  <label for="billID">Invoice No</label>
                  <input type="text" class="form-control" name="billID" id="billID" value = "<?php echo $bID;?>">
                </div>
                <div class="form-group">
                  <label for="date">Date</label>
                  <input type="text" class="form-control" value = "<?php echo $pdate;?>">
                </div>   
          </div>
            <table class="table table-striped" id="item_table">
            <thead>
            <tr>
            <th>#</th>
            <th>Item Name</th>
            <th>Company</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total Price</th>
            </tr>
            </thead>
            <?php 
            foreach($_SESSION['orders'] as $items)
			{
            echo 
            	  "<tbody>
            	  <tr>
            	  <td>1</td>
            	  <td>$items[0]</td>		
            	  <td>$items[1]</td>
            	  <td>$items[2]</td>
            	  <td>$items[3]</td>
            	  <td>$items[4]</td>
            	  </tr>";	//Item Name, Item Company, Purchase Price, Quantity, Total Price
            echo "</tbody>
            </table>";
            $sql = "SELECT product_id, quantity FROM products WHERE product_name = '$items[0]' and company = '$items[1]'";
        	$result = mysqli_query($conn, $sql);    
            if(mysqli_num_rows($result) > 0)
            while($row = mysqli_fetch_row($result)) {   
                    
                    $itemID =  $row[0];
                    $quantity = $row[1];
            		
            }

            $sql = "INSERT INTO bill_details (ItemID, Price, Quantity, T_Price,BillID) VALUES ('$itemID', '$items[2]', '$items[3]','$items[4]','$bID')";
			$conn->query($sql);
			$quantN = (int)$items[3];
			$quantity = $quantity - $quantN; 	
			$sql = "UPDATE products SET quantity='$quantity' WHERE product_id = $itemID";
			$conn->query($sql);
	
		}
		?>
            <tbody>
            </tbody>
            </table>
            <div class="row">
            <div class="col-xs-12 col-sm-3"> 
              <form action="print-bill.php" method="POST">
                <div  class="form-group">
                  <label for="nta">Total Amount</label>
                  <input type="text" class="form-control" id = "T_Amount" size = "10" value = "<?php echo $NetAmount;?>" readonly>
                </div>
                <div  class="form-group">
                  <label for="nta">Recieved Amount</label>
                  <input type="text" class="form-control" id = "Rec_Amount" size = "10" onchange = "setAmount()">
                </div>
                <div  class="form-group">
                  <label for="nta">Remaining Amount</label>
                  <input type="text" class="form-control" id = "Rem_Amount" size = "10" readonly>
                </div>
                <?php unset ($_SESSION['orders']);?>
                <button type="submit" class="btn btn-success" id="pBill"> Print Bill </button>
                </form>
                </div>
                </div>                
            
        </div> <!-- xs-12 -->
      </div> <!-- row -->
    </div> <!-- container -->

    <?php include 'footer.php';?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/amount.js"></script>
  </body>
</html>