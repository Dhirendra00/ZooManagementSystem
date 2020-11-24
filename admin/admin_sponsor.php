<?php
    include'admin_header.php';
    include '../connection.php';
    ?>
<!DOCTYPE html>
<html>
<head>
</head>
<style type="text/css">
div.dataTables_wrapper {
        width: 800px;
        margin: 0 auto;
        /*overflow-x: auto;*/
    }
</style>
<body>

   <section style="background-color: rgb(46,70,91);">
    <!-- data tabbles for staff record -->
    <div class="container-fluid p-5" >
         <ul class="ml-auto">
       <a href="add_sponsor.php"><button class="btn btn-outline-danger my-3 my-sm-0 text-capitalize h5 ml-3" type="submit">Add Sponsor</button></a>
    </ul>
 
       
 
      <div class="container bg-light p-3" style="border-radius: 10px;">
        <p class="text-center h3 text-light" style="background-color: rgb(52,52,77); border-radius: 10px;">Our Sponsor</p>
     <div class="table-responsive">
    <table class="table table-bordered" >
      <thead>
        <tr>
                <th>Company Name</th>
                <th>Existing Customer</th>
                <th>Mobile Number</th>
                <th>Telephone Number</th>
                <th>Address</th>
                <th>Animal Name</th>
                <th>Location</th>
                <th>Sponsor Band</th>
                <th>Total Price</th>
                <th>Agreement Period</th>
                <th>Signage</th>
                <th>Signage Display</th>
                <th>Special Note</th>
                <th>Customer Agreement</th>
                <th>Payment Detail</th>
                <th>Payment Received</th>
                <th>Sponsorship Review Date</th>
                <th>Signed</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $view=$pdo->prepare("SELECT * FROM tbl_sponsor");
        $view->execute();
        foreach ($view as $display) {?>
        <tr>
          
                   <td><?php echo $display['company_name']; ?></td> 
                   <td><?php echo $display['existing_customer']; ?></td> 
                   <td><?php echo $display['contact_number']; ?></td>
                   <td><?php echo $display['telephone_number']; ?></td>
                   <td><?php echo $display['address']; ?></td>
                   <td><?php echo $display['animal_name']; ?></td>
                   <td><?php echo $display['location']; ?></td>
                   <td><?php echo $display['sponsorship_band']; ?></td>
                   <td><?php echo $display['total_price']; ?></td>
                   <td><?php echo $display['period_of_agreement']; ?></td>
                   <td><?php echo $display['signage']; ?></td>
                   <td><?php echo '<img src="photo/sponsor/'.$display['signage_displayed'].'" width="100rem"; height="100rem"; alt=" card image cap">'; ?></td>
                   <td><?php echo $display['customer_agreement']; ?></td>
                   <td><?php echo $display['payment_detail']; ?></td>
                   <td><?php echo $display['payment_received']; ?></td>
                   <td><?php echo $display['sponsorship_review_date']; ?></td>
                   <td><?php echo $display['signed']; ?></td>
                   <td><span><a href="update_sponsor.php?id=<?=$display['id']?>">edit</span></a> <SPAN><a onclick="return confirm('Are you sure to delete?')" href="delete_sponsor.php?id=<?=$display['id']?>">delete</SPAN></a></td>
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