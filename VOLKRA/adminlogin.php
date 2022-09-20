  <?php
session_start();
?>

<!DOCTYPE html>
 <html>
  <head>
   <title>Admin Sign in</title>
   <link rel = "stylesheet" href="adminlogin.css?v=<?php echo time()?>">
  </head>

<body>
<img src="VK-emblem2.png" class="center">
<h1 class = "Welcome_Statement">WELCOME TO VOLKRA</h1>

<div class = "container">
  <div class = "Title">Kindly enter your details below to sign in</div>
      <form action = "adminloginregister.php" method = "post">
      <div class = "User_Signin_details">

        <div class = "input-box">
          <span class=  "details"> Admin Username </span>
          <input type = "text" name = "adminusername" id="username" placeholder = "Enter your name" required>
        </div>

        <div class = "input-box">
          <span class=  "details"> Admin Password </span>
          <input type = "text" name = "adminpassword" placeholder = "Enter your password" required>
        </div>

     <div class = "button">
       <input type = "submit" name="loggedin" value = "Sign In">
     </div>

      </div>
    </form>
  </div>

  </div>
</body>
</html>
