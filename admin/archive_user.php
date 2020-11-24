<?php
include '../connection.php';
$id=$_GET['id'];
$archive=$pdo->prepare("UPDATE tbl_user SET archive=:archive WHERE id=:id");
$criteria =[
'id'=>$_GET['id'],
'archive'=>'yes'
];
($archive->execute($criteria));
header("Location: admin_staff.php")
?>

