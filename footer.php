 <?php
 include 'connection.php';
 // include 'session.php';
if (isset($_POST['faq'])) {
  $faq=$pdo->prepare("INSERT into tbl_faq(message,username) VALUES (:message,:username)");
 $username=$_SESSION['sess'];
  $criteria=[
    'message'=>$_POST['message'],
    'username'=>$username

  ];
$faq->execute($criteria);
   

}
 ?>
 <footer style=" background-image: url('image/footer1.jpg');">
    <div class="container-fluid text-light">
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
          <p>Follow us on:</p>
          <br>
          <a href=""><img src="image/facebook.png" style="width: 2rem; height: 2rem; padding: 3px;"></a>
          <a href=""><img src="image/instagram.png" style="width: 2rem; height: 2rem; padding: 3px;"></a>
          <a href=""><img src="image/twitter.png" style="width: 2rem; height: 2rem; padding: 3px;"></a>

        
        </div>
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
             <form method="POST" action="">
                        <div class="form-group">
                             <input type="text" class="form-control ml-5 m-3" name="message" placeholder="Write a review.." style="width: 31.5rem; height: 5rem;">
                                <button class="btn btn-outline-danger my-3 my-sm-0 text-capitalize ml-5" style="background-color: rgb(50,187,179);  font-size: 15px; font-weight: bold;" type="submit" name="faq">Submit</button>
                         </div>
                    </form>
        </div>
        
      </div>
    
    </div>
    
   </footer>