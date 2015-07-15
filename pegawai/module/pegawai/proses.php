<?php
include "config.php";
$nip=$_POST['nip'];
$nama_lengkap=$_POST['nama_lengkap'];
$jabatan=$_POST['jabatan'];
$golongan=$_POST['golongan'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$tempat_lahir=$_POST['tempat_lahir'];
$tgl_lahir=$_POST['tgl_lahir'];
$alamat=$_POST['alamat'];
$no_telp=$_POST['no_telp'];
$email=$_POST['email'];

$query=mysql_query("insert into pegawai_pinmas(nip, nama_lengkap, jabatan, golongan, jenis_kelamin, tempat_lahir, tgl_lahir, alamat, no_telp, email) value('$name','$nama_lengkap','$jabatan','$golongan','$jenis_kelamin','$tempat_lahir','$tgl_lahir','$alamat','$no_telp','$email')");
if($query){
?><script language="javascript">document.location.href="tampil.php";</script><?php
}else{
echo mysql_error();
}
?>