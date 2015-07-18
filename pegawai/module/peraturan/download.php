<?php
include ("includes/config.php");
 
$data = @mysql_query ("select * from peraturan where
        id_peraturan=" . $_REQUEST['id_peraturan']);
 
if ($row = @mysql_fetch_assoc($data))
{
   $filedata = $row['filedata'];
   $judul_peraturan = $row['judul_peraturan'];
   $filename = $row['filename'];
   $filetype = $row['filetype'];
   $filesize = $row['filesize'];
}
 
header('Content-type: ' . $filetype);
header('Content-length: ' . $filesize);
header("Content-Transfer-Encoding: binarynn");
header("Pragma: no-cache");
header("Expires: 0");
header('Content-Disposition: attachment; filename="' . $filename . '"');
echo $filedata;
exit();
?>