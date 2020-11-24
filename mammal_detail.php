<?php
include 'connection.php';
include 'session.php';

?>
<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
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
  div.dataTables_wrapper {
        width: 200px;
        margin: 0 auto;
    }
	.items{
		display: flex;
		overflow-x: auto;
	}
	.items:: -webkit-scrollbar{
		/*display: none;*/
	}
	.item{
		min-width: 150px;
		height: 150px;
		background-color: grey;
		margin : 5px;
	}
	img{
		padding:5px;
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
        <a class="nav-link text-capitalize ml-3 h5" href="animal_zoo.php">Zoo <span class="sr-only">(current)</span></a>
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
    <button class="btn btn-outline-danger my-3 my-sm-0 text-capitalize h5" type="submit"><a href="buy_ticket.php">Buy Ticket</button>
    </form>
    <span style="color: white; padding: 10px;">
      <?php
      if(isset($_SESSION['sess'])){
  echo "Hello ".$_SESSION ['sess'];
?>
</span>
<span>
     <a class="nav-link text-capitalize  h5" href="logout.php"><img src="admin/photo/energy.png" style="width: 50px; height: 50px;"></a>
     <?php }
  ?>
  </span>
   
   

  </div>
</nav>
   	<!-- nav bar ended-->
    <!-- multiple nav bar started -->


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
    <!-- data tabbles for staff record -->
    <div class="container-fluid p-5" >
 <!--      <ul class="ml-auto">
       <button class="btn btn-outline-danger my-3 my-sm-0 text-capitalize h5 ml-3" type="submit">Add Administrator</button>
    </ul> -->
 
      <div class="container p-4" style="border-radius: 10px; background-color: rgb(52,52,77);">
<!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 " style="background-color: rgb(23,22,22); opacity: 0.5; border-radius: 5rem;"  > -->

          <div class="row">
            <a href="animal_zoo.php"><button class="btn btn-outline-danger ml-3 my-sm-0 text-capitalize" style="background-color: rgb(50,187,179); width: 10rem; font-size: 20px; font-weight: bold;" type="submit">Back</button></a> <br>
            <hr class="bg-light w-100">

          </div>
        <div class="container rounded p-5" style="background-color: white;">   
       <form method="POST" action="" enctype="multipart/form-data">
      <div class="form-row">
        <?php  
        if (isset($_GET['id'])) {
  $id=$_GET['id'];
$view=$pdo->prepare("SELECT * FROM tbl_mammal WHERE id={$_GET['id']}");
$view->execute();
        foreach ($view as $display ) {
          // echo $display['species_name'];

        ?>
     <div class="form-group col-md-12">
    <label> <?php
          echo '<img src="admin/photo/mammal/'.$display['image'].'" width="150rem"; height="150rem"; alt=" card image cap">';?></label>
  
  </div>
    <div class="form-group col-md-6">
      <label>Species Name : <?php echo $display['species_name']; ?></label>
    
    </div>
    <div class="form-group col-md-6">
      <label>Given Name : <?php echo $display['given_name']; ?></label>
    </div>
     
     <div class="form-group col-md-6">
      <label>Category/Classification : <?php echo $display['category']; ?></label>
    
    </div>
<!-- second row -->
  <div class="form-group col-md-6">
      <label>Average Life Span : <?php echo $display['av_life_span']; ?></label>
    
    </div>
    <div class="form-group col-md-6">
      <label>Date Of Birth : <?php echo $display['date_of_birth']; ?></label>
     
    </div>
     <div class="form-group col-md-6">
      <label>Date Joined : <?php echo $display['date_joined']; ?></label>
     
    </div>

<!-- third row -->
  <div class="form-group col-md-6">
      <label>Dietry Requirement : <?php echo $display['dietry_requirement']; ?></label>
     
    </div>
    <div class="form-group col-md-6">
      <label>Natural Habitat : <?php echo $display['natural_habitat']; ?></label>
    
    </div>
     <div class="form-group col-md-6">
      <label>Location code : <?php echo $display['location_code']; ?></label>
   
    </div>
<!-- fourth row -->
 
    <div class="form-group col-md-6">
      <label>Dimension in Zoo : <?php echo $display['dimension_in_zoo']; ?></label>
     
    </div>
     <div class="form-group col-md-6">
      <label>Average Dimension : <?php echo $display['average_dimension']; ?></label>
    
    </div>
    <div class="form-group col-md-6">
      <label>Gestational Period : <?php echo $display['gestational_period']; ?></label>
    
    </div>
 <!-- fifth row -->
 
     <div class="form-group col-md-6">
      <label>Plumane colour variants : <?php echo $display['colour_variant']; ?></label>
     
    </div>

<div class="form-group col-md-6">
      <label >Gender : <?php echo $display['gender']; ?></label>
     
    </div>
    <label> Sponsor:<?php
          echo '<img src="image/sponsor/'.$display['sponsor'].'" width="150rem"; height="150rem"; alt=" card image cap">';?></label>
  </div>
     
  <hr class="w-100">

 <?php }
 
}?> 
</form>
        <!-- <p class="text-center h3 text-light" style="background-color: rgb(52,52,77); border-radius: 10px;">Our Administrator</p> -->
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

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<!--datatable -->
<script type="text/javascript">
$(document).ready(function() {
    $('#example8').DataTable( {
        "scrollY": 200,
        "scrollX": true
    } );
} );

</script>
</html>












