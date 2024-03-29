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
	<title>BuyLabour | Home</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="CSS/indeu.css" rel="stylesheet" />
  <script src="ajax_signup.js"></script>
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
              <input type="text" class="username" id="username" placeholder="Username" required />
            </div>
            <div class="block">
              <label for="Password">Password</label>
              <input type="password" class="password" id="password" placeholder="Password" required />
            </div>
            <br>
            <div class="block3">
              <label for="Or">Or Sign Up </label>
              <a href="Enquiry.php" class="modal-a-link" type="button" data-dismiss="modal" >Click Here</a>
              <p id="msg" style="color:red"></p>
            </div>
          </div>
          <div class="modal-footer">
            <input type="button" class="modal-btn" value="Submit" onclick="login()"/>
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

  <!-- Carousel -->
<div class="carousel slide" id="mySlider" data-ride="carousel">
    <div class="carousel-inner">
      <div class="item active">
        <img src="Img/Carousel/1.jpg" alt="">
      </div>
      <div class="item">
        <img src="Img/Carousel/2.jpg" alt="">
      </div>
      <div class="item">
        <img src="Img/Carousel/3.jpg" alt="">
      </div>
    </div>

    <div class="shadow"></div>

    <div class="Carousel-upper">
    <div class="Upper-part">
      <h4>The Next Big Thing In Services.</h4>
    </div>
    </div>

      <a class="left carousel-control" href="#mySlider" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#mySlider" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
</div>

<!--Sliders-->
<div class="container">

<!--First Row Slider-->
<h3 class="Raleway srvc-heading">Labour Services (Corporate)</h3>
<div class="row">

  <!--Make the below div in while loop-->
  <div class="col-xl-6 col-sm-3 panel">
    <a href="skilled.php"><img src="Img/Labour/1.jpg" /></a>
    <h4>Skilled</h4>
  </div>

  <div class="col-xl-6 col-sm-3 panel">
    <a href="unskilled.php"><img src="Img/Labour/1.jpg" /></a>
    <h4>Unskilled</h4>
  </div>
  <!--Till Here-->
</div>

<!--Second Row Slider-->
<h3 class="Raleway">Other Services (Urgent)</h3>
<div class="row">

  <!--Make the below div in while loop-->

  <?php
$sql = "SELECT service_id, category_id, service_name FROM service";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
if($row["category_id"]=="2"){
?>

  <div class="col-xl-6 col-sm-3 panel">
    <a href="#" onclick="checkout(this.id)" id=<?php echo $row['service_id'];?>><img src="Img/Labour/5.jpg" /></a>
    <h4><?php echo $row['service_name'];?></h4>
  </div>
  <?php
 }}
} else {
  echo "0 results";
}
$conn->close();
?>
  <!--Till Here-->
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
