<?php

$server_name = "localhost";
$username = "root";
$password = "";
$database = "VOLKRA";


$conn=mysqli_connect($server_name , $username, $password , $database);


if(!$conn){
  die("Could not connect".mysql_connect_error());
}
else{
  echo "Connected Successfully";
}

?>
