<?php
session_start();
include 'connection.php';
?>
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

  <a class="navbar-brand" href="#"><img src="image/logo.jpg" style=" width: 2rem; height: 3rem; border-radius: 5px;"></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  

  <div class="collapse navbar-collapse mr-auto" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link text-capitalize ml-3 h5" href="animal_zoo.php">Zoo</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-capitalize ml-3 h5" href="administrator.php">Administrator</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link text-capitalize ml-3 h5" href="sponsor.php">Sponsor</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-capitalize ml-3 h5" href="about_us.php">About Us</a>
      </li>
    </ul>
   
    <form class="form-inline my-3 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-danger my-3 my-sm-0 text-capitalize h5" type="submit"><a href="buy_ticket.php">Buy Ticket</button></a>
    </form>
     <span style="color: white; padding: 10px;">
      <?php
      if(isset($_SESSION['sess'])){
  echo "Hello ".$_SESSION ['sess'];
?>
</span>
<span>
     <a class="nav-link text-capitalize  h5" href="logout.php"><img src="admin/photo/energy.png" style="width: 40px; height: 40px;"></a>
     <?php }
  ?>
  </span>
   

  </div>
</nav>
   	<!-- nav bar ended-->

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
        
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/slider6.jpg" alt="Chicago" width="1100" height="200">
      <div class="carousel-caption">
    
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/slider7.jpg" alt="New York" width="1100" height="200">
      <div class="carousel-caption">
       
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
   	<div class="container-fluid">
   		<div class="row p-3 text-lg-center text-md-center text-sm-center">
   			<div class="col-md-3 col-sm-6">
   		<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="image/user_dashboard/cassories.jpg" alt="Card image cap" style="height: 18rem;">
  <div class="card-body bg-danger">
    <p class="card-text h5">Hi! I am Cassowary, I am the second heaviest living bird.</p>
  </div>
</div>
   	</div>

   		<div class="col-md-3 col-sm-6">
   		<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="image/user_dashboard/golden toad.jpg" alt="Card image cap" style="height: 18rem;">
  <div class="card-body bg-danger">
    <p class="card-text h5">Hi! Everyone called me golden toad, I came from Costarica</p>
  </div>
</div>
   	</div>

   		<div class="col-md-3 col-sm-6">
   		<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="image/user_dashboard/tiger.jpg" alt="Card image cap" style="height: 19.5rem;">
  <div class="card-body bg-danger">
    <p class="card-text h5">Hi! I am a leopard everyone called me big cat</p>
  </div>
</div>
   	</div>

  <div class="col-md-3 col-sm-6">
   	<div class="card" style="width: 18rem;">
   <img class="card-img-top" src="image/user_dashboard/wolf.jpg" alt="Card image cap" style="height: 18rem;">
       <div class="card-body bg-danger">
    <p class="card-text h5">Hi! I am white fox, I came from arctic region just for you</p>
        </div>
    </div>
  </div>
   </div>
   </div>
<!-- end of card -->
<div class="container" style="background-color: rgb(71,117,63,87%); font-family: 'serif'; border-radius: 30px;">
	<div class="row p-3">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-lg-center text-xl-center text-md-center text-sm-center text-light h2">
		<p> Book Your Ticket To View Our World!</p>

			<a href="buy_ticket.php"><button class="btn btn-outline-danger my-3 my-sm-0 text-capitalize" style="background-color: rgb(50,187,179); width: 13rem; font-size: 20px; font-weight: bold;" type="submit">Buy Ticket</button></a> 
		
	</div>

</div>
</div>
	<br>
<!-- <div class="container-fluid">
	<h1 style="text-decoration: none;">.</h1>
</div> -->
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