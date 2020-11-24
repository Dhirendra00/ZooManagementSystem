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
        <p class="text-center h3 text-light" style="background-color: rgb(52,52,77); border-radius: 10px;">Our Faq</p>
        <table id="example" class="table table-striped table-bordered p-3" style="width:100%; border-radius: 10px;">
        <thead>
            <tr>
               <th>Username</th>
                <th>Message</th>
                <th>Action</th>
               
            </tr>
        </thead>
        <tbody>
          
                   <?php
                   $view=$pdo->prepare("SELECT * FROM tbl_faq");
                   $view->execute();
                   foreach ($view as $display ) {?>
                    <tr>
                        <td><?php echo $display['username']?></td>
                   <td><?php echo $display['message']; ?></td> 
                   <td><SPAN><a onclick="return confirm('Are you sure to delete?')" href="delete_faq.php?id=<?=$display['id']?>">delete</SPAN></a></td>

                   </tr>

                  <?php }
                   ?>

            
        </tbody>
       
    </table>
      </div>
      
    </div>
   </section>

   
   <!-- footer started -->
   <footer>
    <?php
    include'admin_footer.php'
    ?>
   </footer>
 
</html>