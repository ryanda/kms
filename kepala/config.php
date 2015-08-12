<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING) ^ E_DEPRECATED);
  	session_start(); 

	if(!isset($_SESSION['username'])){
		$_SESSION['error'] = 'Anda belum login';
		header('Location:/login/index.php');
	} 
	if($_SESSION['level']!='3'){
		$_SESSION['error'] = 'Anda tidak memiliki akses Kepala';
		header('Location:/login/index.php');
	}  
	// return var_dump($_SESSION['level'].$_SESSION['username']);

	mysql_connect("localhost","root","") or die("Koneksi Gagal");
	mysql_select_db("kms") or die("Database Tidak Ditemukan");
?>