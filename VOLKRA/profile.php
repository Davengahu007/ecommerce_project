<?php
session_start();
require 'connect.php';
if (isset($_SESSION['username'])) {

$sql = "SELECT * FROM users WHERE username='".$_SESSION['username']."' ";
}
else{
    echo 'YOU ARE NOT LOGGED IN';
}

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="editform.css">
    <title>Document</title>
</head>
<body>

    <hr>
  <?php if (isset($_SESSION['username'])) : ?>
        <p>
            <?php echo $_SESSION['username'];?>'s profile
  </p>

        <?php endif ?>
  <hr>
  <div class="links">
    <a href="Volkrahomepage.php">Back to the Homepage</a>
  </div>


    <div class="container">
    <div class="row">
        <div class="column">
            <div >

                <h1>MY DETAILS</h1>
            </div>

            <table border=20px class="table">
                <thead>
                    <th scope="col">User ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Role</th>


                </thead>
                <tbody>
                    <?php if($result -> num_rows > 0): ?>
                    <?php while($array = mysqli_fetch_row($result)): ?>

                    <tr>
                        <th scope="row"> <?php echo $array[0]; ?> </th>
                        <th><?php echo $array[1]; ?></th>
                        <th><?php echo $array[2]; ?></th>
                        <th><?php echo $array[3]; ?></th>
                        <th><?php echo $array[4]; ?></th>
                        <th><?php echo $array[5]; ?></th>
                        <th><?php echo $array[6]; ?></th>
                        <th><?php echo $array[7]; ?></th>

                        <th>
                            <a class="links" href="edit_user.php">Edit</a>
                            <a class="links" href="edit_user.php">Delete</a>
                        </th>
                    </tr>

                    <?php endwhile; ?>
                    <?php else: ?>

                        <tr>
                            <td colspan="8" rowspan="1" headers="">No Data</td>
                        </tr>

                    <?php endif; ?>
                    <?php mysqli_free_result($result); ?>


                </tbody>
            </table>
        </div>
    </div>
    </div>
    <div class="container">
    <div class="row">
        <div class="column">
            <div >

                <h1>MY ORDERS</h1>
            </div>

            <table border=20px class="table">
                <thead>
                    <th scope="col">ORDER ID</th>
                    <th scope="col"> Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Address</th>
                    <th scope="col">Payment Mode</th>
                    <th scope="col">Products bought</th>
                    <th scope="col">Amount Paid</th>




                </thead>
                <tbody>
                <?php include "Fetchorder.php";  ?>
                    <?php if($result -> num_rows > 0): ?>
                    <?php while($array = mysqli_fetch_row($result)): ?>

                    <tr>
                        <th scope="row"> <?php echo $array[0]; ?> </th>
                        <th><?php echo $array[1]; ?></th>
                        <th><?php echo $array[2]; ?></th>
                        <th><?php echo $array[3]; ?></th>
                        <th><?php echo $array[4]; ?></th>
                        <th><?php echo $array[5]; ?></th>
                        <th><?php echo $array[6]; ?></th>
                    </tr>

                    <?php endwhile; ?>
                    <?php else: ?>

                        <tr>
                            <td colspan="7" rowspan="1" headers="">No Data</td>
                        </tr>

                    <?php endif; ?>
                    <?php mysqli_free_result($result); ?>


                </tbody>
            </table>
        </div>
    </div>
    </div>




</body>
</html>
