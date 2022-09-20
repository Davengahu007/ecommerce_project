<?php
session_start();
 ?>

<!DOCTYPE html>
 <html>
  <head>
   <title>Admin Dashboard</title>
   <link rel = "stylesheet" href="addadmin.css?v=<?php echo time()?>">
  </head>

<body>
<img src="VK-emblem2.png" class="center">
<h1 class = "Welcome_Statement">WELCOME TO VOLKRA ADMIN SIGN-UP</h1>

<form action = "addadminregister.php" method = "post">
<div class = "container">
  <div class = "Title">Fill details below to add new admin</div>
      <div class = "Admin_functions">

        <div class = "input-box">
          <span class=  "details"> Username </span>
          <input type = "text" name = "adminusername" placeholder = "Enter your username" required>
        </div>

        <div class = "input-box">
          <span class=  "details"> Password </span>
          <input type = "password" name = "adminpassword" placeholder = "Enter your new password" required>
        </div>

        <div class = "button">
        <input type = "submit" value = "Sign Up">
        </div>

</form>


  </div>
</body>
</htm
