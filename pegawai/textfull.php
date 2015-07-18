<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>KMS Pinmas</title>
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" type="image"/img.png href="images/logo-kemenag.png">

  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
  <script src="js/slides.min.jquery.js"></script>
	
	<!--[if IE]>
	<script type="text/javascript">
	(function(){
	var html5elmeents = "address|article|aside|audio|canvas|command|datalist|details|dialog|figure|figcaption|footer|header|hgroup|keygen|mark|meter|menu|nav|progress|ruby|section|time|video".split('|');
	for(var i = 0; i < html5elmeents.length; i++){
	document.createElement(html5elmeents[i]);
	}
	}
	)();
	</script>
	<![endif]-->
</head>

<body>
	<div id="header-wrap">
		<header class="group">
			<h2><a href="index.html" title="burstudio">KMS Pinmas</a></h2>
			<div id="call">
			</div><!-- end call -->
			<nav class="group">
				<ul>
					<li class="home"><a href="index.php" title="">Home</a></li>
					<li><a href="module/pegawai/tampil.php" title="">Data Pegawai</a></li>
					<li><a href="module/peraturan/tampil.php" title="">Peraturan</a></li>
					<li><a href="module/dokumen/tampil.php" title="">Dokumen Pengetahuan</a></li>
                    <li><a href="module/berita/tampil.php" title="">Berita dan Publikasi</a></li>
					<li><a href="module/diskusi/tampil.php" title="">Forum Diskusi</a></li>
					<li class="last">
						<div>
							<input type="text" name="search" placeholder="search" />
							<input type="submit" name="search" value="go" class="search"/>
						</div>
					</li>
			  </ul>
			</nav>
		</header>
	</div><!-- end header wrap -->
	
<div id="container">
		<div id="slides">

					<?php
					include "koneksi.php";
$id = $_GET['id'];
$sql = "SELECT * FROM `dokumen` WHERE `id` = $id LIMIT 0, 30 ";
$q = mysql_query($sql);
$r=mysql_fetch_array($q);
?>
<h3 class="title"><a><strong><?php echo $r['judul'];?></strong> </a></h3>				
<p class="meta">
					<?php echo $r['isi'];
					?>
					<p style="font-size:10px"><i>Diposting Tanggal : <?php echo $r['tanggal'];?>   jam: <?php echo $r['waktu']; ?></i></p>
					
</div>
				</div>
				<!-- end #content -->
	<div id="client-wrap" class="group">
		<div id="client">
			<ul>
				<li><a href="http://kemenag.go.id/" target="_blank"><img src="images/kemenag.go.id1.png" alt="" /></li>
				<li><a href="http://haji.kemenag.go.id/" target="_blank"><img src="images/hajiumroh1 copy.png" alt="" /></li>
				<li><a href="http://lpse.kemenag.go.id/" target="_blank"><img src="images/lpse.png" alt="" /></li>
				<li><a href="http://webmail@kemenag.go.id/" target="_blank"><img src="images/webkemenag.png" alt="" /></li>
				<li><a href="http://satulayanan.id/" target="_blank"><img src="images/layanan.png" alt="" /></li>
			</ul>
		</div><!-- end client -->
	</div><!-- end client-wrap -->
	
	<footer class="group">
		<div id="footer-left">
			<p>Pusat Informasi dan Hubungan Masyarakat</br>
			 Kementerian Agama Republik Indonesia</p>
		</div>
			
		<div id="footer-right">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Data Pegawai</a></li>
                <li><a href="#">Peraturan</a></li>
				<li><a href="#">Dokumen Pengetahuan</a></li>
				<li><a href="#">Berita dan Publikasi</a></li>
				<li><a href="#">Forum Diskusi</a></li>
			</ul>
		</div>
				
		<a href="#header-wrap"><img src="images/back-top.png" alt="back-top" class="back-top" /></a>	</footer>
	
	
<script>
		$(function(){
			$('#slides').slides({
				preload: true,
				generateNextPrev: true,	
			});
		});
</script>

</body>
</html>
