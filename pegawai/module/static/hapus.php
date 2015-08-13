<?php
include "config.php";
$id=$_GET['id'];
$query=mysql_query("delete from forum where id='$id'");
$query2=mysql_query("delete from forum2 where forum_id='$id'");

if($query){
	echo 'berhasil menghapus thread';
	if($query2) {
		echo 'berhasil menghapus komentar'; 
	} else {
		echo 'gagal menghapus komentar';
	} ?>
	<script language="javascript">document.location.href="index.php";</script><?php
} else {
	echo "gagal hapus data";
} ?>