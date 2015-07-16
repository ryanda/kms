<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
require "includes/header_peraturan_input.php";
require "includes/config.php";
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

</head>
<body>
    <main style="margin-top:30px;">

		<div class="container">
			<div class="hero-unit">
			<?
				
			?>
        <form enctype="multipart/form-data" method="post">
            <table>
            <tr>
                <td>File</td>
                <td><input type="file" required="" name="berkas"></td>
            </tr>
            <tr>
                <td>Judul Peraturan</td>
                <td><textarea name="judul_peraturan" required="" cols="30" rows="6"></textarea></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" value="Upload"></td>
            </tr>
            </table>
        </form>

<?php
include "../includes/config.php";
 
if ($_POST)
{
   $filedata = addslashes(fread(fopen($_FILES['berkas']['tmp_name'], 'r'),
   $_FILES['berkas']['size']));
   $tipe  = $_FILES['berkas']['type'];
   $ukuran = $_FILES['berkas']['size'];
   $nama_file = $_FILES['berkas']['name'];
   $judul_peraturan = $_POST['judul_peraturan'];
 
   $result = mysql_query ("insert into peraturan values ('','$judul_peraturan','$tipe','$filedata','$nama_file',$ukuran)") 
                            or die(mysql_error());
 
     if ($result){
?><script language="javascript">document.location.href="tampil.php";</script><?php
}else{
echo mysql_error();
}
}
?>
		</div>
		</div>
    </main>
</body>
</html>