<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <title> Homepage </title>
    <link rel = "stylesheet" href="VOLKRAstyles.css?v=<?php echo time()?>">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
      <img src="vecteezy_vk-logo-monogram-emblem-style-with-crown-shape-design-template_.jpg" class="center">
      <h1 class = "Volkraicon"> VOLKRA </h1>

      <header>
        <nav>
          <ul class = "navigation_bar">
            <li class="sign_up"><a href="http://localhost/ecommerce_project/VOLKRA/Volkra-Adduser.php">SIGN UP</a></li>
            <li class="sign_in"><a href="http://localhost/ecommerce_project/VOLKRA/Volkra_Signin.php">SIGN IN</a></li>
            <li><a href = "#"> NEW RELEASES </a></li>
            <li><a href = "#"> MEN </a></li>
            <li><a href = "#"> WOMEN </a></li>
            <li><a href = "#"> KIDS </a></li>
            <li><a href = "#"> OFFERS </a></li>
          </ul>
        </nav>
     </header>

     <div class = "welcome">
       <a href = http://localhost/ecommerce_project/VOLKRA/profile.php><img src="usericon2.jpg" class="usericonimage"></a>
       <?php if (isset($_SESSION['username'])) : ?>
        <h3> Welcome <strong>
            <?php echo $_SESSION['username']; ?>
        </strong></h3>

        <?php endif ?>

    </div>

     <div class = "search">
       <input type="text" name="box" placeholder="Search Anything...">
        <div class = "btn">
          <a href = "#"></a>
        </div>
     </div>



     <h2 class="motto"> "DRESS TO IMPRESS" </h2>
     <h3 class= "notion"> “We are proud to have esteemed customers all over the word trusting us to uphold their elegant fashion
sense as well as unique taste of style “ </h3>

     <button class = "shopbutton"><a href="index.php"> SHOP NOW!</a></button>
    <p class = "NEW_RELEASES_ICON">NEW RELEASES OF THE WEEK</p>

    <div class="HOMEPAGE_IMAGES_ROW1">
      <div> <img src="Bonded-Faux-Suede-Sherpa-Aviator-Jacket-BLACK-506000400.jpg" class = "img1" id = "img01" >

      </div>

      <div><img src="Anti-Pill-Print-Borg-Shacket-X-GREY-505887164-back.jpg" class="img2"></div>
      <div><img src="A1_2.jpg"class="img3"></div>
      <div><img src="381815d9fb066c4eb0da816707a1c1c2.jpg"class="img4"></div>
    </div>

    <div class="cart_div">
    <a href="cart.php"><img src="" /> Cart</a>
    </div>

    <div class="logout_div">
    <a href="logout.php"> Logout</a>
    </div>

    <p class = "DISCOVER_WITH_US_ICON">DISCOVER WITH US</p>

    <div class="HOMEPAGE_IMAGES_ROW2">
      <div><img src="c3234536128ba2fbf30d06475b0ba703.jpg" class = "img5" ></div>
      <div><img src="58d84d21b1b9e8531dd70a1901959267.jpg" class="img6"></div>
      <div><img src="7612bb5cf418194e72aa19f700dc1be0.jpg"class="img7"></div>
      <div><img src="899692bb975c1e9f46fa10b8a46d2549.jpg"class="img8"></div>
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
