<?php 
                session_start(); include 'header.php'; include('db_con.php');
                $price = 0;
                $NetAmount = 0;
                unset ($_SESSION['orders']);
    ?>
    
    <!-- After Nav -->
    <div class="container">
      <div class="row">
        <div class="col-xs-12 main-content">
            <h1 class="page-title">Create Bill</h1> 
            <div class="row">
            <div class="col-xs-12 col-sm-7"> 
              <form method ="POST">
                <div class="form-group">
                  <label for="customertype">Select Customer Type</label>
                  <select class="form-control" name="customertype" id="customertype" placeholder="Please Select Customer Type">
                    <option value="default">Please Select Customer</option>
                    <option value="rt">Retailer</option>
                    <option value="rc">Returning Customer</option>
                  </select>  
                </div>
                <div class="form-group">
                  <input type="hidden" class="form-control" name="cthidden" id="cthidden">
                </div>

                <div class="form-group" id="divcst" style = "display:none">
                  <label for="cname">Customer Name</label>
                  <input type="text" class="form-control" name="cname" id="cname" placeholder="Enter Customer Name">
                </div>
                <div class="form-group" id="divadd" style = "display:none">
                  <label for="address">Address</label>
                  <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address">
                </div>

                <div class="form-group" id="divitm" style = "display:none">
                  <label for="item">Item Name</label>
                  <input type="text" class="form-control" name="item" id="item" placeholder="Enter Item Name">
                </div>
                <div class="form-group" id="divcom" style = "display:none">
                  <label for="company">Company</label>
                  <input type="text" class="form-control" name="company" id="company" placeholder="Enter Company">
                </div>
                <div class="form-group" id="divqty" style = "display:none">
                  <label for="quantity">Quantity</label>
                  <input type="text" class="form-control" name="quantity" id="quantity" placeholder="Quantity" onchange = "getQuantity()">
                </div>
                <div class="form-group" id="divprc" style = "display:none">
                  <label for="price">Price</label>
                  <input type="text" class="form-control" name="price" id="price" placeholder="Price">
                </div>                
                <button type="submit" class="btn btn-success" id="addItem"> Add Item </button>
              </form>
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
            <tbody>
            </tbody>
            </table>
            <div class="row">
            <div class="col-xs-12 col-sm-3"> 
              <form action="print-bill.php" method="POST">
                <div  class="form-group">
                  <label for="nta">Net Amount</label>
                  <input type="text" class="form-control" size = "10" name="nta" id="nta" placeholder="Net Amount" value = 0 readonly>
                </div>
                <button type="submit" class="btn btn-success" id="pBill" onClick="window.location.reload()"> Checkout </button>
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
    <script src="js/acitem.js"></script>        
    <script src="js/accomp.js"></script>
    <script src="js/accust.js"></script>
    <script src="js/acadd.js"></script>
    <script src="js/sct.js"></script>   
    <script src="js/quantcheck.js"></script>
    <script src="js/submitdata.js"></script>
  </body>
</html>