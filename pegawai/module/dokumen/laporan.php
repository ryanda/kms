<?php

require "includes/config.php";
require "includes/fpdf17/fpdf.php";

$id=$_GET['id'];
$query=mysql_query("select * from dokumen where id='$id'");
$hasil = mysql_fetch_array ($query);
 
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,20,'Laporan Dokumen PDF '.$hasil['judul'],0,2,'C');
$pdf->Cell(0,35,'ID Dokumen: '.$hasil['id'],0,2,'C');
$pdf->MultiCell( 0, 10, 'Isi Dokumen: '.$hasil['isi'], 0, 'C');
$pdf->Cell(0,40,'Tanggal Dokumen: '.$hasil['tanggal'],0,2,'C');
$pdf->Cell(0,10,'Waktu Dokumen: '.$hasil['waktu'],0,2,'C');
$pdf->Output();
?>