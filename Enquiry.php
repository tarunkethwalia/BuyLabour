<?php
session_start();
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
	<title>BuyLabour | Enquiry</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="CSS/Enquiryc.css" rel="stylesheet" />
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
        <a href="#" id="service-btn">Services<i class="fas fa-caret-down"></i></a>
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

<div id="image-part">
  <div class="container-fluid content">
    <div class="box">
      <img src="Img/Labour/8.jpg" />
      <h1 class="Montserrat"><?php if(isset($_SESSION['service_name'])){echo $_SESSION['service_name'];}?></h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <form>
        <div class="inputs">
            <label for="company">Company Name:</label>
            <input type="text" id="comp">
        </div>
        <div class="inputs">
            <label for="phno">Phone No:</label>
            <input type="text" id="phno">
        </div>
        <div class="inputs">
            <label for="qty">Labour Required:</label>
            <input type="text" id="qty" value="1">
        </div>
        <div class="inputs texting">
            <textarea placeholder="Description" id="desc"></textarea>
        </div>
        <div class="inputs">
            <label>Urgent:</label>
            <label for="yes">Yes</label>
            <input type="radio" name="urgent" value="yes">
            <label for="no">No</label>
            <input type="radio" name="urgent" value="no">
        </div>
        <div class="inputs">
            <label for="address">Address:</label>
            <input type="text" id="add">
        </div>
        <div class="sub-btn">
            <button id="btn" type="button" onclick="submit_query()">Submit Enquiry</button>
        </div>
        <p id="msg"></p>
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
    <script>
function submit_query(){
  var comp=$("#comp").val();
  var phno=$("#phno").val();
  var desc=$("#desc").val();
  var qty=$("#qty").val();
  var urgent=$("input[name='urgent']:checked").val();
  var address=$("#add").val();
    $.ajax({
      url: "submit_query.php",
      type: "POST",
      data: {
        company_name:comp,
        phone_no:phno,
        description:desc,
        urgent:urgent,
        address:address,
        qty:qty
      },
      success: function (result) {
        document.getElementById("msg").innerHTML="Your Enquiry has been submitted successfully";
        var timer = setTimeout(function() {
            window.location='index.php';
        }, 3000);
      }
  });
}
    </script>
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
