<?php
include '../connection.php';
if (isset($_POST['add'])) {
	
 $target ="photo/".basename($_FILES['image']['name']); 
    move_uploaded_file($_FILES['image']['tmp_name'],$target);
    $stmt=$pdo->prepare("INSERT INTO tbl_test(image,fly,gender) VALUES('image','fly','gender')");
    $criteria=[
    	'image'=>$_FILES['image']['name'],
    	'fly'=>$_POST['fly'],
    	'gender'=>$_POST['gender']

    ];

   if($stmt->execute($criteria)){
   	echo "added";
   }
   else{
   	echo "retry";
   }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST" action="image_test.php" enctype="multipart/form-data">
	<input type="file" name="image">
	<input type="submit" name="add" value="add image">
	 <label>Ability to fly?</label><br>
 <div class="form-check form-check-inline p-2">
  <input class="form-check-input" type="checkbox"  name="fly">
  <label class="form-check-label" for="inlineCheckbox1">Yes</label>
  <input class="form-check-input" type="checkbox"  name="fly">
  <label class="form-check-label" for="inlineCheckbox2">No</label>
  <select class="form-control" name="gender">
        <option>Male</option>
        <option>Female</option>
      </select>
</form>
</body>
</html>