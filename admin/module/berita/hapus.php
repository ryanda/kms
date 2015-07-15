<?php
include "includes/config.php";
$id_berita=$_GET['id_berita'];
$query=mysql_query("delete from berita where id_berita='$id_berita'");
if($query){
?><script language="javascript">document.location.href="tampil.php";</script><?php
}else{
echo "gagal hapus data";
}
?>