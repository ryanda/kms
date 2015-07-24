<?php

require "includes/header_berita.php";
require "includes/config.php";
?> 

	<main style="margin-top:30px; margin-bottom:30px;">

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

	<div class="container">

	<div class="row">
        <div class="col s12">
                <ul class="tabs z-depth-1">
                        <li class="tab col s12 m2 l2 teal"><a class="white-text btn" href="#home">Berita</a></li>
                        <li class="tab col s12 m2 l2 teal"><a class="white-text btn" href="#pegawai">Data Pegawai</a></li>
                        <li class="tab col s12 m2 l2 teal"><a class="white-text btn" href="#peraturan">Peraturan</a></li>
                        <li class="tab col s12 m2 l2 teal"><a class="white-text btn" href="#dokumen">Dokumen Pengetahuan</a></li>
                        <li class="tab col s12 m2 l2 teal"><a class="white-text btn active" href="#berita">Berita & Publikasi</a></li>
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
		<div class="col s12 section" id="dokumen"> <br>
		         Dialihkan... 
		</div>
		<div class="col s12 section" id="forum"> <br>
		         Dialihkan... 
		</div>

		<div class="col s12 section" id="berita"> <br>
			<table class="hoverable centered responsive-table">
				<thead>
					<tr>
						<th>No</th>
						<th>Judul</th>
	                    <th>Isi</th>
						<th>Tanggal</th>
					</tr>
				</thead>
	<?php
		$no = 1;
		$query2 = "SELECT * from berita";
		$sql = mysql_query ($query2);
		while ($hasil = mysql_fetch_array ($sql)) {
	?>
				<tbody>
					<tr>
						<td><?php echo $no ?></td>
						<td><?php echo $hasil['judul_berita']?></td>
						<td><?php echo $hasil['isi']?></td> 
						<td><?php echo $hasil['tgl_posting_berita']?></td>
					</tr>	
				</tbody>
<?php $no++; ?>
<?php } ?>
			</table>
		</div> </div>
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
                    document.location.href="../../forum.php";
            }
        }
        });
	</script>

</body>	
</html>