<?php
define('DB_HOST','localhost');
define('DB_NAME','fed bank');
define('DB_USER','root');
define('DB_PASSWORD','');

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);

if (!$connection)
{

    die("Database Connection Failed" . mysqli_error());

}

$select_db = mysqli_select_db($connection,DB_NAME);



?>