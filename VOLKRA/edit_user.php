
<?php
session_start();
include_once 'connect.php';

$result = mysqli_query($conn,"SELECT * FROM users");
$row= mysqli_fetch_array($result);
 ?>

<!DOCTYPE html>
 <html>
  <head>
   <title>Sign Up</title>
   <link rel = "stylesheet" href="Volkra-adduser.css?v=<?php echo time()?>">
  </head>

<body>
<img src="VK-emblem2.png" class="center">
<h1 class = "Welcome_Statement">VOLKRA EDIT FORM</h1>

<div class = "container">
  <div class = "Title">Enter the new details here</div>
    <form action = "edit_userregister.php" method = "post">
      <div class = "user_details">

        <div class = "input-box">
          <span class=  "details"> User ID </span>
          <input type = "number" name = "userid" placeholder = "Enter user ID" value=<?php echo $row['user_id']; ?>>
        </div>

        <div class = "input-box">
          <span class=  "details"> First Name </span>
          <input type = "text" name = "firstname" placeholder = "Enter first name" value=<?php echo $row['firstname']; ?>>
        </div>

        <div class = "input-box">
          <span class=  "details"> Last Name </span>
          <input type = "text" name = "lastname" placeholder = "Enter last name" value=<?php echo $row['surname']; ?>>
        </div>

        <div class = "input-box">
          <span class=  "details"> Username </span>
          <input type = "text" name = "username" placeholder = "Enter your username" value=<?php echo $row['username']; ?> >
        </div>

        <div class = "input-box">
          <span class=  "details"> Email </span>
          <input type = "text" name = "email" placeholder = "Enter email"value=<?php echo $row['email']; ?> >
        </div>

        <div class = "input-box">
          <span class=  "details"> Password </span>
          <input type = "text" name = "password" placeholder = "Enter password" value=<?php echo $row['password']; ?>>
        </div>

        <div class = "input-box">
          <span class=  "details"> Gender </span>
          <input type = "text" name = "gender" placeholder = "Enter your gender (optional)" value=<?php echo $row['gender']; ?>>
        </div>


      <div class = "button">
      <input type = "submit" value = "Edit">
      </div>
      </div>

   </div>
  </form>
</body>
</html>
