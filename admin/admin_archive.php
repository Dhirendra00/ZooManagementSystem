<?php
  include'admin_header.php';
  include '../connection.php';
  ?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>

   <section style="background-color: rgb(46,70,91);">
    <!-- data tabbles for staff record -->
    <div class="container-fluid p-5" >
    
 
      <div class="container bg-light p-3" style="border-radius: 10px;">
        <p class="text-center h3 text-light" style="background-color: rgb(52,52,77); border-radius: 10px;">Our Staff</p>
        <table id="example" class="table table-striped table-bordered p-3" style="width:100%; border-radius: 10px;">
        <thead>
            <tr>
                <th>First_Name</th>
                <th>Last_Name</th>
                <th>Address</th>
                <th>Username</th>
                <th>Contact</th>
                <th>Email</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
        
           
                   <?php
                   $view=$pdo->prepare("SELECT * FROM tbl_user WHERE archive='yes'");
                   $view->execute();
                   foreach ($view as $display ) {?>
                    <tr>

                   <td><?php echo $display['first_name']; ?></td> 
                   <td><?php echo $display['last_name']; ?></td> 
                   <td><?php echo $display['address']; ?></td>
                   <td><?php echo $display['username']; ?></td>
                   <td><?php echo $display['contact']; ?></td>
                   <td><?php echo $display['email']; ?></td>
                   <td><SPAN><a onclick="return confirm('Are you sure to delete?')" href="delete_user.php?id=<?=$display['id']?>">delete</SPAN></a></td>

                   </tr>

                  <?php }
                   ?>

                   

           
        </tbody>
       
    </table>
      </div>
      
    </div>
   </section>

 <?php
  include'admin_footer.php'
  ?>
</html>