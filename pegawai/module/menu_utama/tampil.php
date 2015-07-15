<?php

require "includes/header_mu.php";
require "includes/config.php";
?>
<body>
		
		<div class="container">
			<div class="hero-unit">	
<table class="table table-striped" border="0">
				<thead>
<tr>
  <th scope scope="col" bgcolor="#333333"><font color="#CCCCCC"><center>No</th>
  <th scope scope="col" bgcolor="#333333"><font color="#CCCCCC"><center>Menu Utama</th>
  <th scope scope="col" bgcolor="#333333"><font color="#CCCCCC"><center>Link</th>
  <th scope scope="col" bgcolor="#333333"><font color="#CCCCCC"><center>Aksi</th>
</tr>
</thead>
<?php
$q=mysql_query("SELECT * FROM menu_utama");
$no=1;
while($r=mysql_fetch_array($q)){
?>
<tbody>
<tr>
<td><center><?php echo $no; ?></td>
<td><center><?php echo $r['nama_menu']; ?></td>
<td><center><?php echo $r['link']; ?></td>
<td><center><a id="edit" href="edit.php?id_menu=<?php echo $r['id_menu'] ?>">Ubah</a></td>
</tr>
</tbody>
<?php
$no++;
}
?>
</table>
</br>
</br>

<?php echo "Data pada Menu Utama tidak dapat dihapus, tetapi dapat di non-aktifkan melalui ubah menu utama";?>
</table>
			</div>
		</div>
</body>	


