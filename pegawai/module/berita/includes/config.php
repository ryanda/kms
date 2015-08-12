<?php
// Sebelumnya
// error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

// Setelahnya
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING) ^ E_DEPRECATED);
  session_start(); 

	if(!isset($_SESSION['username'])){
		$_SESSION['error'] = 'Anda belum login';
		header('Location:../../../login/index.php');
	} 
	if($_SESSION['level']!='2'){
		$_SESSION['error'] = 'Anda tidak memiliki akses Pegawai';
		header('Location:../../../login/index.php');
	}  
mysql_connect("localhost","root","");
mysql_select_db("kms");
?>