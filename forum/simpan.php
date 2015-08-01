<?php 
include('config.php');
session_start(); 
$user = $_SESSION['user'];
$komentar = $_POST['komentar'];
$forum_id = $_POST['forum_id'];
$tgl = date('Y-m-d');
$jam = date('H:i:s');

$query = "INSERT INTO forum2(id, forum_id, komentar, user, tgl, jam) VALUE('', '$forum_id', '$komentar', '$user', '$tgl', '$jam')";
$sql = mysql_query ($query);
if ($sql) {
	header('location:tampil.php?id='.$forum_id);
}
else { 
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	echo "gagal komen";

	echo "<br>";
	echo $query;
	echo "<br>";
	echo $komentar; 
	echo "<br>";
	echo $forum_id;
	echo "<br>";
	echo date('Y-m-d');
	echo "<br>";
	echo date('H:i:s');
}
?>
