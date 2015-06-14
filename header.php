<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIMS</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom styles -->
    <link href="style.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link href="css/jquery-ui.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

<div class="full-width top-header">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6">
            <h1 class="site-title"><span class="black">Sand</span>Box</h1>  
          </div>
          <div class="col-xs-12 col-sm-6">
            <h2 class="tagline">SandBox Inventory Management </h2>  
          </div>
        </div>  
      </div>
    </div>
    
    <!-- Navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand visible-xs" href="#">SandBox</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li <?php if(basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'index') echo 'class="active"';  ?>>
                <a href="index.php">View Stock</a></li>
            <li <?php if(basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'add-stock') echo'class="active"';  ?>>
                <a href="add-stock.php">Add Stock</a></li>
            <li <?php if(basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'view-customer') echo'class="active"';  ?>>
                <a href="view-customer.php">View Customer</a></li>
            <li <?php if(basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'add-customer') echo'class="active"';  ?>>
                <a href="add-customer.php">Add Customer</a></li>
            <li <?php if(basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'create-bill') echo'class="active"';  ?>>
                <a href="create-bill.php">Sell Invoice</a></li>
            <li <?php if(basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'view-company') echo'class="active"';  ?>>
                <a href="view-company.php">View Company</a></li>
            <li <?php if(basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'add-company') echo'class="active"';  ?>>
                <a href="add-company.php">Add Company</a></li>
            <!--<li><a href="#">Purchase Invoice</a></li>
            <li><a href="#">Reports</a></li>
            -->

          </ul>
        </div><!--.nav-collapse -->
      </div>
    </nav>
      