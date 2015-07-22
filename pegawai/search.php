<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>KMS Pinmas</title>
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" type="image"/img.png href="../asset/images/logo-kemenag.png">

  <script src="../asset/js/jquery.min.js"></script>
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script> -->
  <script src="../asset/js/slides.min.jquery.js"></script>
	
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
                    <li><a href="../login/index.php" title="">Logout</a></li>
					<li class="last">
						<div>
							<input type="text" name="value" placeholder="search" />
							<input type="submit" name="search" value="Search"/>
						</div>
					</li>
			  </ul>
			</nav>
		</header>
	</div><!-- end header wrap -->

	<div id="container">
	
	<h2>Your Search Result is here</h2>

	<?php 
	require ("koneksi.php");

	if(isset($_GET['search'])){

		$search_id = $_GET['value'];

		if($search_id==''){
			echo "<script>alert('Please write a keyword')</script>";
			echo "<script>window.open('index.php','_self')</script>";
			exit();
		}

	$search_query = "select * from berita where judul_berita like '%$search_id'";

	$run_query = mysql_query($search_query);

	while ($search_row = mysql_fetch_array($run_query)){

		$id_berita = $search_row['id_berita'];
		$judul_berita = $search_row['judul_berita'];
		$isi = $search_row['isi'];


	?>

	<div class="container">

	<h3>
		<a href="textfull2.php?id=<?php echo $id_berita;?>">
		<?php echo $judul_berita; ?>
		</a>
	</h3>

	<p><?php echo $isi; ?></p>
		
	</div>

	<?php } } ?>
		
	</div>

	<div id="client-wrap" class="group">
		<div id="client">
			<ul>
				<li><a href="http://kemenag.go.id/" target="_blank"><img src="../asset/images/kemenag.go.id1.png" alt="" /></li>
				<li><a href="http://haji.kemenag.go.id/" target="_blank"><img src="../asset/images/hajiumroh1 copy.png" alt="" /></li>
				<li><a href="http://lpse.kemenag.go.id/" target="_blank"><img src="../asset/images/lpse.png" alt="" /></li>
				<li><a href="http://webmail@kemenag.go.id/" target="_blank"><img src="../asset/images/webkemenag.png" alt="" /></li>
				<li><a href="http://satulayanan.id/" target="_blank"><img src="../asset/images/layanan.png" alt="" /></li>
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
				
		<a href="#header-wrap"><img src="../asset/images/back-top.png" alt="back-top" class="back-top" /></a>	</footer>
	
	
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