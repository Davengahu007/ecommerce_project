<!DOCTYPE html>
 <html>
  <head>
   <title>Sign up</title>
   <link rel = "stylesheet" href="Volkra_Signup.css">
  </head>

<body>
<img src="VK-emblem2.png" class="center">
<h1 class = "Welcome_Statement">WELCOME TO VOLKRA</h1>

<div class = "container">
  <div class = "Title">Kindly enter your details below to sign up</div>
    <form action = "process_register.php" method = "post">
      <div class = "User_Signup_details">

        <div class = "input-box">
          <span class=  "details"> Username </span>
          <input type = "text" name = "User_name" placeholder = "Enter your name" required>
        </div>

        <div class = "input-box">
          <span class=  "details"> New Password </span>
          <input type = "text" name = "New_pass" placeholder = "Enter your new password" required>
        </div>

        <div class = "input-box">
          <span class=  "details"> Confirm Password </span>
          <input type = "text" name = "Confirm_pass" placeholder = "Enter your new password" required>
        </div>

      <div class = "button">
        <input type = "submit" value = "Sign Up">
      </div>
      </div>

  </div>
  <div class = "Question">
    <span class = "Question_title"> Security Question </span>
    <p class = "Question_statement"> What was your childhood best friend’s name? </p>
  </div>

  <div class = "input-security">
    <div class=  "details-security"> Your Answer </div>
    <input type = "text" name = "Answer" placeholder = "Enter your answer here" required>
  </div>
</div>

  <div class = "User_Agreement">

      <span class = "Agreement_Statement"> <input id="checkbox" type = "checkbox" /> By checking this box, you agree to Volkra’s Privacy Policy and Terms of Use.</span>
    </label>

  </form>

  </div>

  <p class = "Already_User"> Already a user? <a href = "http://localhost/ecommerce_project/VOLKRA/Volkra_Signin.php"> Sign in </a> </p>
</body>
</html>
