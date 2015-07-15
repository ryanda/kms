<?php
include "config.php";
$nip=$_GET['nip'];
$query=mysql_query("delete from pegawai_pinmas where nip='$nip'");
if($query){
?><script language="javascript">document.location.href="tampil.php";</script><?php
}else{
echo "gagal hapus data";
}
?>