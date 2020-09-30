<?php 
include 'config.php';
$id=$_POST['id'];
$nama=$_POST['nama'];

$sisa=$_POST['sisa'];
$jumlah=$_POST['jumlah'];

mysqli_query($conn,"update komponen set nama='$nama', jumlah='$jumlah' , sisa='$sisa' where id='$id'");
header("location:komponen.php");

?>