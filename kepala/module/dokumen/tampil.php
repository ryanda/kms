<?php
require "includes/header_artikel.php";
require "includes/config.php";
?>
<body>
		 <!-- start main content -->
        <main style="margin-top:30px; margin-bottom:30px;">
        <div class="container">
        <table class="hoverable centered responsive-table">
          <thead>
              <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Isi</th>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Pembaca</th>
              </tr>
          </thead>

			<?php
			$no = 1;
			$query2 = "SELECT * from dokumen ";
			$sql = mysql_query ($query2);
			while ($hasil = mysql_fetch_array ($sql)) {
			?>		

             <tbody> 
             
             <tr>

                    <td><?php echo $no?></td>
					
					<td><?php echo $hasil['judul']?></td>
                    <td><?php echo $hasil['isi']?></td>
					<td><?php echo $hasil['tanggal']?></td>
					<td><?php echo $hasil['waktu']?></td>
					<td><?php echo $hasil['baca']?></td> 
             </tr>
             </tbody>

             <?php $no++; ?>
			 <?php } ?>

          </table>
        </div>
    </main>
    <!-- end main content -->

</body>	
</html>