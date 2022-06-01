<?php
print_r($_POST);
require("connect.php");



$sql = "INSERT INTO VOLKRA (Username, NewPass, ConfirmPass, Answer) VALUES ('$Username' , '$New_pass' , '$Confirm_pass' , '$Answer')";

if(mysqli_query($conn,$sql)){
  echo "New record created successfully";

}
    else
?>
