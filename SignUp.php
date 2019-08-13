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
	<title>BuyLabour | SignUp</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="CSS/SignUp.css" rel="stylesheet" />
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
      <li>
        <a href="" class="SignIn-Up" data-toggle="modal" data-target="#firstmodal">Log In</a>
      </li>
    </ul>
  </nav>
  <div class="menu-toggle">
    <i class="fas fa-bars"></i>
  </div>
</header>

<div class="wrapper">

<div class="Gradient">
    <h1 class="Montserrat">Sign Up</h1>
</div>

<div class="content-wrapper">
  <div class="left-box">
    <div class="firstrow">
      <form class="" action="" method="post">
      <div class="inputs">
        <input type="text" name="fullname" placeholder="Fullname" />
        <input type="email" name="email" placeholder="Email" />
      </div>
      <div class="inputs">
        <input type="text" name="username" placeholder="Username" />
        <input type="password" name="password" placeholder="Password" />
      </div>
      <div class="inputs">
        <input type="text" name="state" placeholder="State" />
        <input type="text" name="city" placeholder="City" />
      </div>
      <div class="inputs">
        <input type="text" name="Phoneno" placeholder="Phone Number" />
      </div>
      <div class="sign-button">
        <button type="submit" name="button"><i class="far fa-paper-plane"></i></button>
      </div>
    </form>
    </div>
  </div>
  <div class="right-box">
    <h2 class="Raleway">Contact Information</h2>
    <p>221b Baker Street</br>
    London, England</p>
    <p>+91 999-999-9999</p>
    <p>loremipsum@gmail.com</p>
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
