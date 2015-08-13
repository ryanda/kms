<?php
include('includes/config.php');

if (isset($_POST['proses'])) {
	$judul  = addslashes (strip_tags ($_POST['judul']));
	$isi = mysql_real_escape_string($_POST['isi']);
	$tgl = date('Y-m-d');
 	$waktu = date ('H:i:s', time());
 	  $divisi = $_SESSION['divisi'];

$query = mysql_query("insert into dokumen values('','$judul','$isi','$tgl','$waktu','','','$divisi')") or die(mysql_error());
 
if ($query) {
    header('location:tampil.php');
 }
} else { echo "input gagal";}
?>
