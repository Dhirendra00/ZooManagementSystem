<?php
include 'admin_header.php';
include '../connection.php';
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
      <ul class="ml-auto">
       <a href="add_administrator.php"><button class="btn btn-outline-danger my-3 my-sm-0 text-capitalize h5 ml-3" type="submit">Add Administrator</button></a>
    </ul>
 
      <div class="container bg-light p-3" style="border-radius: 10px;">
        <p class="text-center h3 text-light" style="background-color: rgb(52,52,77); border-radius: 10px;">Our Administrator</p>
        <table id="example" class="table table-striped table-bordered " style="width:100%; border-radius: 10px;">
        <thead>
            <tr>
                <th>First_Name</th>
                <th>Last_Name</th>
                <th>Contact</th>
                <th>Address</th>
                <th>Email</th>
                <th>Bio</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        
           
                   <?php
                   $view=$pdo->prepare("SELECT * FROM tbl_administrator");
                   $view->execute();
                   foreach ($view as $display ) {?>
                    <tr>

                   <td><?php echo $display['first_name']; ?></td> 
                   <td><?php echo $display['last_name']; ?></td> 
                   <td><?php echo $display['contact']; ?></td>
                   <td><?php echo $display['address']; ?></td>
                   <td><?php echo $display['email']; ?></td>
                   <td><?php echo $display['bio']; ?></td>
                   <td><?php  echo '<img src="photo/administrator/'.$display['image'].'" width="150rem"; height="150rem"; alt=" card image cap">'; ?></td>
                   <td><span><a href="update_administrator.php?id=<?=$display['id']?>">edit</span></a> <SPAN><a onclick="return confirm('Are you sure to delete?')" href="delete_administrator.php?id=<?=$display['id']?>">delete</SPAN></a></td>

                   </tr>

                  <?php }
                   ?>

                   

           
        </tbody>
       
    </table>
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