<?php

include 'config.php';
require('../assets/pdf/fpdf.php');
date_default_timezone_set("Asia/Jakarta");
$pdf = new FPDF("L","cm","A4");
$pdf->SetMargins(2,1.5,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',11);
$pdf->Cell(25.5,0.7,"LAPORAN DATA PEMINJAMAN KOMPONEN",0,10,'C');
$pdf->Cell(25.5,0.7,"TEKNIK ELEKTRONIKA INDUSTRI",0,10,'C');
$pdf->Cell(25.5,0.7,"SMKN 1 KEPANJEN",0,10,'C');


$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(4.8,0.7,"Di cetak pada : ".date("d M Y"),0,0,'C');
$pdf->ln(1);
$pdf->Cell(1, 0.8, 'NO', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Tanggal Pinjam', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Nama Peminjam', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Kelas', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Nama Komponen', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Jumlah Pinjam', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Jumlah Kembali', 1, 1, 'C');

$no=1;
$tanggal = mysqli_escape_string($conn,$_GET['tanggal']);
$query=mysqli_query($conn,"select * from peminjamank where tanggal = '$tanggal'");

while($lihat=mysqli_fetch_array($query)){
	$pdf->Cell(1, 0.8, $no , 1, 0, 'C');
	$pdf->Cell(4, 0.8, $lihat['tanggal'],1, 0, 'C');
	$pdf->Cell(4, 0.8, $lihat['nama_peminjam'],1, 0, 'C');
	$pdf->Cell(4, 0.8, $lihat['kelas'],1, 0, 'C');
	$pdf->Cell(4, 0.8, $lihat['nama_barang'],1, 0, 'C');
	$pdf->Cell(4, 0.8, $lihat['jumlah'], 1, 0,'C');
	$pdf->Cell(4, 0.8, $lihat['jumlah_kembali'], 1, 1,'C');
	
	$no++;
}

$pdf->Output("laporan_buku.pdf","I");

?>

