<!DOCTYPE html>

<head>
  <link rel = "stylesheet" href="View_Product.css?v=<?php echo time()?>">
  <title> View Volkra Users </title>
<head>

  <p class = "title"> VOLKRA PRODUCTS </p>
<div class = "container">

<table>

 <thead>
  <tr>
    <th> Product ID </th>
    <th> Product Name </th>
    <th> Product Category Name </th>
    <th> Sub Category Name </th>
    <th> Unit Price </th>
    <th> Product Image </th>

  </tr>
</thead>


<?php
require("connect.php");
$sql = "SELECT * FROM volkra.products ";
$result = mysqli_query($conn,$sql);


if(mysqli_num_rows($result)> 0) {
  while($row = mysqli_fetch_assoc($result)) {
  echo "<tr>
            <td>" . $row["product_id"] . "</td>
            <td>" . $row["product_name"] . "</td>
            <td>" . $row["category_name"] . "</td>
            <td>" . $row["sub_category_name"] . "</td>
            <td>" . $row["unit_price"] . "</td>


            <td style = 'width:10%;'> <img style = 'width:100%;' src='uploads/" . $row["product_image"] . "'></td>
       </tr>";
                    }
                } else {
                    echo "<div class='echo-content'><h3>Tables are empty !</h3>";
                    echo "<h3>Kindly add something !</h3></div>";
                }

                ?>


</table>

</div>
</html>
