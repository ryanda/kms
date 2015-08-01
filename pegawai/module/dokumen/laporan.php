<?php

require "includes/config.php";
require "../../../asset/fpdf/fpdf.php";



$id=$_GET['id'];
$query=mysql_query("select * from dokumen where id='$id'");
$hasil = mysql_fetch_array ($query);
 
$pdf = new FPDF();
$pdf->AddPage();
//header
//Logo
		
		// $pdf->Image('Logo_Kemenag.jpg',5,4);
		//Arial bold 15
		$pdf->SetFont('Arial','B',15);
		//pindah ke posisi ke tengah untuk membuat judul
		$pdf->Cell(80);
		//judul
		$pdf->Cell(30,10,'LAPORAN DOKUMEN KNOWLEDGE MANAJEMEN',0,0,'C');
		//pindah baris
		$pdf->Image('logo.jpg',30,null, 10);
		$pdf->Ln(20);
		//buat garis horisontal
		$pdf->Line(10,25,200,25);

//content

$pdf->SetFont('Arial','B',20);
$pdf->Cell(0,20,''.$hasil['judul'],0,2,'C');
// $pdf->Cell(0,35,'ID Dokumen: '.$hasil['id'],0,2,'C');
$pdf->SetFont('Arial','',12);
$pdf->MultiCell( 0, 10, ''.$hasil['isi'], 0, 'C');
$pdf->SetFont('Arial','U',8);
$pdf->Cell(60,40,'Tanggal Dokumen: '.$hasil['tanggal'],0,2,'C');
// $pdf->Cell(60,40,'Waktu Dokumen: '.$hasil['waktu'],0,2,'C');
$pdf->Output();

?>