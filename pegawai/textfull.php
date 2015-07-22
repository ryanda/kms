<?php
	include "koneksi.php";
	$id = $_GET['id'];
	$sql = "SELECT * FROM berita WHERE id_berita = '$id' ";
	$q = mysql_query($sql);
	$r=mysql_fetch_array($q);
?>

<html>
    <head>
        <title>KMS Pinmas Kementerian Agama</title>
        <link rel="shortcut icon" type="image" href="../../../asset/imagelogo/logo.png">
	    <link href="../asset/css/materialize.min.css" rel="stylesheet">
	    <style type="text/css">
		    body {
	            display: flex;
	            min-height: 100vh;
	            flex-direction: column;
	        }
	        main { flex: 1 0 auto }
	        .container{width:90%}            
	        #search:hover { background-color:rgba(255,255,255,0.1) }
			.tabs .tab { text-transform: none }
			.card .card-action a { text-transform: none }
			.tabs .tab a { border: 0.1rem solid #ee6e73; border-top: none; border-bottom: none }
			#gbr div a img { display:block; margin:0 auto; margin-bottom: 5px;}
        </style>
    </head>
    <body>
    	<!--    header navbar-->
	    <header>
	        <nav class="green accent-4" id="top">
	            <div class="nav-wrapper container">
	                <a class="brand-logo">Dashboard</a>
	                <ul id="nav-mobile" class="right hide-on-med-and-down">
						<li><a href="index.php"><i class="mdi-action-home left"></i>Home</a></li>
						<li><a><i class="mdi-action-account-child left"></i>Pegawai</a></li>
				        <li><a href="../login/index.php"><i class="mdi-content-reply left"></i>Logout</a></li>
						<li id="search">
							<form>
								<div class="input-field">
									<input id="search" type="search" required placeholder="pencarian">
									<label for="search"><i class="mdi-action-search"></i></label>
									<i class="mdi-navigation-close"></i>
								</div>
							</form>
						</li>
				    </ul>
	            </div> 
	        </nav>
	    </header>
	    <!--    end header navbar-->

	    <!--    main content-->
	    <main style="margin-top:20px;">
	        <div class="container section">
	            <div class="row">
                	<div class="col s12">
                		<div class="section">
	                		<img class="responsive-img" src="../asset/images/logo.png">
                		</div>
                	</div>
                	<div class="col s12 section">
						<ul class="tabs z-depth-1">
					        <li class="tab"><a href="module/pegawai/tampil.php">Data Pegawai</a></li>
					        <li class="tab"><a href="module/peraturan/tampil.php">Peraturan</a></li>
					        <li class="tab"><a href="module/dokumen/tampil.php">Dokumen Pengetahuan</a></li>
					        <li class="tab"><a href="module/berita/tampil.php">Berita dan Publikasi</a></li>
					        <li class="tab"><a href="module/diskusi/tampil.php">Forum Diskusi</a></li>
					    </ul>
                	</div>
                	
                	<div class="col s12 section"> <br>
					      <div class="card center-align">
					        <div class="card-content">
					          <span class="card-title grey-text">
					          	<h3><?php echo $r['judul_berita'];?></h3>
					          </span>
					          <p class="flow-text" style="word-wrap: break-word"><?php echo $r['isi']; ?></p>
					        </div>
					        <div class="card-action">
					          <a>Tanggal <?php echo $r['tgl_posting_berita'];?></a>
					        </div>
					      </div>
                	</div>
	            </div>
	        </div>

	        <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
				<a class="btn-floating btn-large red" href="#top">
					<i class="large mdi-hardware-keyboard-arrow-up"></i>
				</a>
			</div>
	    </main>
	    <!--    end main content-->

	    <!--    footer page-->
	    <footer class="page-footer green accent-4">
	        <div class="container row">
				<div class="col s4">
	                <h5 class="white-text">Knowledge Management System</h5>
	                <p class="grey-text text-lighten-4">Pusat Informasi dan Hubungan Masyarakat</br> Kementerian Agama Republik Indonesia
	                </p>
                </div>
                <div class="col s8"> 
                	<div class="row" id="gbr">
            		<div class="col s4">
                		<a href="http://kemenag.go.id/" target="_blank">
                			<img class="responsive-img" src="../asset/images/kemenag.go.id1.png" style="">
            			</a>
        			</div>
        			<div class="col s4">
                		<a href="http://haji.kemenag.go.id/" target="_blank">
                			<img class="responsive-img" src="../asset/images/hajiumroh1 copy.png">
            			</a>
        			</div>
        			<div class="col s4">
                		<a href="http://lpse.kemenag.go.id/" target="_blank">
                			<img class="responsive-img" src="../asset/images/lpse.png">
            			</a>
        			</div>
        			<div class="col s4">
                		<a href="http://webmail@kemenag.go.id/" target="_blank">
                			<img class="responsive-img" src="../asset/images/webkemenag.png">
            			</a>
        			</div>
        			<div class="col s4">
                		<a href="http://satulayanan.id/" target="_blank">
                			<img class="responsive-img" src="../asset/images/layanan.png">
            			</a>
        			</div>
        			</div>
            	</div>
	        </div>
	        <div class="footer-copyright">
                <div class=container>
                	© 2015 Copyright miftaamelia
                </div>
	        </div>

	    </footer>
	    <!--    end footer page-->

        <script src="../../asset/js/jquery.min.js"></script>
	    <script src="../../asset/js/materialize.min.js"></script>
	    <script type="text/javascript">
		$(document).ready(function(){
			$('.parallax').parallax();
			$(".dropdown-button").dropdown();
	        $('.slider').slider({
	        	height : 250,
	        	interval : 1000,
	        	transition : 500,
	        	indicators : false
	        });
	        $('ul.tabs').tabs();
	    });
	    </script>
    </body>
</html>