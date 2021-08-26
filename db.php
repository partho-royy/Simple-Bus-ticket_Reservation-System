<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "busticket";
$prefix = "";
$connect = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
$result = mysqli_select_db($connect, $mysql_database) or die("Could not select database");


?>