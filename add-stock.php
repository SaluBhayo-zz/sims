<?php include 'header.php';?>

    <!-- After Nav -->
    <div class="container">
      <div class="row">
        <div class="col-xs-12 main-content">
             
            <div class="row">
            <div class="col-xs-12 col-sm-6 col-sm-offset-3">
            <h1 class="page-title">Add Stock</h1>
              <form action="add-stock-db.php" method="POST">
               <div class="form-group">
                  <input type="hidden" class="form-control" name="iform" id="iform" placeholder="Product Name">
                </div>
                <div class="form-group">
                  <label for="iproduct-name">Product Name</label>
                  <input type="text" class="form-control" name="iproduct-name" id="iproduct-name" placeholder="Product Name">
                </div>
                <div class="form-group">
                  <label for="icompany">Company</label>
                  <input type="text" class="form-control" name="icompany" id="icompany" placeholder="Product Company">
                </div>
                <div class="form-group">
                  <label for="iquantity">Quantity</label>
                  <input type="text" class="form-control" name="iquantity" id="iquantity" placeholder="Quantity Here">
                </div>
                <div class="form-group">
                  <label for="iprice">Price</label>
                  <input type="text" class="form-control" name="iprice" id="iprice" placeholder="Price Here">
                </div>                
                <button type="submit" class="btn btn-success"> Add Product </button>
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
    <script src="js/aci.js"></script>
    <script src="js/acc.js"></script>
    <script>
        $(function() {
            $( "#company" ).autocomplete(
            {
                 source:'autocompleteC.php',
            })

        });
        
    </script>
  </body>
</html>