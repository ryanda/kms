<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
require "includes/header_user.php";
require "includes/config.php";
$query=mysql_query("select * from pegawai_pinmas");
?>

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

<main style="margin-top:30px;">

        <div class="container">
	     
        <table class="hoverable centered responsive-table">
				
        <thead>
	<tr>

        <th>No</th>
        <th>NIP</th>
        <th>Nama Lengkap</th>
        <th>Jabatan</th>
        <th>Golongan</th>
        <th>Jenis Kelamin</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>No Telepon</th>
        <th>Email</th>
        
        </tr>
        </thead>

<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
while($row=mysql_fetch_array($query)){
?>
        <tbody>
        <tr>
        <td><?php echo $c=$c+1;?></td>
        <td><?php echo $row['nip'];?></td>
        <td><?php echo $row['nama_lengkap'];?></td>
        <td><?php echo $row['jabatan'];?></td>
        <td><?php echo $row['golongan'];?></td>
        <td><?php echo $row['jenis_kelamin'];?></td>
        <td><?php echo $row['tempat_lahir'];?></td>
        <td><?php echo $row['tgl_lahir'];?></td>
        <td><?php echo $row['alamat'];?></td>
        <td><?php echo $row['no_telp'];?></td>
        <td><?php echo $row['email'];?></td>
        
        <td><a href="update.php?nip=<?php echo $row['nip']; ?>">ubah</a></td>
        <td><a href="hapus.php?nip=<?php echo $row['nip']; ?>" onClick="return confirm('Apakah anda yakin?')">hapus</a></td>

        <?php
        }
        ?>

        </tr>
        </tbody>

        </table>

                
        </div>
</main>

</body>

</html>
		
                         
