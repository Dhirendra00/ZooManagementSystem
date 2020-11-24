<?php
include 'admin_header.php';
include '../connection.php';
?>
<?php
if (isset($_POST['add_mammal'])) {
    $target ="photo/mammal/".basename($_FILES['image']['name']); 
    move_uploaded_file($_FILES['image']['tmp_name'],$target);
     $target1="photo/mammal/sponsor/".basename($_FILES['sponsor']['name']);
    move_uploaded_file($_FILES['sponsor']['tmp_name'],$target1);
  // $filename = $_FILES["image"]["name"];
  // $tempname = $_FILES["image"]["tmp_name"];
  // $location = "photo/".$filename;
  // move_uploaded_file($tempname, $location);
$stmt=$pdo->prepare("INSERT INTO tbl_mammal(species_name,given_name,category,av_life_span,date_of_birth,date_joined,dietry_requirement,natural_habitat,location_code,dimension_in_zoo,average_dimension,gestational_period,gender,image,sponsor) VALUES (:species_name,:given_name,:category,:av_life_span,:date_of_birth,:date_joined,:dietry_requirement,:natural_habitat,:location_code,:dimension_in_zoo,:average_dimension,:gestational_period,:gender,:image,:sponsor)");
$criteria =[
'species_name'=>$_POST['species_name'],
'given_name'=>$_POST['given_name'],
'category'=>$_POST['category'],
'av_life_span'=>$_POST['av_life_span'],
'date_of_birth'=>$_POST['date_of_birth'],
'date_joined'=>$_POST['date_joined'],
'dietry_requirement'=>$_POST['dietry_requirement'],
'natural_habitat'=>$_POST['natural_habitat'],
'location_code'=>$_POST['location_code'],
'dimension_in_zoo'=>$_POST['dimension_in_zoo'],
'average_dimension'=>$_POST['average_dimension'],
'gestational_period'=>$_POST['gestational_period'],
'gender'=>$_POST['gender'],
'image'=>$_FILES['image']['name'],
'sponsor'=>$_FILES['sponsor']['name']
];
if($stmt->execute($criteria)){
    ?>
     <strong>Added successfully.Pree Ok!! <button> <a href="admin_zoo.php">OK</a></button></strong>
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
            <h1 class="text-danger text-center ml-3 ">Add Mammal</h1> <a href="admin_zoo.php"><button class="btn btn-outline-danger my-3 my-sm-0 text-capitalize" style="background-color: rgb(50,187,179); width: 10rem; font-size: 20px; font-weight: bold; margin-left: 37rem;" type="submit">Back</button></a> <br>
            <hr class="bg-light w-100">

          </div>
        <div class="container rounded p-5" style="background-color: white;">   
        <form method="POST" action="" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-4">
      <label>Species Name</label>
      <input type="text" class="form-control" name="species_name">
    </div>
    <div class="form-group col-md-4">
      <label>Given Name</label>
      <input type="text" class="form-control" name="given_name">
    </div>
     <div class="form-group col-md-4">
      <label>Category/Classification</label>
      <input type="text" class="form-control" name="category">
    </div>
<!-- second row -->
  <div class="form-group col-md-4">
      <label>Average Life Span</label>
      <input type="text" class="form-control" name="av_life_span">
    </div>
    <div class="form-group col-md-4">
      <label>Date Of Birth</label>
      <input type="date" class="form-control" name="date_of_birth">
    </div>
     <div class="form-group col-md-4">
      <label>Date Joined</label>
      <input type="date" class="form-control" name="date_joined">
    </div>

<!-- third row -->
  <div class="form-group col-md-4">
      <label>Dietry Requirement</label>
      <input type="text" class="form-control" name="dietry_requirement">
    </div>
    <div class="form-group col-md-4">
      <label>Natural Habitat Description</label>
      <input type="text" class="form-control" name="natural_habitat">
    </div>
     <div class="form-group col-md-4">
      <label>Location code</label>
      <input type="text" class="form-control" name="location_code">
    </div>
<!-- fourth row -->
 
    <div class="form-group col-md-4">
      <label>Dimension in Zoo</label>
      <input type="text" class="form-control" name="dimension_in_zoo">
    </div>
     <div class="form-group col-md-4">
      <label>Average Dimension</label>
      <input type="text" class="form-control" name="average_dimension">
    </div>
  <div class="form-group col-md-4">
      <label>Gestational Period</label>
      <input type="text" class="form-control" name="gestational_period">
    </div>
 <!-- fifth row -->
     <div class="form-group col-md-4">
      <label>Plumane colour variants</label>
      <input type="text" class="form-control" name="colour_variant">
    </div>

<div class="form-group col-md-4">
      <label >Gender</label>
      <select class="form-control" name="gender">
        <option>Male</option>
        <option>Female</option>
      </select>
    </div>
     <div class="form-group col-md-4">
    <label>Upload Photo</label>
    <input type="file" name="image">
  </div>
   <div class="form-group col-md-4">
    <label>Add Sponsor</label>
    <input type="file" name="sponsor">
  </div>
  </div>
  <hr class="w-100">
 
  <div class="form-group row p-2">
    <div class="col-sm-6">
      <button type="submit" name="add_mammal" class="btn" style="background-color: rgb(50,187,179); font-size: 20px; font-weight: bold; ">Confirm</button>
       <button type="submit" name="signup" class="btn" style="background-color: rgb(50,187,179);  font-size: 20px; font-weight: bold;">Cancel</button>
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