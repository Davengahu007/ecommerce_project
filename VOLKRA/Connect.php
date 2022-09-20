<?php

$server_name = "localhost";
$username = "root";
$password = "";
$database = "volkra";


$conn=mysqli_connect($server_name , $username, $password , $database);


if(!$conn){
  die("Could not connect".mysql_connect_error());
}

?>
