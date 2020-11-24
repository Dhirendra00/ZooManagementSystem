<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Clay brook's zoo</title>
	 <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 5%;
  }
  .image img{
  	width: 100%;
  	height: 1%;
  }
  </style>
</head>
<body>
   <header>
   	<!-- nav bar started -->
   <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(58,194,186);">

  <a class="navbar-brand" href="index.php"><img src="image/logo.jpg" style=" width: 2rem; height: 3rem; border-radius: 5px;"></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse mr-auto" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link text-capitalize ml-3 h5" href="zoo.php">Zoo <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-capitalize ml-3 h5" href="#">Administrator</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link text-capitalize ml-3 h5" href="#">Sponsor</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-capitalize ml-3 h5" href="about_us.php">About Us</a>
      </li>
    </ul>
    <form class="form-inline my-3 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-danger my-3 my-sm-0 text-capitalize h5" type="submit">Buy Ticket</button>
    </form>
   

  </div>
</nav>
   	<!-- nav bar ended-->
    <!-- multiple nav bar started -->
    <ul class="nav nav-tabs" style="background-color: rgb(68,156,151); ">
      
  
  <li class="nav-item">
    <a class="nav-link text-danger" href="#">Animals</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-danger" href="#">Plants&Gardens</a>
  </li>

</ul>

<!-- multiple nav bar ended -->

   	<!-- immage slider started -->
   	<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/slider4.jpg" alt="Los Angeles" width="1100" height="200">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/slider4.jpg" alt="Chicago" width="1100" height="200">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/slider4.jpg" alt="New York" width="1100" height="200">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<!-- image slider ended -->
   </header>
   <section style="background-color: rgb(46,70,91);">
   	<div class="container-fluid p-3">
      <div class="row p-3 m-2">
        <div class=" col-lg-6 col-md-6 col-sm-12">
            <div class="card" style="width: 38rem;">
   <a href="animal_zoo.php"><img class="card-img-top" src="image/user_dashboard/golden toad.jpg" alt="Card image cap">
       <div class="card-body text-lg-center text-md-center text-sm-center rounded bg-dark text-danger">
    <p class="card-text">Visit our animals</p></a>
        </div>
    </div>
        </div>
        <div class=" col-lg-6 col-md-6 col-sm-12">
            <div class="card" style="width: 38rem;">
   <a href=""><img class="card-img-top" src="image/user_dashboard/golden toad.jpg" alt="Card image cap">
       <div class="card-body text-lg-center text-md-right text-sm-center rounded bg-dark text-danger">
    <p class="card-text">Visist our plants and garden</p></a>
        </div>
    </div>
        </div>
        
      </div>
    </div>


   </section>
  <!-- footer started -->
   <footer style=" background-image: url('image/footer1.jpg');">
  <?php
    include 'footer.php';

    ?>
    
   </footer>

</body>
   <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</html>