<?php
    session_start();
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
      header("location: VOLKRAhomepage.php");
      exit;
  }


    include("connect.php");

    if (isset($_POST['adminusername'])) {
        $uname = $_POST['adminusername'];
        $password = $_POST['adminpassword'];

        $sql = "select * from site_manager where mainusername = '".$uname."'  AND mainpassword = '".$password."' limit 1";

        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) == 1){
        session_start();

        $_SESSION['adminusername'] = $uname;

        header('location:admindashboard.php');
          exit();
        }
        else{
          header('location:adminlogin.php');
          echo "You have entered incorrect email or password";
          exit();
        }
    }
?>
