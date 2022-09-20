<!DOCTYPE html>

<head>
  <link rel = "stylesheet" href="View-Users.css?v=<?php echo time()?>">
  <title> View Volkra Users </title>
<head>

<p class = "title"> VOLKRA USERS </p>
<table>

 <thead>
  <tr>
    <th> User ID </th>
    <th> First Name </th>
    <th> Surname </th>
    <th> Username </th>
    <th> Email </th>
    <th> Password </th>
    <th> Gender </th>

  </tr>
</thead>


<?php
require("connect.php");
$sql = "SELECT * FROM volkra.users ";
$result = mysqli_query($conn,$sql);


if(mysqli_num_rows($result)> 0) {
  while($row = mysqli_fetch_assoc($result)) {
?>
    <tr>
      <td><?php echo $row['user_id'];?></td>
      <td><?php echo $row['firstname'];?></td>
      <td><?php echo $row['surname'];?></td>
      <td><?php echo $row['username'];?></td>
      <td><?php echo $row['email'];?></td>
      <td><?php echo $row['password'];?></td>
      <td><?php echo $row['gender'];?></td>
      <td><a href = "edit_user.php"> Edit </a> </td>
    </tr>

<?php
  }
}

?>

</table>
</html>
