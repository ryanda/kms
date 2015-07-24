<?php
include "includes/config.php";
$id_user=$_POST['id_user'];
$username=$_POST['username'];
$nama_lengkap=$_POST['nama_lengkap'];
$password=$_POST['password'];
$level=$_POST['level'];
$email=$_POST['email'];
$no_telp=$_POST['no_telp'];

$query=mysql_query("update user set id_user='$id_user',username='$username', level='$level', nama_lengkap='$nama_lengkap', email='$email', no_telp='$no_telp' where id_user='$id_user'");

if($query){
?><script language="javascript">document.location.href="tampil.php";</script><?php
}else{
echo mysql_error();
}
?>