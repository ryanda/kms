<?php
include('includes/config.php');

if (isset($_POST['simpan'])) {

	$judul  = addslashes (strip_tags ($_POST['judul']));
	$isi = mysql_real_escape_string($_POST['isi']);
	$tgl_posting_peraturan = date('Y-m-d');
	
 
$query = mysql_query("INSERT INTO peraturan_input VALUES('','$judul','$isi','$tgl_posting_peraturan')") or die(mysql_error());
 
if ($query) {
    header('location:tampil.php');
 }
} else { echo "gagal input data";}
?>
