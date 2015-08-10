<?php
include "config.php";
$id=$_GET['id'];
$id2=$_GET['id2'];
$query=mysql_query("delete from forum2 where forum_id='$id' and id='$id2'");
if($query){
?>
 <script language="javascript">document.location.href="tampil.php?id=<?php echo $id ?>";</script><?php
 }else{
 echo "gagal hapus data";
 }
?>