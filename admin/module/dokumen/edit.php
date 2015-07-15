<?php 
//panggil file config.php untuk menghubung ke server
require 'includes/header_artikel_input.php';
require 'includes/config.php';
$id=$_GET['id'];
$query = "SELECT * from dokumen  WHERE id='$id'";
$sql = mysql_query ($query);
$hasil = mysql_fetch_array ($sql);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- TinyMCE -->
<script type="text/javascript" src="../../../admin/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
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
			
            <br>
			<FORM ACTION="simpan.php" METHOD="POST" NAME="input" >
				<table width="100%px" border="0">
					<tr>
						<td width="80">Judul :</td>
						<td width="410"><input name="judul" type="text" size="40" value="<?php echo $hasil['judul'];?>"/></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><textarea id="elm1" name="isi" rows="15" cols="60" ><?php echo $hasil['isi'];?></textarea></td>
					</tr>
					<tr>
						<td>&nbsp;</td>	            
						<td><input type="hidden" name="id" value="<?php echo $id?>"> 
						<input type="submit" name="simpan" value="Submit"class="btn btn-inverse"/></td>
					</tr>
				</table>
			</form>
			</div>
		</div>