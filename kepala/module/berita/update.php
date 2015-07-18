<?php 
include('includes/config.php');

?>
<?php
$id_berita= $_POST['id_berita'];

$judul_berita=$_POST['judul_berita'];
$isi=$_POST['isi'];
$query = "SELECT * from berita  WHERE id_berita='$id_berita'";
$sql = mysql_query ($query);
$hasil = mysql_fetch_array ($sql);
	$query = "UPDATE berita&publikasi SET judul_berita='$judul_berita',isi='$isi' WHERE id_berita='$id_berita'";
	$sql = mysql_query ($query);
	if ($sql) {
    header('location:tampil.php');
 }
 else { echo "gagal update data";}
?>
