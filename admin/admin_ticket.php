<?php
include 'admin_header.php';
include '../connection.php';
$view=$pdo->prepare("SELECT * FROM tbl_ticket where accepted='no'");
$view->execute();
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		div.dataTables_wrapper {
        width: auto;
        margin: 0 auto;
    }
	</style>
</head>
<body>
   <header>

<!-- image slider ended -->
   </header>
   <section style="background-color: rgb(46,70,91);">
    <!-- data tabbles for staff record -->
    <div class="container-fluid p-5" >
    	 <ul class="ml-auto">
       <a href="accepted_ticket.php"><button class="btn btn-outline-danger my-3 my-sm-0 text-capitalize h5 ml-3" type="submit">Accepted Ticket</button></a>
    </ul>
 
  
 
      <div class="container bg-light p-3" style="border-radius: 10px;">
        <p class="text-center h3 text-light" style="background-color: rgb(52,52,77); border-radius: 10px;">Our Ticket</p>
        <table id="example" class="display nowrap table table-striped table-bordered" style="width:100%">
        <thead>
        	           <tr>
                <th>Username</th>
                <th>Date</th>
                <th>Child</th>
                <th>Adult</th>
                <th>Oldage</th>
                <th>Total Amount</th>
                <th>Action</th>
              
            </tr>
        </thead>
        <tbody>
        	<?php
        	foreach ($view as $display) {
        	?>
            <tr>
                <td><?php echo $display['username']; ?></td>
                <td><?php echo $display['ticket_date']; ?></td>
                <td><?php echo $display['child']; ?></td>
                <td><?php echo $display['adult']; ?></td>
                <td><?php echo $display['oldage']; ?></td>
                <td><?php echo $display['total_amount']; ?></td>
                <td><SPAN><a onclick="return confirm('Are you sure to delete?')" href="delete_ticket.php?id=<?=$display['id']?>">delete</SPAN></a> <span><a onclick="return confirm('Are you sure wants to accept?')" href="archive_ticket_process.php?id=<?=$display['id']?>">archive</a></span></td>
               
            </tr>
               <?php }?>
           
            
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