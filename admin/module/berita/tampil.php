<?php

require "includes/header_berita.php";
require "includes/config.php";
?>
<body>
		<main style="margin-top:30px; margin-bottom:30px;">
			<div class="container">
			
				<table class="hoverable centered responsive-table">
				<thead>
				<tr>
					<th>No</th>
					<th>Judul</th>
                    <th>Isi</th>
					<th>Tanggal</th>
                    <th>Opsi</th>
				</tr>
				</thead>
	<?php
	$no = 1;
	$query2 = "SELECT * from berita ";
	$sql = mysql_query ($query2);
	while ($hasil = mysql_fetch_array ($sql)) {
			?>
				<tbody>
				<tr>
					<td><?php echo $no?></td>
					
					<td><?php echo $hasil['judul_berita']?></td>
					<td><?php echo $hasil['isi']?></td> 
					<td><?php echo $hasil['tanggal']?></td>
		
					<td>
					<a href="edit.php?id=<?php echo $hasil['id_berita'] ?>" title="Edit <?php echo $judul ?>">Ubah</a> | 
					<a href="hapus.php?id=<?php echo $hasil['id_berita'] ?>"title="Hapus <?php echo $judul ?>">Hapus</a>
					</td>
				</tr>	
				</tbody>
				<?php $no++; ?>
				<?php } ?>
				
				</table>
			
			</div>
		</main>
</body>	