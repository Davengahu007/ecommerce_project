<?php
session_start();
?>

<!DOCTYPE html>
 <html>
  <head>
   <title>Sign in</title>
   <link rel = "stylesheet" href="Volkra_Signin.css?v=<?php echo time()?>">
  </head>

<body>
<img src="VK-emblem2.png" class="center">
<h1 class = "Welcome_Statement">WELCOME TO VOLKRA</h1>

<div class = "container">
  <div class = "Title">Kindly enter your details below to sign in</div>
      <form action = "Volkra_signinregister.php" method = "post">
      <div class = "User_Signin_details">

        <div class = "input-box">
          <span class=  "details"> Username </span>
          <input type = "text" name = "username" id="username" placeholder = "Enter your name" required>
        </div>

        <div class = "input-box">
          <span class=  "details"> Password </span>
          <input type = "text" name = "password" placeholder = "Enter your password" required>
        </div>

     <p class = "No_account"> Do not have an account? <a href="http://localhost/ecommerce_project/VOLKRA/volkra-adduser.php"> Sign up </a> </p>
      <p class = "No_account2"> Are you an admin? <a href="http://localhost/ecommerce_project/VOLKRA/adminlogin.php"> Sign in as admin </a> </p>

     <div class = "button">
       <input type = "submit" name="loggedin" value = "Sign In">
     </div>

      </div>
    </form>
  </div>

  </div>
</body>
</html>
