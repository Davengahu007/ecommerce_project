<?php
session_start();
 ?>

<!DOCTYPE html>
 <html>
  <head>
   <title>Admin Dashboard</title>
   <link rel = "stylesheet" href="admindashboard.css?v=<?php echo time()?>">
  </head>

<body>
<img src="VK-emblem2.png" class="center">
<h1 class = "Welcome_Statement">WELCOME TO VOLKRA ADMIN DASHBOARD</h1>

<div class = "container">
  <div class = "Title">Below are the admin functions</div>
      <div class = "Admin_functions">

        <div class = "input-box">
          <span class=  "details"> User ID </span>
          <input type = "number" name = "user_id" placeholder = "Enter your ID" required>
        </div>

        <div class = "input-box">
          <span class=  "details"> Username </span>
          <input type = "text" name = "name" placeholder = "Enter your name" required>
        </div>

        <div class = "input-box">
          <span class=  "details"> Password </span>
          <input type = "password" name = "pass" placeholder = "Enter your new password" required>
        </div>

        <div class = "input-box">
          <span class=  "details"> Email </span>
          <input type = "email" name = "email" placeholder = "Enter your email" required>
        </div>

        <div class = "input-box">
          <span class=  "details"> Gender </span>
          <input type = "text" name = "gender" placeholder = "Enter your gender" required>
        </div>

  </div>
</body>
</html>
