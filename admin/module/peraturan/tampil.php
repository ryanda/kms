<?php
require "includes/header_peraturan.php";
require "includes/config.php";
?> 

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
        $query2 = "SELECT * from peraturan_input";
        $sql = mysql_query ($query2);
        while ($hasil = mysql_fetch_array ($sql)) {
    ?>
                <tbody>
                    <tr>
                        <td><?php echo $no ?></td>
                        
                        <td><?php echo $hasil['judul']?></td>
                        <td><?php echo $hasil['isi']?></td> 
                        <td><?php echo $hasil['tgl_posting_peraturan']?></td>
            
                        <td>
                        <a href="edit.php?id=<?php echo $hasil['id'] ?>" title="Edit <?php echo $judul ?>">Ubah</a> | 
                        <a href="delete1.php?id=<?php echo $hasil['id'] ?>" title="Hapus <?php echo $judul ?>">Hapus</a>
                        </td>
                    </tr>   
                </tbody>
<?php $no++; ?>
<?php } ?>
            </table>
    <!--     </div>
    </main> -->

<hr><hr>

<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
// require "includes/header_peraturan.php";
// require "includes/config.php";
$data = mysql_query("select * from peraturan");
?>

    <!-- start main content -->
    <!-- <main style="margin-top:30px;">
        <div class="container"> -->
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