<?php
session_start();
if(empty($_SESSION['sess']) || $_SESSION['sess'] == ''){
    header("Location:../login.php");
    die();
}
?>