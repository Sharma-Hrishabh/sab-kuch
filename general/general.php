<?php 

session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
<title>General Store</title>
<link href="../css/bootstrap.css" rel="stylesheet">

<link href="../css/style.css" rel="stylesheet">
<link href="../css/cart.css" rel="stylesheet">


    <link href="../css/font-awesome.min.css" rel="stylesheet">

 
</head>
<title>General Store</title>
<body>
	//navigation bar
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">SabKuch</a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav">
            <li><a href="../index.php">HOME</a></li>
            <li><a href="../aboutus.php">ABOUT</a></li>
           
           <?php if(isset($_SESSION['logged_in']))       
            {
              echo '<li><a href="./login-system/logout.php">LOGOUT</a></li>';
            }
            else 
            {
              echo '<li><a href="./login-system/index2.php">LOGIN OR SIGNUP</a></li>';
              
        }
            ?>
            <li class="dropdown">
              <a href="../main.htm" class="dropdown-toggle" data-toggle="dropdown">STORES<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="cart.php">Food</a></li>
                <li><a href="dailyneeds.htm">Daily Needs</a></li>
                <li><a href="medical.htm">Medical</a></li>
                
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>





<div class="container-fluid">
  <div class="dntile">
    <img class="img-responsive" src="../images/p1.jpg">
    <a href="#" class="btn btn-primary">Stationary Zone</a>
</div>
<div class="dntile">
    <img class="img-responsive" src="../images/np1.jpg">
    <a href="#" class="btn btn-primary">Daily Products</a>
</div>
</div>
