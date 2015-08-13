<?php
	require "config.php";
?> 

<html>
    <head>
        <title>KMS Pinmas Kementerian Agama</title>
        <link rel="shortcut icon" type="image" href="../../../asset/imagelogo/logo.png">
	    <link href="../../../asset/css/materialize.min.css" rel="stylesheet">
	    <style type="text/css">
		    body {
	            display: flex;
	            min-height: 100vh;
	            flex-direction: column;
	        }
	        main { flex: 1 0 auto }
	        .container{width:90%}  
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
    </head>
    <body>
    	<!--    header navbar-->
	    <header>
	        <nav class="green darken-4">
	            <div class="nav-wrapper container">
	                <a class="brand-logo">Forum Diskusi</a>
	                <ul id="nav-mobile" class="right hide-on-med-and-down">
	                <!-- tanda aja -->
						<li><a href="../../home.php"><i class="mdi-action-home left"></i>Home</a></li>
						<li><i class="mdi-action-account-child left"></i>
                        <?php echo (isset($_SESSION['nama_lengkap']) ? $_SESSION['nama_lengkap'] : 'anonym' )?>
                        </li>
                        <li><a href="../../../logout.php"><i class="mdi-content-reply left"></i>Logout</a></li>                         
                        
				    </ul>
	            </div>
	        </nav>
	    </header>
	    <!--    end header navbar-->

	    <!--    main content-->
	    <main style="margin-top:20px;">
	        <div class="container">
	            <div class="row">

				<div class="col s12">
                <ul class="tabs z-depth-1">
                        <li class="tab col s12 m2 l2 teal"><a class="white-text btn" href="#home">Home</a></li>
                        <li class="tab col s12 m2 l2 teal"><a class="white-text btn" href="#pegawai">Data Pegawai</a></li>
                        <li class="tab col s12 m2 l2 teal"><a class="white-text btn" href="#peraturan">Peraturan</a></li>
                        <li class="tab col s12 m2 l2 teal"><a class="white-text btn" href="#dokumen">Dokumen Pengetahuan</a></li>
                        <li class="tab col s12 m2 l2 teal"><a class="white-text btn" href="#berita">Berita & Publikasi</a></li>
                        <li class="tab col s12 m2 l2 teal"><a class="white-text btn active" href="#forum">Forum Diskusi</a></li>
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
         
	<?php
		$q = "SELECT * from forum";
		$sql = mysql_query ($q);
		while ($hasil = mysql_fetch_array ($sql)) {
	?>
	                <div class="col s4">
						<div class="card teal">
							<div class="card-content white-text center-align">
								<span class="card-title"><?php echo $hasil['judul']?></span>
								<p class="truncate"><?php echo $hasil['isi']?></p>
							</div>
							<div class="card-action">
								<a>oleh <?php echo $hasil['user'].', '.$hasil['tgl']?></a>
								<a href="tampil.php?id=<?php echo $hasil['id'] ?>">link</a>
								<a href="hapus.php?id=<?php echo $hasil['id'] ?>" class="red-text">hapus</a>
							</div>
						</div>
	                </div>
	<?php } ?>
	            </div>
	        
			</div>

	        </div>
	    </main>
	    <!--    end main content-->

	    <!--    footer page-->
	    <footer class="page-footer green darken-4">
	        <div class="container">
	            <div class="row">
	                <div class="col l6 s12">
	                    <h5 class="white-text">Knowledge Management System</h5>
	                </div>
	            </div>
	        </div>
	        <div class="footer-copyright">
	            <div class="container">
	                © 2015 Copyright miftaamelia
	            </div>
	        </div>
	    </footer>
	    <!--    end footer page-->

<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
	<a class="btn-floating btn-large red" href="baru.php">
		<i class="large mdi-content-add"></i>
	</a>
</div>

        <script src="../../../asset/js/jquery.min.js"></script>
	    <script src="../../../asset/js/materialize.min.js"></script>
	    <script type="text/javascript">
	    	$(".dropdown-button").dropdown();
	    	$('.modal-trigger').leanModal();
	    	// $('#user').openModal({
	    	// 	dismissible: false,
	    	// 	opacity: .9
	    	// });
			
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
	                    document.location.href="../../home.php";
	            } else {
	                    document.location.href="../../module/static/index.php";
	            }
	        }
	        });

	    </script>
    </body>
</html>