<?php
	session_start();
	if(isset($_SESSION['sess']))
	{
		unset($_SESSION['sess']);
	}
	// index.php is called
	header("location:login.php");
?>