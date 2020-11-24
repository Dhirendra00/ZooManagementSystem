<?php
include 'connection.php';
include 'session.php';


if (isset($_POST['buy_ticket'])) {
  if(empty($_SESSION['sess']) || $_SESSION['sess'] == ''){
    header("Location:login.php");
    die();
}

  $ticket=$pdo->prepare("INSERT INTO tbl_ticket(child,adult,oldage,ticket_date,total_amount,username)VALUES(:child,:adult,:oldage,:ticket_date,:total_amount,:username)");
  $username=$_SESSION['sess'];
  $criteria =[
    'child'=>$_POST['child'],
    'adult'=>$_POST['adult'],
    'oldage'=>$_POST['oldage'],
    'ticket_date'=>$_POST['ticket_date'],
    'total_amount'=>$_POST['total_amount'],
    'username'=>$username
  ];

if($ticket->execute($criteria)){
 
    ?>
     <strong>Ticket purchased successfully with your username. <button> <a href="buy_ticket.php">OK</a></button></strong>
     <?php
}
else{
 ?>
     <strong>Error!. <button> <a href="buy_ticket.php">OK</a></button></strong>
     <?php
}

}

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
   
 
       

        #wrapper {
           height: 31rem;
            width: auto;
            background-color: #fff;
            box-shadow: 0px 0px 15px 4px;
       
        }

        .months {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            padding: 10px 20px;
            text-align: center;
            background-color: #2ecc71;
            color: white;
        }

        .weeks {
            background-color: #27ae60;
            color: white;
            padding: 5px ;
            display: flex;
        }

        .days {
            font-weight: 300;
            padding: 10px 0;
            display: flex;
            flex-wrap: wrap;
        }

        .weeks div,
        .days div {
            text-align: center;
            width: 14.28%;
        }

        .days div {
            padding: 10px 0;
            margin-bottom: 10px;
            transition: all 0.4s;
        }

        .previous_date {
            color: #999;
        }

        .initialDate {
            background-color: #27ae60;
            color: #fff;
        }

        .days div:hover {
            cursor: pointer;
            background-color: #dfe6e9;
        }

        .backward,
        .forward {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            font-size: 23px;
            background-color: rgba(0, 0, 0, 0.1);
            transition: all 0.4s;
        }

        .backward:hover,
        .forward:hover {
            cursor: pointer;
            background-color: rgba(0, 0, 0, 0.2);
        }

        #month_name {
            font-size: 30px;
            font-weight: 500;
        }

  </style>
  <script type="text/javascript" src="code.jquery.com/jquery-1.10.2.js"></script>
  <script type="text/javascript">
    function total(){
          var child = document.getElementById('child').value;
          var adult = document.getElementById('adult').value;
          var oldage = document.getElementById('oldage').value;
          var total_amount = parseInt((child)*12)+((adult)*20)+((oldage)*8);
           if (!isNaN(total_amount)) {
                document.getElementById('total_amount').value = total_amount;
            }

        }
  </script>

</head>
<body onload="displayDate()">
   <header>
   	<!-- nav bar started -->
     <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(58,194,186);">

  <a class="navbar-brand" href="index.php"><img src="image/logo.jpg" style=" width: 2rem; height: 3rem; border-radius: 5px;"></a>

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
    <button class="btn btn-outline-danger my-3 my-sm-0 text-capitalize h5" type="submit"><a href="buy_ticket.php"> Buy Ticket </button>
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
    <!-- multiple nav bar started -->
    <ul class="nav nav-tabs " style="background-color: rgb(68,156,151); ">
      
  
  <li class="nav-item ml-auto">
    <a class="nav-link text-danger" href="login.php">Become a Members</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-danger" href="login.php">Login/Register</a>
  </li>
  
   <li class="nav-item">
    <a class="nav-link text-danger" href="login.php">Donate</a>
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
   	<div class="container-fluid p-3">
      <!-- calendar  -->

     <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 ">
    
        <div id="wrapper" class="rounded">
            <div class="months">
                <div class="backward" onclick="changeDate('backward')">
                    <span>&#10094;</span>
                </div>
                <div>
                    <h2 id="month_name"></h2>
                    <p id="date"></p>
                </div>
                <div class="forward" onclick="changeDate('forward')">
                    <span>&#10095;</span>
                </div>
            </div>
            <div class="weeks">
                <div>Sun</div>
                <div>Mon</div>
                <div>Tue</div>
                <div>Wed</div>
                <div>Thu</div>
                <div>Fri</div>
                <div>Sat</div>
            </div>
            <div class="days">

            </div>
        </div>
        </div>
        <!-- ticket form -->
         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
          <form method="POST" action="" class="rounded" style=" background-color: rgb(233,22,22);">

  
  <div class="form-row">
    <div class="container">
      <h2 class="text-light text-center text-capitalize">
    Buy a ticket!
    <hr class="w-75 bg-light">
    </h2>
    <!-- labelling header -->
    <div class="row  ml-3">
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 ">
        <p class="text-center h5">Child:12$</p>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
        <p class="text-center h5">Adult:20$</p>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
        <p class="text-center h5">Oldage:8$</p>
      </div>
    </div>
<!-- labelling second header -->
    <div class="row p-1  ml-3">
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 ">
        <h4 class="text-light text-center">Child<br>Age(0-11)</h4>
        <br>
        <input type="number" name="child" id="child" onkeyup="total()" >
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
       <h4 class="text-light text-center">Adult<br>Age(12-49)</h4>
       <br>
        <input type="number" name="adult" id="adult" onkeyup="total()">
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
       <h4 class="text-light text-center">Oldage<br>Age(50-55+)</h4>
       <br>
        <input type="number" name="oldage" id="oldage" onkeyup="total()">
      </div>
      
    </div>

    <div class="row ml-3 mt-3">
      <div class=" col mt-3">
      <p class="text-dark text-right text-capitalize mr-auto">Pick a Date:
      <input type="date" name="ticket_date"><br> <br>
      </p>
    </div>
    </div>
  
    <hr class="w-100 bg-light">
    <div class=" col">
      <h4 class="text-light text-right text-capitalize mr-auto">Total:
      <input type="text" name="total_amount" id="total_amount" style="width: 10rem;"><br> <br>
   <button class="btn btn-outline-danger my-3 my-sm-0 text-capitalize ml-5" style="background-color: rgb(50,187,179);  font-size: 15px; font-weight: bold;" type="submit" name="buy_ticket">Confirm</button>
      </h4>
    </div>
 <br>
    </div>
  </div>
 
</form>

    
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

 <script>
 var d = new Date();
        function displayDate() {
            d.setDate(1);
            var day = d.getDay();
            var initaiDate = new Date();
            var finalDate = new Date(
                d.getFullYear(),
                d.getMonth() + 1,
                0
            ).getDate();

            var previousDate = new Date(
                d.getYear(),
                d.getMonth(),
                0
            ).getDate();
            var month = [
                "January",
                "February",
                "March",
                "April",
                "May",
                "June",
                "July",
                "August",
                "September",
                "October",
                "November",
                "December"
            ]
            document.getElementById("month_name").innerHTML = month[d.getMonth()];
            document.getElementById("date").innerHTML = d.toDateString();
            var column = "";
            for (x = day; x > 0; x--) {
                column += "<div class='previous_date'>" + (previousDate - x + 1) + "</div>";
            }
            console.log(day);
            for (i = 1; i <= finalDate; i++) {
                if (i == initaiDate.getDate() && d.getMonth() == initaiDate.getMonth()) column += "<div class='initialDate'>" + i + "</div>";
                else
                    column += "<div>" + i + "</div>";
            }
            document.getElementsByClassName("days")[0].innerHTML = column;

        }

        function changeDate(data) {
            if(data == "backward") {
                d.setMonth(d.getMonth() - 1);
            } else if(data == 'forward') {
                d.setMonth(d.getMonth() + 1);
            }
            displayDate();
        }


        
   
 </script>