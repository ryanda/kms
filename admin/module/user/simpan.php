<?php
include "includes/config.php";
$id_user=$_POST['id_user'];
$nama_lengkap=$_POST['nama_lengkap'];
$password=$_POST['password'];
$level=$_POST['level'];
$email=$_POST['email'];
$no_telp=$_POST['no_telp'];
$query=mysql_query("update user set nama_lengkap='$nama_lengkap',password='$password',email='$email', no_telp='$no_telp', level='$level' where id_user='$id_user'");
if($query){
?><script language="javascript">document.location.href="tampil.php";</script><?php
}else{
echo mysql_error();
}
?>