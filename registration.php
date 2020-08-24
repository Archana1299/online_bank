<?php

session_start();
require_once('connect.php');
?>
<html>
  <head>
    <meta charset="ISO-8859-1">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>FED BANK</title>
  </head>
  <body>
    <div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block" id="top">FED BANK</div>
    <div class="tagline-lower text-center text-expanded text-shadow text-uppercase text-white mb-5 d-none d-lg-block">A GOVERNEMENT OF INDIA UNDERTAKEN</div>

    
            <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mx-auto">
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="products.html">Personal Banking</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="contactus.html">Contact</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="careers.html">about</a>
            </li>
            <li class="nav-item px-lg-4 active">
              <a class="nav-link text-uppercase text-expanded" href="careers.html">Customer Dashboard</a>
            </li>
            
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="customerlogin.html">Logout</a>
            </li> 
          </ul>
        </div>
      </div>
    </nav>
<!-- <footer class="bg-faded text-center py-5 fixed-bottom">
      <div class="container">
        <a href="#top">Back to Top</a>
      </div>
      <div class="container">
        <p class="m-0">Copyright &copy; Bank World 2017</p>
      </div>
    </footer> -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
<?php
if(isset($_POST['userid']) && isset($_POST['name']) && isset($_POST['state']) && isset($_POST['city']))
{
	$userid = $_POST['userid'];
	$name = $_POST['name'];
	
	$state = $_POST['state'];
	$city = $_POST['city'];

$query = "SELECT * FROM customer WHERE User ID='$userid' AND Name='$name'";
$result = mysqli_query($connection,$query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
if($count==1)
{
	
	echo ".$name Your Account Has Been Added";
}
else
{
	echo "invalid login details";
}
}
?>