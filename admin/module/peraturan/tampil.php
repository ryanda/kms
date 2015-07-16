<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
require "includes/header_peraturan.php";
require "includes/config.php";
$data = mysql_query("select * from peraturan");
?>

    <!-- start main content -->
    <main style="margin-top:30px;">
        <div class="container">
        <table class="hoverable centered responsive-table">
          <thead>
              <tr>
                <th>No</th>
                <th>Judul Peraturan</th>
                <th>Nama File</th>
                <th>Tipe</th>
                <th>Ukuran</th>
                <th>Download</th>
                <th>Opsi</th>
             </tr>
             </thead>
             <tbody> 
             <?php while ($row =mysql_fetch_assoc($data)) { ?>
             <tr>
                <td><?php echo $c=$c+1;?></td>
                <td><?php echo $row['judul_peraturan'] ?></td>
                <td><?php echo $row['filename'] ?></td>
                <td><?php echo $row['filetype'] ?></td>
                <td><?php echo $row['filesize'] ?></td>
                <td><a href="download.php?id_peraturan=<?php echo $row['id_peraturan'] ?>">Download</a></td>
                <td><a href="delete.php?id_peraturan=<?php echo $row['id_peraturan'] ?>">Hapus</a></td>   
             </tr>
             <?php } ?>
             </tbody>
          </table>
        </div>
    </main>
    <!-- end main content -->
</body>
</html>