<?php

require "includes/header_artikel.php";
require "includes/config.php";
?>
<body>
		
		<div class="container">
			<div class="hero-unit">	
				<table class="table table-striped" border="0">
				<thead>
				<tr>
					<th width="10" scope scope="col" bgcolor="#333333"><font color="#CCCCCC">No</th>
					<th width="100" scope scope="col" bgcolor="#333333"><font color="#CCCCCC">Judul</th>
                    <th width="500" scope scope="col" bgcolor="#333333"><font color="#CCCCCC"><center>Isi</th>
					<th scope scope="col" bgcolor="#333333"><font color="#CCCCCC">Tanggal</th>
					<th scope scope="col" bgcolor="#333333"><font color="#CCCCCC">Waktu</th>
					<th width="50" scope scope="col" bgcolor="#333333"><font color="#CCCCCC">Pembaca</th>
					<th width="120" scope scope="col" bgcolor="#333333"><font color="#CCCCCC"><center>Opsi</th>
				</thead>
				</tr>
				
	<?php
	$no = 1;
	$query2 = "SELECT * from dokumen ";
	$sql = mysql_query ($query2);
	while ($hasil = mysql_fetch_array ($sql)) {
			?>
				<tbody>
				<tr>
					<td align="center"><?php echo $no?></td>
					
					<td><?php echo $hasil['judul']?></td>
                    <td><?php echo $hasil['isi']?></td>
					<td align="center"><small><?php echo $hasil['tanggal']?></small></td>
					<td align="center"><small><?php echo $hasil['waktu']?></small></td>
					<td align="center"><small><?php echo $hasil['baca']?></small></td> 
					<td align="center">&nbsp
					<a href="view.php?id=<?php echo $hasil ['id'];?>">View</a> &nbsp;|
					<a href="download.php?id=<?php echo $hasil ['id'];?>">Download</a></td>
				</tr>	
				</tbody>
				<?php $no++; ?>
				<?php } ?>
				
				</table>
			</div>
		</div>
</body>	