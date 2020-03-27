<?php

$hostname = "localhost";
$user = "root";
$database = "koperasi";
$pass = "";

$sqlconnect = mysqli_connect($hostname, $user, $pass);
mysqli_select_db($sqlconnect,$database) or die("Connect Failed !!:".mysql_error());


?>