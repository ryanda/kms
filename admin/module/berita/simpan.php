<?php
include('includes/config.php');

if (isset($_POST['simpan'])) {

	$judul_berita  = addslashes (strip_tags ($_POST['judul_berita']));
	$isi = mysql_real_escape_string($_POST['isi']);
	$tgl_posting_berita = date('Y-m-d');
	
 
$query = mysql_query("INSERT INTO berita VALUES('','$judul_berita','$isi','$tgl_posting_berita')") or die(mysql_error());
 
if ($query) {
    header('location:tampil.php');
 }
} else { echo "gagal input data";}
?>
