<?php 
//panggil file config.php untuk menghubung ke server
require"includes/header_berita.php";
include('includes/config.php');
?>
<?php
$id_berita= ($_GET['id_berita']);
$query = "SELECT * from berita&publikasi  WHERE id_berita='$id_berita'";
$sql = mysql_query ($query);
$hasil = mysql_fetch_array ($sql);


//proses edit 
if (isset($_POST['Edit'])) {
	$id_berita = $_POST['id_berita'];
	
	$judul_berita1 =$_POST['judul_berita'];
	$isi1 = $_POST['isi'];
	}
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
                
        }
});
</script>
</head>
<body>
		<div class="container">
			<div class="hero-unit">
			Edit Artikel
			<FORM ACTION="update.php" METHOD="POST" NAME="input" >
				<table width="100%px" border="0">
					
					<tr>
						<td width="80">Judul :</td>
						<td width="410"><input name="judul_berita" id="judul" type="text" size="40" value="<?php echo $hasil['judul_berita'];?>"/></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><textarea id="isi" name="isi" rows="15" cols="60" ><?php echo $hasil['isi'];?></textarea></td>
					</tr>
					<tr>
						<td>&nbsp;</td>	            
						<td><input type="hidden" name="id_berita" value="<?php echo $id_berita?>"> 
						<input type="submit" name="update" value="Submit"class="btn btn-inverse"/></td>
					</tr>
				</table>
			</form>
			</div>
		</div>