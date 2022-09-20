<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="editform.css">
    <link rel="stylesheet" href="vieworders.css?v=<?php echo time()?>">
    <title>Document</title>
</head>
<body>
    <div class="headercontainer">
      <img src="vecteezy_vk-logo-monogram-emblem-style-with-crown-shape-design-template_.jpg" class="center">
      <h1 class = "Volkraicon"> VOLKRA </h1>

    </div>

  <div class="container">
    <div class="row">
        <div class="column">
            <div >

                <h1 class= "ordersmade">ORDERS MADE</h1>
            </div>

            <table border=3px class="table">
                <thead>
                    <th scope="col">ORDER ID</th>
                    <th scope="col"> Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Payment Mode</th>
                    <th scope="col">Products bought</th>
                    <th scope="col">Amount Paid</th>




                </thead>
                <tbody>
                <?php include "fetchorders2.php";  ?>
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
                            <td colspan="6" rowspan="1" headers="">No Data</td>
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
