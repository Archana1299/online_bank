<?php
//Connection for database

include_once ('connect.php');
//Select Database
$query = "SELECT * FROM accountstatment";
$result = mysqli_query($connection,$query) or die(mysqli_error($connection));
?>

<!doctype html>
<html>
<body>
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
							<a class="nav-link text-uppercase text-expanded" href="aboutus.html">About</a>
						</li>
						<li class="nav-item px-lg-4">
							<a class="nav-link text-uppercase text-expanded" href="contactus.html">Account Details</a>
						</li>
						
						<li class="nav-item px-lg-4">
							<a class="nav-link text-uppercase text-expanded" href="careers.html">Account Statement</a>
						<li class="nav-item px-lg-4">
							<a class="nav-link text-uppercase text-expanded" href="careers.html">Logout</a>

            </li>
          </ul>
        </div>
      </div>
    </nav>
   

    
    <main class="container">
      <div class="container">
        <div class="bg-faded p-4 my-4">
          <hr class="divider">
<h2 class="text-center text-lg text-uppercase my-0">Account Statement</strong>
          </h2>
<hr class="divider">
<table border="1" align="center" style="line-height:25px;">
<tr>
<th>No</th>
<th>Transaction ID</th>
<th>Description</th>
<th>Date(YYYY-MM-DD)</th>
<th>Amount</th>
</tr>

<?php


while($row = mysqli_fetch_assoc($result)){
?>
<tr>
<td><?php echo $row['No']; ?></td>
<td><?php echo $row['Transaction ID']; ?></td>
<td><?php echo $row['Description']; ?></td>
<td><?php echo $row['Date(DD-MM-YYYY)']; ?></td>
<td><?php echo $row['Amount']; ?></td>

<?php
}

?>

</table>
</body>
</html>