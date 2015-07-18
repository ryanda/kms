<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
require "includes/header_user.php";
require "includes/config.php";
$query=mysql_query("select * from user");

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
<table class="table table-striped">
				<thead>
				<tr>

<th scope scope="col" bgcolor="#333333"><font color="#CCCCCC">No.</font></th>
<th scope scope="col"bgcolor="#333333"><font color="#CCCCCC">Username</font></th>
<th scope scope="col"bgcolor="#333333"><font color="#CCCCCC">Nama Lengkap</font></th>
<th scope scope="col" bgcolor="#333333"><font color="#CCCCCC">Email</font></th>
<th scope scope="col" bgcolor="#333333"><font color="#CCCCCC">No Telp</font></th>
<th scope scope="col"bgcolor="#333333"><font color="#CCCCCC">Level</font></th>
<th scope scope="col" bgcolor="#333333"><font color="#CCCCCC"><center>Opsi</font></th>
</thread>
</TR>
<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
while($row=mysql_fetch_array($query)){
?>
<tr>
<td align="center"><?php echo $c=$c+1;?></td>
<td><?php echo $row['username'];?></td></center>
<td><?php echo $row['nama_lengkap'];?></td></center>
<td><?php echo $row['email'];?></td></center>
<td><?php echo $row['no_telp'];?></td></center>
<td><?php echo $row['level'];?></td></center>
<td><center>&nbsp
<a href="update.php?id_user=<?php echo $row['id_user']; ?>">UBAH</a> &nbsp;|
<a href="hapus.php?id_user=<?php echo $row['id_user']; ?>" onClick="return confirm('Apakah anda yakin?')">HAPUS</a></td></center>
<?php
}
?>

</TABLE></body></html>
</br>			
                         
