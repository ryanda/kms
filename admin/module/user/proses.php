<?php
include "includes/config.php";
$username=$_POST['username'];
$nama_lengkap=$_POST['nama_lengkap'];
$password=$_POST['password'];
$level=$_POST['level'];
$email=$_POST['email'];
$no_telp=$_POST['no_telp'];
$query=mysql_query("insert into user(username, nama_lengkap, password, email, no_telp, level) value('$username','$nama_lengkap','$password','$email','$no_telp', '$level')");
if($query){
?><script language="javascript">document.location.href="tampil.php";</script><?php
}else{
echo mysql_error();
}
?>