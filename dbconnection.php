<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'kd'); //Database name
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
//Code to  Check connection to the Database
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>