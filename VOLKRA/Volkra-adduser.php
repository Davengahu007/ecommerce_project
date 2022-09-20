<!DOCTYPE html>
 <html>
  <head>
   <title>Sign Up</title>
   <link rel = "stylesheet" href="Volkra-adduser.css?v=<?php echo time()?>">
  </head>

<body>
<img src="VK-emblem2.png" class="center">
<h1 class = "Welcome_Statement">WELCOME TO VOLKRA</h1>

<div class = "container">
  <div class = "Title">Kindly your details below to sign up</div>
    <form action = "adduserregister.php" method = "post">
      <div class = "user_details">

        <div class = "input-box">
          <span class=  "details"> User ID </span>
          <input type = "number" name = "userid" placeholder = "Enter user ID" required>
        </div>

        <div class = "input-box">
          <span class=  "details"> First Name </span>
          <input type = "text" name = "firstname" placeholder = "Enter first name" required>
        </div>

        <div class = "input-box">
          <span class=  "details"> Last Name </span>
          <input type = "text" name = "lastname" placeholder = "Enter last name" required>
        </div>

        <div class = "input-box">
          <span class=  "details"> Username </span>
          <input type = "text" name = "username" placeholder = "Enter your username" required>
        </div>

        <div class = "input-box">
          <span class=  "details"> Email </span>
          <input type = "text" name = "email" placeholder = "Enter email" required>
        </div>

        <div class = "input-box">
          <span class=  "details"> Password </span>
          <input type = "text" name = "password" placeholder = "Enter password" required>
        </div>

        <div class = "input-box">
          <span class=  "details"> Gender </span>
          <input type = "text" name = "gender" placeholder = "Enter your gender (optional)">
        </div>


      <div class = "button">
      <input type = "submit" value = "Sign Up">
      </div>
      </div>



  </div>

  <p class = "Already_User"> Already a user? <a href = "http://localhost/ecommerce_project/VOLKRA/Volkra_Signin.php"> Sign in </a> </p>

  </form>

  <footer>
      <div class = "More_info">
        <div class = "privacy_policy"><a href = "#">  PRIVACY POLICY    </a></div>
        <div class = "terms_and_conditions"><a href = "#">  TERMS AND CONDITIONS    </a></div>
        <div class = "about_us"><a href = "#">  ABOUT US    </a></div>
        <div class = "contact_us"><a href = "#">  CONTACT US    </a></div>
        <div class = "help"><a href = "#">  HELP    </a></div>
      </div>
  </footer>

</body>
</html>
