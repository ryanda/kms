<?php
include('config.php');

if (isset($_POST['input'])) {

	$judul_berita  = addslashes (strip_tags ($_POST['judul_berita']));
	$isi = mysql_real_escape_string($_POST['isi']);
	$tgl_posting_berita = date('Y-m-d');
	
 
$query = mysql_query("insert into berita values('','$judul','$isi','$tgl_posting_berita')") or die(mysql_error());
 
if ($query) {
    header('location:../tampil.php?input=success');
 }
} else { echo "ERROR!!!!";}
?>
