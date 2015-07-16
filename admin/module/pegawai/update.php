<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$query = mysql_query("select * from pegawai_pinmas");
require "includes/header_user_input.php";
require "includes/config.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- TinyMCE -->
<script type="text/javascript" src="../../../asset/admin/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
tinyMCE.init({
        // General options
        mode : "textareas",
        theme : "advanced",
        plugins : "autolink,lists,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

        // Theme options
        theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
        theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
        theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
        theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,spellchecker,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,blockquote,pagebreak,|,insertfile,insertimage",
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true,

        // Skin options
        skin : "o2k7",
        skin_variant : "black",

        // Example content CSS (should be your site CSS)
        content_css : "css/example.css",

        // Drop lists for link/image/media/template dialogs
        template_external_list_url : "js/template_list.js",
        external_link_list_url : "js/link_list.js",
        external_image_list_url : "js/image_list.js",
        media_external_list_url : "js/media_list.js",

        // Replace values for the template plugin
        template_replace_values : {
                username : "Some User",
                staffid : "991234"
        }
});
</script>
</head>
<body>
		<div class="container">
			<div class="hero-unit">
                     <?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include "config.php";
$nip=$_GET['nip'];
$query=mysql_query("select * from pegawai_pinmas where nip='$nip'");
?>
<form action="simpan.php" method="post">
<table border="1" cellspacing="0" cellpadding="0" width="580">
<?php
while($row=mysql_fetch_array($query)){
?>
<input type="hidden" name="nip" value="<?php echo $nip;?>"/>
<table border="0" cellspacing="0" cellpadding="0" width="580">
<TR>
<th scope scope="col">NIP</font></th>
<th scope scope="col">Nama Lengkap</font></th>
<th scope scope="col">Jabatan</font></th>
<th scope scope="col">Golongan</font></th>
<th scope scope="col">Jenis Kelamin</font></th>
<th scope scope="col">Tempat Lahir</font></th>
<th scope scope="col">Tanggal Lahir</font></th>
<th scope scope="col">Alamat</font></th>
<th scope scope="col">No. Telepon</font></th>
<th scope scope="col">Email</font></th>
</TR>
<tr>
<td><input type="text" name="nip" value="<?php echo $row['nip'];?>" /></td>
<td><input type="text" name="nama_lengkap" value="<?php echo $row['nama_lengkap'];?>" /></td>
<td><input type="password" name="jabatan" value="<?php echo $row['jabatan'];?>" /></td>
<td><input type="text" name="golongan" value="<?php echo $row['golongan'];?>" /></td>
<td><input type="text" name="jenis_kelamin" value="<?php echo $row['jenis_kelamin'];?>" /></td>
<td><input type="text" name="tempat_lahir" value="<?php echo $row['tempat_lahir'];?>" /></td>
<td><input type="text" name="tgl_lahir" value="<?php echo $row['tgl_lahir'];?>" /></td>
<td><input type="password" name="alamat" value="<?php echo $row['alamat'];?>"  /></td>
<td><input type="text" name="no_telp" value="<?php echo $row['no_telp'];?>" /></td>
<td><input type="text" name="email" value="<?php echo $row['email'];?>" /></td>
</TR>
<?php
}
?>
</TABLE>
<td><input type="submit" value="Simpan" name="simpan" /></td>                         
</form>
</center>
</br>    
                    
