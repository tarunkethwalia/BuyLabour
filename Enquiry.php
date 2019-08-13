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
	<link href="CSS/Enquiry.css" rel="stylesheet" />
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
  <a class="logo" href="#"> <img src="Img/Logo.jpg" > </a>
  <nav>
    <ul>
      <li>
        <a href="index.php" class="active">Home</a>
      </li>
      <li id="service-li">
        <a href="#" id="service-btn">Services<i class="fas fa-caret-down"></i></a>
        <div class="dropdown-content">
          <a href="#">Labour Services</a>
          <a href="#">Other Services</a>
        </div>
      </li>
      <li>
        <a href="AboutUs.php">About Us</a>
      </li>
      <li>
        <a href="#" class="SignIn-Up" data-toggle="modal" data-target="#firstmodal">Log In</a>
      </li>
    </ul>
  </nav>
  <div class="menu-toggle">
    <i class="fas fa-bars"></i>
  </div>
</header>

<div class="wrapper">

<div id="image-part">
  <div class="container-fluid content">
    <div class="box box1">
      <h1 class="Montserrat">Enquiry Form</h1>
      <h4>Edit this div</h4>
      <!-- EDIT FROM HERE -->
      <input type="text" name="Username" placeholder="Username" />
      <br>
      <input type="text" name="Password" placeholder="Password" />
      <br>
      <button type="submit" class="btn">Submit</button>
    </div>
    <div class="box box2">
      <h1 class="Montserrat">Sign Up</h1>
      <form action="/action_page.php" >
          <div class="input-container">
            <i class="fab fa-angellist icon"></i>
            <input class="input-field" type="text" placeholder="Fullname" name="fullname">
          </div>

          <div class="input-container">
            <i class="fa fa-user icon"></i>
            <input class="input-field" type="text" placeholder="Username" name="username">
          </div>

          <div class="input-container">
            <i class="fa fa-key icon"></i>
            <input class="input-field" type="password" placeholder="Password" name="psw">
          </div>

          <div class="input-container">
            <i class="fas fa-phone icon"></i>
            <input class="input-field" type="text" placeholder="Phone No." name="phoneno">
          </div>

          <div class="input-container">
            <i class="fa fa-envelope icon"></i>
            <input class="input-field" type="email" placeholder="Email" name="email">
          </div>

          <div class="input-container">
            <i class="fas fa-building icon"></i>
            <input class="input-field" type="text" placeholder="State" name="state">
          </div>

          <div class="input-container">
            <i class="far fa-building icon"></i>
            <input class="input-field" type="text" placeholder="City" name="city">
          </div>

          <button type="submit" class="btn">Register</button>
</form>
    </div>
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
          window.location.href="Enquiry.php";
        })
      })
    </script>
    </body>
  </html>
