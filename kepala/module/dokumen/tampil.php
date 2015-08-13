<?php
require "includes/header_artikel.php";
require "includes/config.php";
?>
<body>

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
		 <!-- start main content -->
        <main style="margin-top:30px; margin-bottom:30px;">
        <div class="container">

<div class="row">
        <div class="col s12">
                <ul class="tabs z-depth-1">
                        <li class="tab col s12 m2 l2 teal"><a class="white-text btn" href="#home">Home</a></li>
                        <li class="tab col s12 m2 l2 teal"><a class="white-text btn" href="#pegawai">Data Pegawai</a></li>
                        <li class="tab col s12 m2 l2 teal"><a class="white-text btn" href="#peraturan">Peraturan</a></li>
                        <li class="tab col s12 m2 l2 teal"><a class="white-text btn active" href="#dokumen">Dokumen Pengetahuan</a></li>
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
<div class="col s12 section" id="peraturan"> <br>
         Dialihkan... 
</div>
<div class="col s12 section" id="berita"> <br>
         Dialihkan... 
</div>
<div class="col s12 section" id="forum"> <br>
         Dialihkan... 
</div>

<div class="col s12 section container" id="dokumen"> <br>
  <div class="section row">


<!-- start of management knowledge -->
<?php
  $dvs = mysql_query ("SELECT * from divisi ");
  while ($data = mysql_fetch_array ($dvs)) {
    $id = $data['id'];
?>  
<div class="col s6">
<!-- START ACCORDION -->
  <!-- LEVEL 1 -->
  <ul class="collapsible popout" data-collapsible="accordion">
    
    <!-- deskripsi -->
    
    <li class="active">
      <div class="collapsible-header active teal darken-3"><i class="mdi-av-subtitles"></i>Deskripsi</div>
      <div class="collapsible-body teal" style="display: block;"><p><?php echo $data['nama'] ?></p></div>
    </li>
    
    <!-- dokumen -->
    
    <li>
      <div class="collapsible-header cyan darken-3"><i class="mdi-image-filter-drama"></i>Dokumen</div>
      
<?php
  $dok2 = "select * from divisi_sub where id_div='$id'";
  $sql2 = mysql_query ($dok2);
  while ($data2 = mysql_fetch_array ($sql2)) {
    $id2 = $data2['id'];
  if (mysql_num_rows($sql2) == 1) { 
?>
      <div class="collapsible-body">
        <p style="font-size: 17px">
  <?php
    $dok3 = "select * from dokumen where divisi='$id2'";
    $sql3 = mysql_query ($dok3);
    while ($data3 = mysql_fetch_array ($sql3)) {
  ?>
          <i class="mdi-file-file-download left"></i>
          <?php echo $data3['judul'] ?> 
          <a href="laporan.php?id=<?php echo $data3['id'] ?>">Download</a><br>
  <?php } ?>
        </p>
      </div>
<?php } else { ?>
      <div class="collapsible-body" style="padding:20px">
        <ul class="collapsible" data-collapsible="accordion">
            <li>
              <div class="collapsible-header teal">
                <i class="mdi-image-filter-drama"></i><?php echo $data2['nama'] ?>
              </div>
              <div class="collapsible-body">
                <p> 

  <?php
    $dok4 = "select * from dokumen where divisi='$id2'";
    $sql4 = mysql_query ($dok4);
    while ($data4 = mysql_fetch_array ($sql4)) {
  ?>
          <i class="mdi-file-file-download left"></i>
          <?php echo $data4['judul'] ?> 
          <a href="laporan.php?id=<?php echo $data4['id'] ?>">Download</a><br>
  <?php } ?>

                </p>
              </div>
            </li>
        </ul>
      </div>
<?php } //end while 
 } //end if ?>

    </li>
    <!-- file -->
    <li>
      <div class="collapsible-header orange darken-4"><i class="mdi-maps-place"></i>File</div>

<?php
  $file2 = "select * from divisi_sub where id_div='$id'";
  $sql2 = mysql_query ($file2);
  while ($data2 = mysql_fetch_array ($sql2)) {
    $id2 = $data2['id'];
  if (mysql_num_rows($sql2) == 1) { 
?>
      <div class="collapsible-body">
        <p style="font-size: 17px">
  <?php
    $file3 = "select * from dokumen_upload where divisi='$id2'";
    $sql3 = mysql_query ($file3);
    while ($data3 = mysql_fetch_array ($sql3)) {
  ?>
          <i class="mdi-file-file-download left"></i>
          <?php echo $data3['judul'] ?> 
          <a href="download.php?id=<?php echo $data3['id'] ?>">Download</a><br>
  <?php } ?>
        </p>
      </div>
<?php } else { ?>
      <div class="collapsible-body" style="padding:20px">
        <ul class="collapsible" data-collapsible="accordion">
            <li>
              <div class="collapsible-header">
                <i class="mdi-image-filter-drama"></i><?php echo $data2['nama'] ?>
              </div>
              <div class="collapsible-body">
                <p> 

  <?php
    $file4 = "select * from dokumen_upload where divisi='$id2'";
    $sql4 = mysql_query ($file4);
    while ($data4 = mysql_fetch_array ($sql4)) {
  ?>
          <i class="mdi-file-file-download left"></i>
          <?php echo $data4['judul'] ?> 
          <a href="download.php?id=<?php echo $data4['id'] ?>">Download</a><br>
  <?php } ?>

                </p>
              </div>
            </li>
        </ul>
      </div>
<?php } //end while 
 } //end if ?>

    </li>
  </ul>
  </div>
<!-- END ACCORDION -->
<?php } ?>



</div>
          </div>
        </div> 
      </div>

    </main>
    <!-- end main content -->
<script type="text/javascript">
        $(document).ready(function() {
        $('.collapsible').collapsible({
            accordion : false 
        });
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
                    document.location.href="../../home.php";
            } else {
                    document.location.href="../../module/static/index.php";
            }
        }
        });
</script>

</body>	
</html>