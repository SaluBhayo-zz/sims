<?php include 'header.php';?>

<!-- After Nav -->
    <div class="container">
      <div class="row">
        <div class="col-xs-12 main-content">
          <h1 class="page-title">Add Customer</h1>
            <div class="row">
            <div class="col-xs-12 col-sm-7"> 
              <form action="add-customer-db.php" method="POST">
               <div class="form-group">
                  <input type="hidden" class="form-control" name="iform" id="iform" placeholder="Product Name">
                </div>
                <div class="form-group">
                  <label for="icustomer-name">Customer Name</label>
                  <input type="text" class="form-control" name="icustomer-name" id="icustomer-name" placeholder="Customer Name">
                </div>
                <div class="form-group">
                  <label for="iaddress">Postal Address</label>
                  <input type="text" class="form-control" name="iaddress" id="iaddress" placeholder="Postal Address">
                </div>
                <div class="form-group">
                  <label for="iemail">Email</label>
                  <input type="Email" class="form-control" name="iemail" id="iemail" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="icontact">Contact</label>
                  <input type="text" class="form-control" name="icontact" id="icontact" placeholder="+921239876547">
                </div>                
                <button type="submit" class="btn btn-success"> Add Customer </button>
              </form>
            </div>
        
          </div>
      </div> <!-- xs-12 -->
      </div> <!-- row -->
    </div> <!-- container -->
    
    <?php include 'footer.php';?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>