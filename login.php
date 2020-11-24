<?php
include 'connection.php';
include 'session.php';
if (isset($_POST['signup'])) {
  $store=$pdo->prepare("INSERT INTO tbl_customer(name,username,password,contact,email,credit,user_type) VALUES(:name,:username,:password,:contact,:email,:credit,'user')");
  $criteria =[
    'name'=>$_POST['name'],
    'username'=>$_POST['username'],
    'password'=> password_hash($_POST['password'], PASSWORD_DEFAULT),
    'contact'=>$_POST['contact'],
    'email'=>$_POST['email'],
    'credit'=>$_POST['credit']
 
    // 'user_type'=>$_POST['user_type']
  ];
  if ($store->execute($criteria)) {
    ?>
     <strong>Added successfully.Pree Ok!! <button> <a href="login.php">OK</a></button></strong>
     <?php
}
else{
  echo "error";
}

}
?>

<!-- login -->

<?php
if (isset($_POST['login'])) {
	$login=$pdo->prepare("SELECT * FROM tbl_customer WHERE username = :username");
  $adminLogin=$pdo->prepare("SELECT * FROM tbl_user WHERE username = :username");
	$criteria=[
		'username' =>$_POST['username']
    
    
	];
  $admincriteria=[
    'username' =>$_POST['username']
  ];
	$login-> execute($criteria);
	if ($login-> rowCount() > 0) {
	
		$user = $login -> fetch();
		// if (password_verify($_POST['password'], $user['password'])) {
      if (password_verify($_POST['password'],$user['password'])) {
        $_SESSION['sess']=$_POST['username'];
       
        if ($user['user_type']=='user') {

          # code...
			header('Location:index.php');
        }
      //  else if ($user['user_type']=='admin') {
      //   // $_SESSION['session_email']=$_POST['email'];
      //    $_SESSION['sess']=$_POST['username'];
      //     # code...
      // header('Location:index.php');
      //   }
        else{
           ?>
      <strong style="color: white">User Type error</strong>
      <?php
        }
		}
		else{

			 ?>
      <strong style="color: white">Incorrect username or password</strong>
      <?php
		}
	}else{
		 ?>
      <strong style="color: white">Incorrect username or password</strong>
      <?php
	}
  $adminLogin-> execute($admincriteria);
  if ($adminLogin-> rowCount() > 0) {
  
    $user = $adminLogin -> fetch();
    // if (password_verify($_POST['password'], $user['password'])) {
      if(password_verify($_POST['password'],$user['password'])) {
        $_SESSION['sess']=$_POST['username'];
       
        if ($user['user_type']=='admin') {

          # code...
      header('Location:admin/admin_dashboard.php');
        }
      //  else if ($user['user_type']=='admin') {
      //   // $_SESSION['session_email']=$_POST['email'];
      //    $_SESSION['sess']=$_POST['username'];
      //     # code...
      // header('Location:index.php');
      //   }
        else{
          ?>
      <strong>Incorrect usertype</strong>
      <?php
        }
    }
    else{
      ?>
      <strong style="color: white">Incorrect username or password</strong>
      <?php
    }
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
</head>
<style type="text/css">
	body{
		background-image: url('image/background.png');
	}
</style>
<body>
	<header>
<div class="container-fluid">
		<!-- As a link -->
<nav class="navbar navbar-light" style="background-color: rgb(196, 196, 196); opacity: 0.5">
  <a class="navbar-brand" href="#"><img src="image/logo.jpg" style=" width: 2rem; height: 3rem; border-radius: 5px;"></a>
  	<h1 class="text-dark text-center">!Welcome To Our Zoo!</h1>
  <div class="text-center">
  </div>
</nav>	
</div>	
</header>
<section>
	<!-- container fluid -->
	<div class="container-fluid">
		<div class="row p-3">

			<!-- sign up -->
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 " style="background-color: rgb(23,22,22); opacity: 0.5; border-radius: 5rem;"  >

					<div class="row">
						<h1 class="text-light text-center ml-5 mt-3">New User?</h1><br>
						<hr class="bg-light w-100">
					</div>
				<form class="rounded p-3" method="POST" action="">

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label text-light ml-3">Name</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="name">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label text-light ml-3">Username</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="username">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label text-light ml-3">Password</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" name="password">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label text-light ml-3">Contact</label>
    <div class="col-sm-6">
      <input type="number" class="form-control" name="contact">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label text-light ml-3">Email</label>
    <div class="col-sm-6">
      <input type="email" class="form-control" name="email">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label text-light ml-3">Credit no.</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" placeholder="optional" name="credit">
    </div>
  </div>
  
 
  <div class="form-group row">
    <div class="col-sm-6">
      <button type="submit" name="signup" class="btn btn-primary ml-3">Sign in</button>
      <br>
    </div>
  </div>
</form>
			</div>

					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12  " style="background-color: rgb(23,22,22); opacity: 0.5; border-radius: 5rem;">

				<form class="rounded" method="POST" action="">
					<div class="row">
						<h1 class="text-light text-center ml-5 mt-3" type="submit">Login</h1><br>
						<hr class="bg-light w-100">
					</div>
				
  <div class="form-group row mt-2">
    <label for="inputPassword3" class="col-sm-2 col-form-label text-light ml-3">Username</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="username" >
    </div>
  </div>
  <div class="form-group row mt-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label text-light ml-3">Password</label>
    <div class="col-sm-6">
      <input type="password" class="form-control"name="password">
    </div>
  </div> 
  <div class="form-group row mb-2 mt-3">
    <div class="col-sm-6">
      <button type="submit" name="login" class="btn btn-primary ml-3">Log in</button>
      <button type="submit" class="btn btn-primary ml-5">Cancel</button>
    </div>
  </div>
  <div class="form-group row mb-3 ml-1">
    <div class="col-sm-6">
     <a href="">Forget Password?</a>
    </div>
  </div>

</form>
			</div>

			
		</div>
		
	</div>
</section>
</body>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</html>
