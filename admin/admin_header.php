<?php
include 'admin_session.php';
?>
<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
   <!-- sponsor table -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
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

  <a class="navbar-brand" href="admin_dashboard.php"><img src="../image/logo.jpg" style=" width: 2rem; height: 3rem; border-radius: 5px;"></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse mr-auto" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto p-2"> 
      <li class="nav-item">
        <a class="nav-link text-capitalize ml-3 h5" href="admin_dashboard.php">Home</a>
      </li>
    <form class="form-inline my-3 my-lg-0 ml-3">
   
    <button class="btn btn-outline-danger my-3 my-sm-0 text-capitalize h5 ml-3" type="submit"><a href="../index.php"> AS a Visitor!</button></a>
    
    </form>
    
    
    </ul>
      <span style="color: white; padding: 10px;">
      <?php
      if(isset($_SESSION['sess'])){
  echo "Hello ".$_SESSION ['sess'];
?>
</span>
<span>
     <a class="nav-link text-capitalize  h5" href="../logout.php"><img src="photo/energy.png" style="width: 40px; height: 40px;"></a>
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
      <img src="../image/slider4.jpg" alt="Los Angeles" width="1100" height="200">
      <div class="carousel-caption">
      
      </div>   
    </div>
    <div class="carousel-item">
      <img src="../image/slider6.jpg" alt="Chicago" width="1100" height="200">
      <div class="carousel-caption">
      
      </div>   
    </div>
    <div class="carousel-item">
      <img src="../image/slider7.jpg" alt="Chicago" width="1100" height="200">
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
 
   <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!-- <script src="../js/datatables.min.js"></script> -->
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

<!-- bootstrap 4 table for sponsor -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


<!--datatable -->
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable( {
        "scrollY": 200,
        "scrollX": true
    } );
} );

</script>
<script type="text/javascript">
$(document).ready(function() {
    $('#example1').DataTable( {
        "scrollY": 200,
        "scrollX": true
    } );
} );

</script>

<script type="text/javascript">
$(document).ready(function() {
    $('#example2').DataTable( {
        "scrollY": 200,
        "scrollX": true
    } );
} );

</script>

<script type="text/javascript">
$(document).ready(function() {
    $('#example3').DataTable( {
        "scrollY": 200,
        "scrollX": true
    } );
} );

</script>

<script type="text/javascript">
$(document).ready(function() {
    $('#sponsor').DataTable( {
        "scrollY": 200,
        "scrollX": true
    } );
} );

</script>
</html>