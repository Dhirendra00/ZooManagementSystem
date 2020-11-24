<?php
include 'admin_header.php';
include '../connection.php';
 $view=$pdo->prepare("SELECT company_name from tbl_sponsor");
          $view->execute();
          

if (isset($_GET['id'])) {
  $id=$_GET['id'];
 
}
if (isset($_POST['update_sponsor'])) {
   $target ="photo/sponsor/".basename($_FILES['signage_displayed']['name']); 
    move_uploaded_file($_FILES['signage_displayed']['tmp_name'],$target);
  $update=$pdo->prepare("UPDATE tbl_sponsor SET company_name=:company_name,existing_customer=:existing_customer, contact_number=:contact_number, telephone_number=:telephone_number, address=:address, animal_name=:animal_name, location=:location, sponsorship_band=:sponsorship_band, total_price=:total_price, period_of_agreement=:period_of_agreement, signage=:signage, signage_displayed=:signage_displayed, special_note=:special_note, customer_agreement=:customer_agreement, payment_detail=:payment_detail, payment_received=:payment_received, sponsorship_review_date=:sponsorship_review_date, signed=:signed WHERE id=:id");
 $criteria =[
'company_name'=>$_POST['company_name'],
'existing_customer'=>$_POST['existing_customer'],
'contact_number'=>$_POST['contact_number'],
'telephone_number'=>$_POST['telephone_number'],
'address'=>$_POST['address'],
'animal_name'=>$_POST['animal_name'],
'location'=>$_POST['location'],
'sponsorship_band'=>$_POST['sponsorship_band'],
'total_price'=>$_POST['total_price'],
'period_of_agreement'=>$_POST['period_of_agreement'],
'signage'=>$_POST['signage'],
'signage_displayed'=>$_FILES['signage_displayed']['name'],
'special_note'=>$_POST['special_note'],
'customer_agreement'=>$_POST['customer_agreement'],
'payment_detail'=>$_POST['payment_detail'],
'payment_received'=>$_POST['payment_received'],
'sponsorship_review_date'=>$_POST['sponsorship_review_date'],
'signed'=>$_POST['signed'],
'id'=>$id
];
if($update->execute($criteria)){
    ?>
     <strong>Updated successfully.Pree Ok!! <button> <a href="admin_sponsor.php">OK</a></button></strong>
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
            <h1 class="text-danger text-center ml-3 ">Update Sponsor</h1> <a href="admin_sponsor.php"><button class="btn btn-outline-danger my-3 my-sm-0 text-capitalize" style="background-color: rgb(50,187,179); width: 10rem; font-size: 20px; font-weight: bold; margin-left: 30rem;" type="submit">Back</button></a> <br>
            <hr class="bg-light w-100">

          </div>
        <div class="container rounded p-5" style="background-color: white;">   
       <form method="POST" action="" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-4">
      <label>Company/Client Name</label>
      <input type="text" class="form-control" name="company_name">
    </div>
    <div class="form-group col-md-4">
      <label>Existing Customer</label>
      <select name="existing_customer" class="form-control"><br>
       <?php foreach ($view as $display) {?>
        <option>none</option>
         <option><?php echo $display['company_name']; ?></option>
      <?php } ?>
      </select>
    </div>
     <div class="form-group col-md-4">
      <label>Phone Number</label>
      <input type="Number" class="form-control" name="contact_number">
    </div>
<!-- second row -->
  <div class="form-group col-md-4">
      <label>Telephone Number</label>
      <input type="Number" class="form-control" name="telephone_number" placeholder="optional">
    </div>
    <div class="form-group col-md-4">
      <label>Client Address</label>
      <input type="text" class="form-control" name="address">
    </div>
     <div class="form-group col-md-4">
      <label>Animal To Be Sponsored</label>
      <input type="text" class="form-control" name="animal_name">
    </div>

<!-- third row -->
  <div class="form-group col-md-4">
      <label>Animal Location</label>
      <input type="text" class="form-control" name="location">
    </div>

    <div class="form-group col-md-4">
      <label>Sponsorship Band</label>
      <SELECT class="form-control" name="sponsorship_band">
        <option>A</option>
        <option>B</option>
        <option>C</option>
        <option>D</option>
        <option>E</option>
      </SELECT>
    </div>
     <div class="form-group col-md-4">
      <label>Total Price</label>
      <SELECT class="form-control" name="total_price">
        <option>2500</option>
        <option>2000</option>
        <option>1500</option>
        <option>1000</option>
        <option>500</option>
      </SELECT>
    </div>
    <div class="form-group col-md-4">
      <label>Period Of Agreement</label>
      <input type="date" class="form-control" name="period_of_agreement">
    </div>
 <!-- fifth row -->
  <div class="form-group col-md-4">
      <label>Signage % Area</label>
      <input type="text" class="form-control" name="signage">
    </div>
    <div class="form-group col-md-4">
      <label>Signage Displayed</label>
      <input type="file" name="signage_displayed">
    </div>
     <div class="form-group col-md-4">
      <label>Special Notes</label>
      <input type="text" class="form-control" name="special_note">
    </div>
     <div class="form-group col-md-12">
    <label>Customer Agreement</label><br>
    <input class="form-check-input" type="checkbox"  name="customer_agreement" required>
  <label class="form-check-label" for="inlineCheckbox1">  I agree to sponsor the above named animal(s) for the period specified above.</label><br>
  <input class="form-check-input" type="checkbox"  name="customer_agreement" required>
  <label class="form-check-label" for="inlineCheckbox2"> I understand that the sponsorship fee is due in full by the 30th November 2010 and I will ensure that this fee is paid to Claybrook Zoo Ltd by this date.</label><br>
  <input class="form-check-input" type="checkbox"  name="customer_agreement" required>
  <label class="form-check-label" for="inlineCheckbox2"> I understand that all sponsorship fees are non-refundable.</label><br>
  <input class="form-check-input" type="checkbox"  name="customer_agreement" required>
  <label class="form-check-label" for="inlineCheckbox2"> I agree with the above signage layout/dimensions and understand these cannot be changed once the agreement has started.</label><br></div>
  <div class="form-group col-md-12 text-danger">
      <label>Office Use Only:</label>
    </div>
  <div class="form-group col-md-4">
      <label>Payment Details</label>
      <input type="text" class="form-control" name="payment_detail">
    </div>
    <div class="form-group col-md-4">
      <label>Payment Received</label>
      <select class="form-control" name="payment_received">
        <option>Yes</option>
        <option>No</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label>Sponsorship Review Date</label>
      <input type="date" class="form-control" name="sponsorship_review_date">
    </div>
    <div class="form-group col-md-4">
      <label>Signed/Date</label>
      <input type="text" class="form-control" name="signed">
    </div>
</div>
  <hr class="w-100">
 
  <div class="form-group row p-2">
    <div class="col-sm-6">
      <button type="submit" name="update_sponsor" class="btn" style="background-color: rgb(50,187,179); font-size: 20px; font-weight: bold; ">Confirm</button>
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