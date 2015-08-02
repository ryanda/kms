<?php
include "includes/config.php";
$id=$_GET['id'];
$query=mysql_query("delete from peraturan_input where id='$id'");
if($query){
?><script language="javascript">document.location.href="tampil.php";</script><?php
}else{
echo "gagal hapus data";
}
?>