<?php
  session_start(); 

	if(!isset($_SESSION['username'])){
		$_SESSION['error'] = 'Anda belum login';
		header('Location:../../login/index.php');
	} 
	if($_SESSION['level']!='1'){
		$_SESSION['error'] = 'Anda tidak memiliki akses Admin';
		header('Location:../../login/index.php');
	}  
  mysql_connect("localhost","root","") or die("Koneksi Gagal");
  mysql_select_db("kms") or die("Database Tidak Ditemukan");
?>