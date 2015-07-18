<?php

require "includes/header_berita.php";
require "includes/config.php";
?>
<body>
		
		<div class="container">
			<div class="hero-unit">	
				<table class="table table-striped" border="0">
				<thead>
				<tr>
					<th width="10" scope scope="col" bgcolor="#333333"><font color="#CCCCCC"><center>No</th></center>
					<th width="100"scope scope="col" bgcolor="#333333"><font color="#CCCCCC"><center>Judul</th></center>
                    <th width="200" scope scope="col" bgcolor="#333333"><font color="#CCCCCC">Isi<center></th>
					<th width="100"scope scope="col" bgcolor="#333333"><font color="#CCCCCC"><center>Tanggal</th></center>
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
					<td><center><small><?php echo $no?></small></td></center>
					
					<td><center><small><?php echo $hasil['judul_berita']?></small></td> </center>
					<td><center><?php echo $hasil['isi']?></center></td> 
					<td><center><small><?php echo $hasil['tanggal']?></small></td></center>
				</tr>	
				</tbody>
				<?php $no++; ?>
				<?php } ?>
				
				</table>
			</div>
		</div>
</body>	