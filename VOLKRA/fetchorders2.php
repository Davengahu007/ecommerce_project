<?php

require("connect.php");

$sql = "SELECT * FROM orders";

$result = mysqli_query($conn, $sql);

?>
