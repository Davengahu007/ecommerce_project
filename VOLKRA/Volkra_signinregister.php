<?php
    session_start();
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
      header("location: VOLKRAhomepage.php");
      exit;
  }


    include("connect.php");

    if (isset($_POST['username'])) {
        $uname = $_POST['username'];
        $password = $_POST['password'];

        $sql = "select * from users where username = '".$uname."'  AND password = '".$password."' limit 1";

        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) == 1){
        session_start();

        $_SESSION['username'] = $uname;

        header('location:VOLKRAhomepage.php');
          exit();
        }
        else{
          header('location:Volkra_Signin.php');
          echo "You have entered incorrect email or password";
          exit();
        }
    }
?>
