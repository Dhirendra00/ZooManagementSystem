<?php
    include'admin_header.php';
    include '../connection.php';
    $view_bird=$pdo->prepare("SELECT * FROM tbl_bird");
$view_bird->execute();
$view_reptile=$pdo->prepare("SELECT * FROM tbl_reptile");
$view_reptile->execute();
$view_mammal=$pdo->prepare("SELECT * FROM tbl_mammal");
$view_mammal->execute();
$view_fish=$pdo->prepare("SELECT * FROM tbl_fish");
$view_fish->execute();

    ?>
<!DOCTYPE html>
<html>
<head>
</head>
<style type="text/css">
div.dataTables_wrapper {
        width: auto;
        margin: 0;
    }
</style>
<body>

   <section style="background-color: rgb(46,70,91);">
    <!-- data tabbles for staff record -->
    <div class="container-fluid p-5" >
        <ul class="ml-auto">
       <a href="add_bird.php"><button class="btn btn-outline-danger my-3 my-sm-0 text-capitalize h5 ml-3" type="submit">Add Birds</button></a>
       <a href="add_fish.php"><button class="btn btn-outline-danger my-3 my-sm-0 text-capitalize h5 ml-3" type="submit">Add Amphibian</button></a>
       <a href="add_reptile.php"><button class="btn btn-outline-danger my-3 my-sm-0 text-capitalize h5 ml-3" type="submit">Add Reptiles</button></a>
       <a href="add_mammal.php"><button class="btn btn-outline-danger my-3 my-sm-0 text-capitalize h5 ml-3" type="submit">Add Mammals</button></a>
    </ul>
 
      <div class="container bg-light p-3" style="border-radius: 10px;">
        <p class="text-center h3 text-light" style="background-color: rgb(52,52,77); border-radius: 10px;">Our Birds</p>
     <div class="table-responsive" style="height: 300px;">
    <table class="table table-bordered">
      <thead>
        <tr>
                <th>Species Name</th>
                <th>Given Name</th>
                <th>Category</th>
                <th>Av. Life Span</th>
                <th>Date Of Birth</th>
                <th>Date Joined</th>
                <th>Dietry Requirement</th>
                <th>Natural Habitat</th>
                <th>Location Code</th>
                <th>Dimension In Zoo</th>
                <th>Av. Dimension</th>
                <th>Clutch Size</th>
                <th>Nest Construction Method</th>
                <th>Wing Span</th>
                <th>Colour Variant</th>
                <th>Gender</th>
                <th>Image</th>
                <th>Fly</th>
                <th>Sponsor</th>
                <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $view=$pdo->prepare("SELECT * FROM tbl_bird");
        $view->execute();
        foreach ($view as $display) {?>
        <tr>
          
                   <td><?php echo $display['species_name']; ?></td> 
                   <td><?php echo $display['given_name']; ?></td> 
                   <td><?php echo $display['category']; ?></td>
                   <td><?php echo $display['av_life_span']; ?></td>
                   <td><?php echo $display['date_of_birth']; ?></td>
                   <td><?php echo $display['date_joined']; ?></td>
                   <td><?php echo $display['dietry_requirement']; ?></td>
                   <td><?php echo $display['natural_habitat']; ?></td>
                   <td><?php echo $display['location_code']; ?></td>
                   <td><?php echo $display['dimension_in_zoo']; ?></td>
                   <td><?php echo $display['average_dimension']; ?></td>
                   <td><?php echo $display['clutch_size']; ?></td>
                   <td><?php echo $display['nest_construction_method']; ?></td>
                   <td><?php echo $display['wingspan']; ?></td>
                   <td><?php echo $display['colour_variant']; ?></td>
                   <td><?php echo $display['gender']; ?></td>
                   <td><?php echo '<img src="photo/sponsor/'.$display['image'].'" width="100rem"; height="100rem"; alt=" card image cap">'; ?></td>
                   <td><?php echo $display['fly']; ?></td>
                   <td><?php echo $display['sponsor']; ?></td>
                   <td><span><a href="update_bird.php?id=<?=$display['id']?>">edit</span></a> <SPAN><a onclick="return confirm('Are you sure to delete?')" href="delete_bird.php?id=<?=$display['id']?>">delete</SPAN></a></td>
        </tr>
         <?php }
        ?>
      </tbody>
    </table>
  </div>
   <p class="text-center h3 text-light" style="background-color: rgb(52,52,77); border-radius: 10px;">Our Reptiles</p>
     <div class="table-responsive" style="height: 300px;">
    <table class="table table-bordered">
      <thead>
        <tr>
                <th>Species Name</th>
                <th>Given Name</th>
                <th>Category</th>
                <th>Av. Life Span</th>
                <th>Date Of Birth</th>
                <th>Date Joined</th>
                <th>Dietry Requirement</th>
                <th>Natural Habitat</th>
                <th>Location Code</th>
                <th>Dimension In Zoo</th>
                <th>Av. Dimension</th>
                <th>Av. No Of Offspring</th>
                <th>Reproduction Type</th>
                <th>Gender</th>
                <th>Image</th>
                <th>Sponsor</th>
                <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $view=$pdo->prepare("SELECT * FROM tbl_reptile");
        $view->execute();
        foreach ($view as $display) {?>
        <tr>
          
                   <td><?php echo $display['species_name']; ?></td> 
                   <td><?php echo $display['given_name']; ?></td> 
                   <td><?php echo $display['category']; ?></td>
                   <td><?php echo $display['av_life_span']; ?></td>
                   <td><?php echo $display['date_of_birth']; ?></td>
                   <td><?php echo $display['date_joined']; ?></td>
                   <td><?php echo $display['dietry_requirement']; ?></td>
                   <td><?php echo $display['natural_habitat']; ?></td>
                   <td><?php echo $display['location_code']; ?></td>
                   <td><?php echo $display['dimension_in_zoo']; ?></td>
                   <td><?php echo $display['average_dimension']; ?></td>
                   <td><?php echo $display['av_no_of_offspring']; ?></td>
                   <td><?php echo $display['reproduction_type']; ?></td>
                   <td><?php echo $display['gender']; ?></td>
                   <td><?php echo '<img src="photo/reptile/'.$display['image'].'" width="100rem"; height="100rem"; alt=" card image cap">'; ?></td>
                   <td><?php echo $display['fly']; ?></td>
                   <td><?php echo $display['sponsor']; ?></td>
                   <td><span><a href="update_reptile.php?id=<?=$display['id']?>">edit</span></a> <SPAN><a onclick="return confirm('Are you sure to delete?')" href="delete_reptile.php?id=<?=$display['id']?>">delete</SPAN></a></td>
        </tr>
         <?php }
        ?>
      </tbody>
    </table>
  </div>
   <p class="text-center h3 text-light" style="background-color: rgb(52,52,77); border-radius: 10px;">Our Mammals</p>
     <div class="table-responsive" style="height: 300px;">
    <table class="table table-bordered">
      <thead>
        <tr>
                <th>Species Name</th>
                <th>Given Name</th>
                <th>Category</th>
                <th>Av. Life Span</th>
                <th>Date Of Birth</th>
                <th>Date Joined</th>
                <th>Dietry Requirement</th>
                <th>Natural Habitat</th>
                <th>Location Code</th>
                <th>Dimension In Zoo</th>
                <th>Av. Dimension</th>
                <th>Gestational Period</th>
                <th>Colour Variant</th>
                <th>Gender</th>
                <th>Image</th>
                <th>Sponsor</th>
                <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $view=$pdo->prepare("SELECT * FROM tbl_mammal");
        $view->execute();
        foreach ($view as $display) {?>
        <tr>
          
                   <td><?php echo $display['species_name']; ?></td> 
                   <td><?php echo $display['given_name']; ?></td> 
                   <td><?php echo $display['category']; ?></td>
                   <td><?php echo $display['av_life_span']; ?></td>
                   <td><?php echo $display['date_of_birth']; ?></td>
                   <td><?php echo $display['date_joined']; ?></td>
                   <td><?php echo $display['dietry_requirement']; ?></td>
                   <td><?php echo $display['natural_habitat']; ?></td>
                   <td><?php echo $display['location_code']; ?></td>
                   <td><?php echo $display['dimension_in_zoo']; ?></td>
                   <td><?php echo $display['average_dimension']; ?></td>
                   <td><?php echo $display['gestational_period']; ?></td>
                   <td><?php echo $display['colour_variant']; ?></td>
                   <td><?php echo $display['gender']; ?></td>
                   <td><?php echo '<img src="photo/mammal/'.$display['image'].'" width="100rem"; height="100rem"; alt=" card image cap">'; ?></td>
                  
                   <td><?php echo $display['sponsor']; ?></td>
                   <td><span><a href="update_mammal.php?id=<?=$display['id']?>">edit</span></a> <SPAN><a onclick="return confirm('Are you sure to delete?')" href="delete_mammal.php?id=<?=$display['id']?>">delete</SPAN></a></td>
        </tr>
         <?php }
        ?>
      </tbody>
    </table>
  </div>
   <p class="text-center h3 text-light" style="background-color: rgb(52,52,77); border-radius: 10px;">Our Amphibians</p>
     <div class="table-responsive" style="height: 300px;">
    <table class="table table-bordered">
      <thead>
        <tr>
                <th>Species Name</th>
                <th>Given Name</th>
                <th>Category</th>
                <th>Av. Life Span</th>
                <th>Date Of Birth</th>
                <th>Date Joined</th>
                <th>Dietry Requirement</th>
                <th>Natural Habitat</th>
                <th>Location Code</th>
                <th>Dimension In Zoo</th>
                <th>Av. Dimension</th>
                <th>Av. Body Temperature</th>
                <th>Water Type</th>
                <th>Colour Variant</th>
                <th>Gender</th>
                <th>Image</th>
                <th>Sponsor</th>
                <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $view=$pdo->prepare("SELECT * FROM tbl_fish");
        $view->execute();
        foreach ($view as $display) {?>
        <tr>
          
                   <td><?php echo $display['species_name']; ?></td> 
                   <td><?php echo $display['given_name']; ?></td> 
                   <td><?php echo $display['category']; ?></td>
                   <td><?php echo $display['av_life_span']; ?></td>
                   <td><?php echo $display['date_of_birth']; ?></td>
                   <td><?php echo $display['date_joined']; ?></td>
                   <td><?php echo $display['dietry_requirement']; ?></td>
                   <td><?php echo $display['natural_habitat']; ?></td>
                   <td><?php echo $display['location_code']; ?></td>
                   <td><?php echo $display['dimension_in_zoo']; ?></td>
                   <td><?php echo $display['average_dimension']; ?></td>
                   <td><?php echo $display['av_body_temperature']; ?></td>
                   <td><?php echo $display['water_type']; ?></td>
                   <td><?php echo $display['colour_variant']; ?></td>
                   <td><?php echo $display['gender']; ?></td>
                   <td><?php echo '<img src="photo/amphibian/'.$display['image'].'" width="100rem"; height="100rem"; alt=" card image cap">'; ?></td>
                   <td><?php echo $display['sponsor']; ?></td>
                   <td><span><a href="update_amphibian.php?id=<?=$display['id']?>">edit</span></a> <SPAN><a onclick="return confirm('Are you sure to delete?')" href="delete_amphibian.php?id=<?=$display['id']?>">delete</SPAN></a></td>
        </tr>
         <?php }
        ?>
      </tbody>
    </table>
  </div>
</div>



      </div>
   </section>

   
   <!-- footer started -->
<?php
    include'admin_footer.php'
    ?>
</html>