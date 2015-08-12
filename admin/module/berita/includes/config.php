<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING) ^ E_DEPRECATED);

  session_start(); 

	if(!isset($_SESSION['username'])){
		$_SESSION['error'] = 'Anda belum login';
		header('Location:/login/index.php');
	} 
	if($_SESSION['level']!='1'){
		$_SESSION['error'] = 'Anda tidak memiliki akses Admin';
		header('Location:/login/index.php');
	}  
mysql_connect("localhost","root","");
mysql_select_db("kms");
?>