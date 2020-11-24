<?php
include '../connection.php';
$id = $_GET['id'];
$delete = 'DELETE FROM tbl_sponsor WHERE id=:id';
$deletes = $pdo->prepare($delete);
if($deletes->execute([':id' => $id]))
	header("Location: admin_sponsor.php")

?>