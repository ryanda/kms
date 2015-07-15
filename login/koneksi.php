<?php
$host="localhost";
$user="root";
$pass="";
$db="kms";

$koneksi=mysql_connect($host,$user,$pass);
mysql_select_db($db,$koneksi);

if (!$koneksi){
	echo "Gagal konesi";
	}
	?>
