<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
require "includes/header_user.php";
require "includes/config.php";
$query=mysql_query("select * from pegawai_pinmas");
?>

<style type="text/css">
.tabs .tab a { 
        text-transform: capitalize;
        line-height: inherit; 
        padding: 0;
}
.card .card-action a { text-transform: none }
.tabs .tab a { 
        border: 0.1rem solid #ee6e73; 
        border-top: none; 
        border-bottom: none; 
}
.tabs .indicator{ height:5px;background-color:rgba(255,255,255,0.5); }
</style>

<main style="margin-top:30px;">
        <div class="container">

        <div class="row">
        <div class="col s12">
                <ul class="tabs z-depth-1">
                        <li class="tab col s12 m2 l2 teal"><a class="white-text btn" href="#home">Berita</a></li>
                        <li class="tab col s12 m2 l2 teal"><a class="white-text btn active" href="#pegawai">Data Pegawai</a></li>
                        <li class="tab col s12 m2 l2 teal"><a class="white-text btn" href="#peraturan">Peraturan</a></li>
                        <li class="tab col s12 m2 l2 teal"><a class="white-text btn" href="#dokumen">Dokumen Pengetahuan</a></li>
                        <li class="tab col s12 m2 l2 teal"><a class="white-text btn" href="#berita">Berita & Publikasi</a></li>
                        <li class="tab col s12 m2 l2 teal"><a class="white-text btn" href="#forum">Forum Diskusi</a></li>
                </ul>
        </div>

                <div class="col s12 section" id="home"> <br>
                         Dialihkan... 
                </div>
                <div class="col s12 section" id="peraturan"> <br>
                         Dialihkan... 
                </div>
                <div class="col s12 section" id="dokumen"> <br>
                         Dialihkan... 
                </div>
                <div class="col s12 section" id="berita"> <br>
                         Dialihkan... 
                </div>
                <div class="col s12 section" id="forum"> <br>
                         Dialihkan... 
                </div>

        <div class="col s12 section" id="pegawai"> <br>

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
</div>
</div>
</main>
<script type="text/javascript">
        $(document).ready(function() {
        $('ul.tabs').tabs();
        $('.tabs').click(function() {
            cekaktif();
        });

        function cekaktif() {
        if ($('.tabs .tab:eq(1) a').hasClass('active')) {
                    document.location.href="../../module/pegawai/tampil.php";
            } else if ($('.tabs .tab:eq(2) a').hasClass('active')) {
                    document.location.href="../../module/peraturan/tampil.php";
            } else if ($('.tabs .tab:eq(3) a').hasClass('active')) {
                    document.location.href="../../module/dokumen/tampil.php";
            } else if ($('.tabs .tab:eq(4) a').hasClass('active')) {
                    document.location.href="../../module/berita/tampil.php";
            } else if ($('.tabs .tab:eq(0) a').hasClass('active')) {
                    document.location.href="../../index.php";
            } else {
                    document.location.href="../../../forum/index.html";
            }
        }
        });
</script>
</body>
</html>