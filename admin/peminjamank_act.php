<?php 

include 'config.php';
$tgl=$_POST['tgl'];
$namap=$_POST['nama_peminjam'];
$namab=$_POST['nama_barang'];
$jumlah=$_POST['jumlah'];
$kelas = $_POST['kelas'];

$dt=mysqli_query($conn,"select * from komponen where nama='$namab'");
$data=mysqli_fetch_assoc($dt);
$sisa=$data['sisa']-$jumlah;

mysqli_query($conn,"update komponen set sisa='$sisa' where nama='$namab'");

mysqli_query($conn,"insert into peminjamank values('','$tgl','$namap','$kelas','$namab','$jumlah','0')")or die(mysqli_error());
header("location:komponen_pinjam.php");

?>