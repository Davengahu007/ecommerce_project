<?php require ("connect.php");
$sql1="SELECT * FROM category";
$all_ctgr1=mysqli_query($conn,$sql1);
 ?>


 <!DOCTYPE html>
 <html>
  <head>
   <title>Sign up</title>
   <link rel = "stylesheet" href="Volkra-addsubCategory.css?v=<?php echo time()?>">
  </head>

<body>
<img src="VK-emblem2.png" class="center">
<h1 class = "Welcome_Statement">WELCOME TO VOLKRA</h1>

<div class = "container">
  <div class = "Title">Enter details about the new sub category</div>
    <form action = "addsubcategoryregister.php" method = "post">
      <div class = "subcategory_details">

        <div class = "input-box">
          <span class=  "details"> Sub-Category Name </span>
          <input type = "text" name = "subcategoryname" placeholder = "Enter Sub Category name" required>
        </div>

        <div class = "input-box">
          <span class=  "details"> Sub Category ID </span>
          <input type = "text" name = "subcategoryid" placeholder = "Enter Sub Category ID" required>
        </div>

        <div class = "input-box">
          <span class=  "details"> Category Name </span>
          <select name="category_name" id=["category_name"]>
            <?php

                while ($category = mysqli_fetch_assoc($all_ctgr1)) :;
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

      <div class = "button">
      <input type = "submit" value = "Add Sub Category">
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
