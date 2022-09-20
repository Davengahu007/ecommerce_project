<?php require ("connect.php");
$sql2="SELECT * FROM category";
$sql3="SELECT * FROM sub_category";
$all_ctgr2=mysqli_query($conn,$sql2);
$all_ctgr3=mysqli_query($conn,$sql3);
 ?>


<!DOCTYPE html>
 <html>
  <head>
   <title>Add product</title>
   <link rel = "stylesheet" href="Volkra-addproduct.css?v=<?php echo time()?>">
  </head>

<body>
<img src="VK-emblem2.png" class="center">
<h1 class = "Welcome_Statement">WELCOME TO VOLKRA</h1>

<div class = "container">
  <div class = "Title">Enter details about the new product</div>
    <form action = "addproductregister.php" method = "post" enctype = "multipart/form-data">
      <div class = "product_details">

        <div class = "input-box">
          <span class=  "details"> Product Name </span>
          <input type = "text" name = "productname" placeholder = "Enter Product name" required>
        </div>

        <div class = "input-box">
          <span class=  "details"> Product ID </span>
          <input type = "number" name = "productid" placeholder = "Enter product ID" required>
        </div>

        <div class = "input-box">
          <span class=  "details"> Product Description </span>
          <input type = "text" name = "productdescription" placeholder = "Enter the product description" required>
        </div>

        <div class = "input-box">
          <span class=  "details"> Product image </span>
          <input type = "file" name = "product_image" placeholder = "Insert an image of the product" accept="image/*" multiple>
        </div>

        <div class = "input-box">
          <span class=  "details"> Date Created </span>
          <input type = "date" name = "datecreated" placeholder = "Enter the date it was created" required>
        </div>

        <div class = "input-box">
          <span class=  "details"> Date Updated </span>
          <input type = "date" name = "dateupdated" placeholder = "Enter the date it was updated" required>
        </div>

        <div class = "input-box">
          <span class=  "details"> Unit Price </span>
          <input type = "number" name = "unitprice" placeholder = "Enter the unit price of the product" required>
        </div>

        <div class = "input-box">
          <span class=  "details"> Quantity available </span>
          <input type = "number" name = "quantityavailable" placeholder = "Enter the quantity available" required>
        </div>

        <div class = "input-box">
          <span class=  "details"> Category Name </span>
          <select name="category_name" id=["category_name"]>
            <?php

                while ($category = mysqli_fetch_assoc($all_ctgr2)) :;
            ?>
                <option value="<?php echo $category["Category_name"];

                ?>">
                    <?php
                    echo $category["Category_name"];

                    ?>
                </option>
            <?php
                endwhile;

            ?>
        </select>
        </div>

        <div class = "input-box">
          <span class=  "details"> Sub Category Name </span>
          <select name="subcategory_name" id=["subcategory_name"]>
            <?php

                while ($sub_category = mysqli_fetch_assoc($all_ctgr3)) :;
            ?>
                <option value="<?php echo $sub_category["Subcategory_name"];

                ?>">
                    <?php
                    echo $sub_category["Subcategory_name"];

                    ?>
                </option>
            <?php
                endwhile;

            ?>
        </select>
        </div>

        <div class = "input-box">
          <span class=  "details"> Added by </span>
          <input type = "number" name = "addedby" placeholder = "Enter the id of the person who added the product" required>
        </div>

      <div class = "button">
      <input type = "submit" value = "Add Product">
      </div>
      </div>

  </div>
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
