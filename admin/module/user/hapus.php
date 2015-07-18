<?php
include "config.php";
$id_user=$_GET['id_user'];
$query=mysql_query("delete from user where id_user='$id_user'");
if($query){
?><script language="javascript">document.location.href="tampil.php";</script><?php
}else{
echo "gagal hapus data";
}
?>