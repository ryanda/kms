<?php
include "includes/config.php";
$id=$_POST['id'];
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

$query=mysql_query("update pegawai_pinmas set nip='$nip',nama_lengkap='$nama_lengkap',jabatan='$jabatan', golongan='$golongan', jenis_kelamin='$jenis_kelamin',tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', alamat='$alamat',no_telp='$no_telp', email='$email' where id='$id'");
if($query){
?><script language="javascript">document.location.href="tampil.php";</script><?php
}else{
echo mysql_error();
}
?>