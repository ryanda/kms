<?php 
include('includes/config.php');

?>
<?php
$id= $_POST['id'];

$judul=$_POST['judul'];
$isi=$_POST['isi'];
$query = "SELECT * from peraturan_input  WHERE id='$id'";
$sql = mysql_query ($query);
$hasil = mysql_fetch_array ($sql);
	$query = "UPDATE peraturan_input SET judul='$judul',isi='$isi' WHERE id='$id'";
	$sql = mysql_query ($query);
	if ($sql) {
    header('location:tampil.php');
 }
 else { echo "gagal update data";}
?>
