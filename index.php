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
	<link href="CSS/indexs.css" rel="stylesheet" />
  </head>
  <body>

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
        <a href="#">About</a>
      </li>
      <li>
        <a href="#">Team</a>
      </li>
      <li>
        <a href="#" class="SignIn-Up">Sign Up / Log In</a>
      </li>
    </ul>
  </nav>
  <div class="menu-toggle">
    <i class="fas fa-bars"></i>
  </div>
</header>

<!-- Carousel -->
<div class="wrapper">
<div class="carousel slide" id="mySlider" data-ride="carousel">
    <div class="Carousel-upper">
    <div class="Upper-part">
      <h2>Location Track in Progress</h2>
      <button type="button" class="btn btn-success" name="button">Submit</button>
    </div>
    </div>
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

      <a class="left carousel-control" href="#mySlider" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#mySlider" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
</div>


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
