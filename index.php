<?php include 'header.php';?>
    
    <!-- After Nav -->
    <div class="container">
      <div class="row">
        <div class="col-xs-12 main-content">
            <h1 class="page-title">Available Stock</h1> 
            <table class="table table-striped">
            <thead>
            <tr>
            <th>#</th>
            <th>Name</th>
            <th>Company</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Edit</th>
            </tr>
            </thead>
            <tbody>
            
            <?php 
                include('db_con.php');
                $sql = "Select * from products ORDER BY product_name ASC";
                $result = mysqli_query($conn, $sql);
                $i = 1;
                if(mysqli_num_rows($result) > 0)    
                    while($row = mysqli_fetch_row($result)) {  
                    echo "<tr>";
                    echo '<th scope="row">'.$i.'</th>';
                    echo "<td>".$row[1]."</td>"; 
                    echo "<td>".$row[2]."</td>";
                    echo "<td>".$row[3]."</td>";
                    echo "<td>".number_format($row[4],2)."</td>";
                    echo '<td> <a href="edit-stock.php?p_name='.$row[1].'&p_company='.$row[2].'&p_quantity='.$row[3].'&p_price='.$row[4].'">Edit</a> </td>';
                    echo "</tr>";
                    $i++;
                } 
            ?>
            </tbody>
            </table>

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