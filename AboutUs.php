<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "labourbuy";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BuyLabour | AboutUs</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="CSS/Aboutc.css" rel="stylesheet" />
  </head>
  <body>

    <!-- Modal -->
    <div id="firstmodal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><i class="fas fa-times"></i></button>
            <h1 class="modal-title">Log In</h1>
          </div>
          <div class="modal-body">
            <div class="block">
              <label for="Username">Username</label>
              <input type="text" class="username" name="Username" placeholder="Username" required />
            </div>
            <div class="block">
              <label for="Password">Password</label>
              <input type="password" class="password" name="Password" placeholder="Password" required />
            </div>
            <br>
            <div class="block3">
              <label for="Or">Or Sign Up </label>
              <a href="Enquiry.php" class="modal-a-link" type="button" data-dismiss="modal" >Click Here</a>
            </div>
          </div>
          <div class="modal-footer">
            <input type="button" class="modal-btn" value="Submit" />
          </div>
        </div>

      </div>
    </div>


<!-- navbar -->
<header>
  <a class="logo" href="index.php"> <img src="Img/Logo.jpg" > </a>
  <nav>
    <ul>
      <li>
        <a href="index.php" class="active">Home</a>
      </li>
      <li id="service-li">
        <a href="" id="service-btn">Services<i class="fas fa-caret-down"></i></a>
        <div class="dropdown-content">
          <a href="LabourServ.php">Labour Services</a>
          <a href="OtherServ.php">Other Services</a>
        </div>
      </li>
      <li>
        <a href="AboutUs.php">About Us</a>
      </li>
      <?php
      if(isset($_SESSION["loggedin"])){
      ?>
      <li>
        <a href="logout.php" class="SignIn-Up">Logout</a>
      </li>
      <?php
      }
      else{
        $_SESSION['username']="random_user_".rand(1,100000);
      ?>
      <li>
        <a href="" class="SignIn-Up" data-toggle="modal" data-target="#firstmodal">Log In</a>
      </li>
      <?php
      }
      ?>
    </ul>
  </nav>
  <div class="menu-toggle">
    <i class="fas fa-bars"></i>
  </div>
</header>

<div class="wrapper">

  <!-- Header -->
  <div class="container header">
    <div class="About-content">
      <h1 class="Montserrat">ABOUT US</h1>
      <hr>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </br>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
    </br>
      <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <div class="About-image">
      <img src="Img/About-img.png" />
    </div>
  </div>

<!-- HowItWorks -->
<div class="col-12 text-center How-Head">
  <h1 class="Montserrat">HOW IT WORKS</h1>
  <hr>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>

<div class="container-fluid text-center How-Head-two">
  <div class="row">
    <div class="col-md-4">
      <i class="far fa-calendar-alt"></i>
      <h3 class="Raleway">CHOOSING A SERVICE</h3>
      <p>We match you with the appropriate service you need. Our goal is to provide best service possible at your doorstep.</p>
    </div>
    <div class="col-md-4">
      <i class="fas fa-user"></i>
      <h3 class="Raleway">HASSLE FREE SERVICE</h3>
      <p>Genuine service provided to you from booking to delivery.</p>
    </div>
    <div class="col-md-4">
      <i class="far fa-thumbs-up"></i>
      <h3 class="Raleway">GREAT SERVICE GREAT REVIEWS</h3>
      <p>Reviews helps everyone to acknowledge our services.</p>
    </div>
  </div>
</div>

<!--Footer-->
  <footer>
    <div class="footer-content">

        <div class="footer-box">
          <h1>Serving In</h1>
          <hr>
          <li>Delhi NCR</li>
        </div>

        <div class="footer-box">
          <h1>Contact Us</h1>
          <hr>
            <li> +91 999-999-9999 </li>
            <li> 221b Baker Street </li>
            <li> London, England </li>
            <li>  </li>
        </div>

        <div class="footer-box">
          <h1>Follow Us</h1>
          <hr>
            <li> <a href="#">Facebook</a> </li>
            <li> <a href="#">Instagram</a> </li>
            <li> <a href="#">Twitter</a> </li>
        </div>
    </div>

    <hr class="footer-hr">
    <div class="footer-last">
      <h4>Copyright &copy; 2019 All rights reserved | Handcrafted by <span class="footer-delta">Delta Miden</span> </h4>
    </div>
  </footer>
</div>

  <script type="text/javascript">
    $(document).ready(function() {
      $('.menu-toggle').click(function() {
        $('nav').toggleClass('active');
        $('.wrapper').toggleClass('active');
        $('#mySlider').toggleClass('active');
      })

      $('#service-btn').click(function() {
        $('.dropdown-content').toggleClass('active');
      })

      $('#service-li').hover(function() {
        $('#service-li').toggleClass('active');
      })

      $('.modal-a-link').on('click', function() {
        window.location.href="SignUp.php";
      })
    })
  </script>
  </body>
</html>
