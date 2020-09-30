<?php 
include 'config.php';
$nama=$_POST['nama'];
$jumlah=$_POST['jumlah'];
$sisa=$_POST['jumlah'];

mysqli_query($conn,"insert into komponen values('','$nama','$jumlah','$sisa')");

header("location:komponen.php");

 ?>