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
					<th width="100" scope scope="col" bgcolor="#333333"><font color="#CCCCCC">Judul</th>
                    <th width="500" scope scope="col" bgcolor="#333333"><font color="#CCCCCC"><center>Isi</th>

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

				</tr>	
				</tbody>
				<?php $no++; ?>
				<?php } ?>
				
				</table>
			</div>
		</div>
</body>	