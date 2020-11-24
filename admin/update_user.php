<?php
include 'admin_header.php';
include '../connection.php';
if (isset($_GET['id'])) {
  $id=$_GET['id'];
 
}
if (isset($_POST['update_user'])) {
  $update=$pdo->prepare("UPDATE tbl_user SET first_name=:first_name,last_name=:last_name,address=:address,username=:username,password=:password,contact=:contact,email=:email WHERE id=:id");
  $criteria =[
    'first_name'=>$_POST['first_name'],
    'last_name'=>$_POST['last_name'],
    'address'=>$_POST['address'],
    'username'=>$_POST['username'],
    'password'=>$_POST['password'],
    'contact'=>$_POST['contact'],
    'email'=>$_POST['email'],
    'id'=>$id
    // 'user_type'=>$_POST['user_type']
  ];
  if ($update->execute($criteria)) {
    ?>
     <strong>updated successfully.Pree Ok!! <button> <a href="admin_staff.php">OK</a></button></strong>
     <?php
}
else{
  echo "error";
}

}
?>
<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
   <header>

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
            <h1 class="text-danger text-center ml-3 ">Update Staff</h1> <a href="admin_staff.php"><button class="btn btn-outline-danger my-3 my-sm-0 text-capitalize" style="background-color: rgb(50,187,179); width: 10rem; font-size: 20px; font-weight: bold; margin-left: 47.5rem;" type="submit">Back</button></a> <br>
            <hr class="bg-light w-100">

          </div>
        <div class="container rounded p-5" style="background-color: white;">   
        <form class="rounded p-3" method="POST" action="">

  <div class="form-group row p-2">
    <label for="inputEmail3" class="col-sm-2 col-form-label text-dark ml-3">First_Name</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="first_name">
    </div>
  </div>
  <div class="form-group row p-2">
    <label for="inputEmail3" class="col-sm-2 col-form-label text-dark ml-3">Last_Name</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="last_name">
    </div>
  </div>
   <div class="form-group row p-2">
    <label for="inputEmail3" class="col-sm-2 col-form-label text-dark ml-3">Address</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="address">
    </div>
  </div>
  <div class="form-group row p-2">
    <label for="inputPassword3" class="col-sm-2 col-form-label text-dark ml-3">Username</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="username">
    </div>
  </div>
  <div class="form-group row p-2">
    <label for="inputPassword3" class="col-sm-2 col-form-label text-dark ml-3">Password</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" name="password">
    </div>
  </div>
  <div class="form-group row p-2">
    <label for="inputPassword3" class="col-sm-2 col-form-label text-dark ml-3">Contact</label>
    <div class="col-sm-6">
      <input type="number" class="form-control" name="contact">
    </div>
  </div>
  <div class="form-group row p-2">
    <label for="inputPassword3" class="col-sm-2 col-form-label text-dark ml-3">Email</label>
    <div class="col-sm-6">
      <input type="email" class="form-control" name="email">
    </div>
  </div>
  <hr class="w-100">
 
  <div class="form-group row p-2">
    <div class="col-sm-6">
      <button type="submit" name="update_user" class="btn ml-0" style="background-color: rgb(50,187,179); width: 10rem; font-size: 20px; font-weight: bold; margin-left: 47.5rem;">Confirm</button>
       <button type="submit" name="signup" class="btn ml-5" style="background-color: rgb(50,187,179); width: 10rem; font-size: 20px; font-weight: bold; margin-left: 47.5rem;">Cancel</button>
      <br>
    </div>
  </div>
</form>
        <!-- <p class="text-center h3 text-light" style="background-color: rgb(52,52,77); border-radius: 10px;">Our Administrator</p> -->
       </div>
      </div>
      
    </div>
   </section>

   
   <!-- footer started -->
   <footer style=" background-image: url('../image/footer1.jpg');">
   <?php
   include'admin_footer.php';

   ?>
   	
   </footer>

</body>

</html>