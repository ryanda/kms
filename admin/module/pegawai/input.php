<?php
$query=mysql_query("select * from pegawai_pinmas");
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
<table>
<form action="proses.php" method="post"> 
<tr>
<td>NIP</td><td> : </td>
<td><input type="text" name="nip" id="nip" required=""/></td>
</tr>

<tr>
<td>Nama Lengkap</td><td> : </td>
<td><input type="text" name="nama_lengkap" id="nama_lengkap" required=""/></td>
</tr>

<tr>
<td>Jabatan</td><td> : </td>
<td><input type="text" name="jabatan" id="jabatan"/></td>
</tr>

<tr>
<td>Golongan</td><td> : </td>
<td><input type="text" name="golongan" id="golongan" required=""/></td>
</tr>

<tr>
<td>Jenis Kelamin</td><td> : </td>
<td><input type="enum" value="L,P" name="jenis_kelamin" id="jenis_kelamin" required=""/></td>
</tr>

<tr>
<td>Tempat Lahir</td><td> : </td>
<td><input type="text" name="tempat_lahir" id="tempat_lahir"/></td>
</tr>

<tr>
<td>Tanggal Lahir</td><td> : </td>
<td><input type="date" name="tgl_lahir" id="tgl_lahir" required=""/></td>
</tr>

<tr>
<td>Alamat</td><td> : </td>
<td><input type="text" name="alamat" id="alamat" required=""/></td>
</tr>

<tr>
<td>No. Telepon</td><td> : </td>
<td><input type="text" name="no_telp" id="no_telp"/></td>
</tr>

<tr>
<td>Email</td><td> : </td>
<td><input type="text" name="email" id="email"/></td>
</tr>

</table>

<input type="submit" name="proses" value="proses"/>
</form> 
</center>
</br>    
                    
