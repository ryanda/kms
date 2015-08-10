<?php
require "includes/header_peraturan.php";
require "includes/config.php";
$data = mysql_query("select * from peraturan");
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

<div class="row">
        <div class="col s12">
                <ul class="tabs z-depth-1">
                        <li class="tab col s12 m2 l2 teal"><a class="white-text btn" href="#home">Berita</a></li>
                        <li class="tab col s12 m2 l2 teal"><a class="white-text btn" href="#pegawai">Data Pegawai</a></li>
                        <li class="tab col s12 m2 l2 teal"><a class="white-text btn active" href="#peraturan">Peraturan</a></li>
                        <li class="tab col s12 m2 l2 teal"><a class="white-text btn" href="#dokumen">Dokumen Pengetahuan</a></li>
                        <li class="tab col s12 m2 l2 teal"><a class="white-text btn" href="#berita">Berita & Publikasi</a></li>
                        <li class="tab col s12 m2 l2 teal"><a class="white-text btn" href="#forum">Forum Diskusi</a></li>
                </ul>
        </div>

<div class="col s12 section" id="home"> <br>
         Dialihkan... 
</div>
<div class="col s12 section" id="pegawai"> <br>
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

<div class="col s12 section" id="peraturan"> <br>
          <table class="hoverable centered responsive-table">
            <thead>
                <tr>
                  <th>No</th>
                  <th>Judul Peraturan</th>
                  <th>Nama File</th>
                  <th>Tipe</th>
                  <th>Ukuran</th>
                  <th>Download</th>
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
                  </tr>
               <?php } ?>
              </tbody>
          </table>
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
                    document.location.href="../../module/static/index.php";
            }
        }
        });
</script>


</body>
</html>