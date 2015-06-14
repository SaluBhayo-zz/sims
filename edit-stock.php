<?php 
    include 'header.php';
    include('db_con.php');


/*** 
 Set vaiables
***/
    $success_message = false;
    $p_name = mysqli_real_escape_string($conn, $_REQUEST['p_name']);
    $p_company = mysqli_real_escape_string($conn, $_REQUEST['p_company']);
    $p_quantity = mysqli_real_escape_string($conn, $_REQUEST['p_quantity']);
    $p_price = mysqli_real_escape_string($conn, $_REQUEST['p_price']) + 0;

/*** 
    Update database if flag true 
***/
    if( isset($_REQUEST['update_record'])){
		$sql = "UPDATE Products 
            SET quantity = $p_quantity, price = $p_price 
            WHERE product_name = '$p_name' and company = '$p_company'";
		
        if(!mysqli_query($conn, $sql)){
            echo("Error description: " . mysqli_error($conn));
        }
        else{
            $success_message = true;
        }
        mysqli_close($conn);
    }

?>
<div class="container">
<div class="row">
<div class="col-xs-12 col-sm-6 col-sm-offset-3">
    <h2 class="page-title">Update Stock</h2>
    <form class="form" action="" method="GET">
    <div class="form-group">
      <label for="item">Product Name</label>
      <input type="text" class="form-control" name="p_name" value="<?php echo $p_name ?>" placeholder="Product Name">
    </div>
    <div class="form-group">
      <label for="company">Company</label>
      <input type="text" class="form-control" name="p_company" id="company" value="<?php echo $p_company ?>" placeholder="Product Company">
    </div>
    <div class="form-group">
      <label for="uquantity">Quantity</label>
      <input type="text" class="form-control" name="p_quantity" id="uquantity" value="<?php echo $p_quantity ?>" placeholder="Quantity Here">
    </div>
    <div class="form-group">
      <label for="uquantity">Price</label>
      <input type="text" class="form-control" name="p_price" id="uprice" value="<?php echo $p_price ?>" placeholder="Price Here">
    </div> 
    <input type="hidden" name="update_record" value="1">               
    <button type="submit" class="btn btn-success"> Update Product </button>
    </form>  
    <br>
    <?php
    if($success_message == true){
        echo '<div class="alert alert-success" role="alert">Record Updated Sucessfully</div>'; 
    }
    ?>
</div> 
</div>     
</div>    
    <?php include 'footer.php';?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>