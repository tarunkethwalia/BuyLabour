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
	<link href="CSS/inde.css" rel="stylesheet" />
  </head>
  <body>

    <!-- Modal -->
<div class="modal fade" id="firstmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sign In</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="modal-content">
          <h1>Modal in progress</h1>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success">Submit</button>
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
        <a href="#" class="active">Home</a>
      </li>
      <li>
        <a href="#">Services</a>
      </li>
      <li>
        <a href="#">About Us</a>
      </li>
      <li>
        <a href="#" class="SignIn-Up" data-toggle="modal" data-target="#firstmodal">Sign Up / Log In</a>
      </li>
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
<h3 class="Raleway">Labour Services</h3>
<div class="row">

  <!--Make the below div in while loop-->

  <div class="col-xl-6 col-sm-3 panel">
    <a href=""><img src="Img/Labour/1.jpg" /></a>
    <h4>First Service</h4>
  </div>

  <!--Till Here-->
</div>

<!--Second Row Slider-->
<h3 class="Raleway">Other Services</h3>
<div class="row">

  <!--Make the below div in while loop-->

  <div class="col-xl-6 col-sm-3 panel">
    <a href=""><img src="Img/Labour/5.jpg" /></a>
    <h4>Fifth Service</h4>
  </div>

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
      })
    })
  </script>
  </body>
</html>
