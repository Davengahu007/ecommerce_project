
<!DOCTYPE html>
 <html>
  <head>
   <title>Sign up</title>
   <link rel = "stylesheet" href="Volkra-addCategory.css?v=<?php echo time()?>">
  </head>

<body>
<img src="VK-emblem2.png" class="center">
<h1 class = "Welcome_Statement">WELCOME TO VOLKRA</h1>

<div class = "container">
  <div class = "Title">Enter details about the new category</div>
    <form action = "addcategoryregister.php" method = "post">
      <div class = "category_details">

        <div class = "input-box">
          <span class=  "details"> Category Name </span>
          <input type = "text" name = "category_name" placeholder = "Enter Category name" required>
        </div>

        <div class = "input-box">
          <span class=  "details"> Category ID </span>
          <input type = "text" name = "category_id" placeholder = "Enter category ID" required>
        </div>

      <div class = "button">
      <input type = "submit" value = "Add Category">
      </div>
      </div>
  </form>
  </div>

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
