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
	<title>BuyLabour | labour Services</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="CSS/LabourServ.css" rel="stylesheet" />
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

<!-- Wrapper -->
<div class="wrapper">

<div class="product-head">
  <div class="head-content">
    <h1 class="Montserrat">Labour Services</h1>
    <hr>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  </br>
    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
  </div>
  <div class="head-img">
    <img src="Img/Services.jpg" alt="">
  </div>
</div>

<!-- Products -->
<div class="container product-body">
<div class="lines">

  <!--Make the below div in while loop-->
<?php
$sql = "SELECT service_id, category_id, service_name,link FROM service";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
if($row["category_id"]=="1"){
?>
  <div class="panel">
      <a href="<?php echo $row['link'];?>"><img src="Img/Labour/1.jpg" /></a>
      <h3 class="Raleway"><?php echo $row['service_name'];?></h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  </div>
  <?php
 }}
} else {
  echo "0 results";
}
?>
  <!--Till Here-->
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
