<?php include 'header.php';?>
    
    <!-- After Nav -->
    <div class="container">
      <div class="row">
        <div class="col-xs-12 main-content">
            <h1 class="page-title">Customers</h1> 
            <table class="table table-striped">
            <thead>
            <tr>
            <th>#</th>
            <th>Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>Contact Info</th>
            <th>Remaining Amount</th>
            </tr>
            </thead>
            <tbody>

            <?php 
                include('db_con.php');
                $sql = "Select * from customers ORDER BY customer_name ASC";
                $result = mysqli_query($conn, $sql);
                $i = 1;
                if(mysqli_num_rows($result) > 0)    
                    while($row = mysqli_fetch_row($result)) {  
                    echo "<tr>";
                    echo '<th scope="row">'.$i.'</th>';
                    echo "<td>".$row[1]."</td>"; 
                    echo "<td>".$row[2]."</td>";
                    echo "<td>".$row[3]."</td>";
                    echo "<td>".$row[4]."</td>";
                    echo "<td>".$row[5]."</td>";
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