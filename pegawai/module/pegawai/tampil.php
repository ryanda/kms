<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
require "includes/header_user.php";
require "includes/config.php";
$query=mysql_query("select * from pegawai_pinmas");
?>

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
                        <th>Aksi</th>
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
                        <td>    <a href="update.php?nip=<?php echo $row['nip']; ?>">ubah</a>  |
                                <a href="hapus.php?nip=<?php echo $row['nip']; ?>" onClick="return confirm('Apakah anda yakin?')">hapus</a>
                        </td>
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
                
                         
