<?php 
include 'config.php';
$id=$_GET['id'];
mysqli_query($conn,"DELETE FROM komponen WHERE id='$id'");
header("location:komponen.php");

?>