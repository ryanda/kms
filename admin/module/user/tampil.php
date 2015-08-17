<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
require "includes/header_user.php";
require "includes/config.php";
$query=mysql_query("select * from user");

?>

<main style="margin-top:30px;">
<div class="container">
        <table class="hoverable centered responsive-table">
        <thead>
                <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>No Telp</th>
                        <th>Level</th>
                        <th>Divisi</th>
                        <th>Opsi</th>
                </tr>
        </thead>

<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
while($row=mysql_fetch_array($query)){
?>
        <tbody>
                <tr>
                        <td><?php echo $c=$c+1;?></td>
                        <td><?php echo $row['username'];?></td>
                        <td><?php echo $row['nama_lengkap'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['no_telp'];?></td>
                        <td><?php echo $row['level'];?></td>
                        <td><?php echo $row['divisi'];?></td>
                        <td>    
<a href="update.php?id_user=<?php echo $row['id_user']; ?>">ubah</a>  |
<a href="hapus.php?id_user=<?php echo $row['id_user']; ?>" onClick="return confirm('Apakah anda yakin?')">hapus</a>
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
                         
