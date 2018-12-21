<?php
$serverName = "localhost";
$userName = "temp";
$password = "t3mp@";
$dbName = "temp";
$conn = mysqli_connect($serverName, $userName, $password, $dbName);
if(!$conn){
  die("Connection failed: " .mysqli_connect_error());
}

 ?>
