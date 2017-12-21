<?php
//error_reporting(0);
//date_default_timezone_set("Asia/Karachi");
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_dbconfig = "localhost";
$database_dbconfig = "gis";
$username_dbconfig = "root";
$password_dbconfig = "";
$dbconfig = mysqli_connect($hostname_dbconfig, $username_dbconfig, $password_dbconfig, $database_dbconfig); 
 
// Check connection
if (!$dbconfig) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
