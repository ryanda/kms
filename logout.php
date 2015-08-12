<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['level']);
unset($_SESSION['nama_lengkap']);
unset($_SESSION['id_user']);
$_SESSION['error'] = 'Anda berhasil logout';
// echo $_SESSION['error'];
// session_destroy();
header("Location:login/index.php");
?>