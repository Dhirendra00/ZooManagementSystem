<?php
include '../connection.php';
$id=$_GET['id'];
$archive=$pdo->prepare("UPDATE tbl_ticket SET accepted=:accepted WHERE id=:id");
$criteria =[
'id'=>$_GET['id'],
'accepted'=>'yes'
];
($archive->execute($criteria));
header("Location: admin_ticket.php")
?>

