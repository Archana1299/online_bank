<?php

include_once ('conn.php');
$query = "SELECT * FROM account";
$result = mysqli_query($connection,$query) or die(mysqli_error($connection));
?>


<!DOCTYPE html>
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
    <div class="tagline-lower text-center text-expanded text-shadow text-uppercase text-white mb-5 d-none d-lg-block"> A GOVERNMENT OF INDIA UNDERTAKEN</div>

    
        					<div class="collapse navbar-collapse" id="navbarResponsive">
          					<ul class="navbar-nav mx-auto">
            					<li class="nav-item px-lg-4">
							<a class="nav-link text-uppercase text-expanded" href="bankhomepage.html">Home</a>
						</li>
						<li class="nav-item px-lg-4">
							<a class="nav-link text-uppercase text-expanded" href="aboutus.html">Personal Banking</a>
						</li>
						<li class="nav-item px-lg-4">
							<a class="nav-link text-uppercase text-expanded" href="aboutus.html">About</a>
						</li>
						<li class="nav-item px-lg-4">
							<a class="nav-link text-uppercase text-expanded" href="contactus.html">Contact</a>
						</li>
						
						<li class="nav-item px-lg-4">
							<a class="nav-link text-uppercase text-expanded" href="careers.html">Customer Dashboard</a>
						<li class="nav-item px-lg-4">
							<a class="nav-link text-uppercase text-expanded" href="logout.html">Logout</a>

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
if(isset($_POST['userid']) && isset($_POST['customer name'])&& isset($_POST['account type']))
{
	$userid = $_POST['userid'];
	$customer name = $_POST['customer name'];
	$aacount type = $_POST['account type'];

$query = "SELECT * FROM account WHERE userid='$userid' && name='$customer name'";
$result = mysqli_query($connection,$query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
if($count==1)
{
	
	echo "<div align='center'><big><big><big>$username YOUR ACCOUNT HAS BEEN CREATED</big></big></big></div>";
}
else
{
	echo "invalid login details";
}
}


?>
