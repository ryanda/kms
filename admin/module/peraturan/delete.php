<?php
include "includes/config.php";
$id_peraturan=$_GET['id_peraturan'];
$query=mysql_query("delete from peraturan where id_peraturan='$id_peraturan'");
if($query){
?><script language="javascript">document.location.href="tampil.php";</script><?php
}else{
echo "gagal hapus data";
}
?>