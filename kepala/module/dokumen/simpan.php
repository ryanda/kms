<?php
include "includes/config.php";
$id=$_POST['id'];
$judul=$_POST['judul'];
$isi=$_POST['isi'];
$query=mysql_query("update dokumen set judul='$judul', isi='$isi' where id='$id'");
if($query){
?><script language="javascript">document.location.href="tampil.php";</script><?php
}else{
echo mysql_error();
}
?>