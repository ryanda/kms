<html>
    <head>
        <title>KMS Pinmas Kementerian Agama</title>
        <link rel="shortcut icon" type="image" href="../../../asset/imagelogo/logo.png">
	    <link href="../../asset/css/materialize.min.css" rel="stylesheet">
	    <style type="text/css">
		    body {
	            display: flex;
	            min-height: 100vh;
	            flex-direction: column;
	        }
	        main { flex: 1 0 auto }
	        .container{width:90%}            
	        #search:hover {background-color:rgba(255,255,255,0.1)}
        </style>
    </head>
    <body>
    	<!--    header navbar-->
	    <header>
	        <nav class="green darken-4">
	            <div class="nav-wrapper container">
	                <a class="brand-logo">Dashboard</a>
	                <ul id="nav-mobile" class="right hide-on-med-and-down">
	                <!-- tanda aja -->
						<li class="active"><a href="index.php"><i class="mdi-action-home left"></i>Home</a></li>
						<li><a class="dropdown-button" href="#!" data-activates="dropdown1" style="min-width: 300px">
							<i class="mdi-navigation-arrow-drop-down right"></i>
							<i class="mdi-action-dashboard left"></i>Manajemen Modul Kepala</a>
						</li>
						<li id="search">
							<form>
								<div class="input-field">
									<input id="search" type="search" required>
									<label for="search"><i class="mdi-action-search"></i></label>
									<i class="mdi-navigation-close"></i>
								</div>
							</form>
						</li>
						<li><a href="../login/index.php"><i class="mdi-action-description left"></i>Logout</a></li>
				    </ul>

					<ul id="dropdown1" class="dropdown-content">
						<li><a href="module/pegawai/tampil.php"><i class="mdi-action-account-child left"></i>Data Pegawai</a></li>
						<li><a href="module/peraturan/tampil.php"><i class="mdi-image-tune left"></i>Peraturan</a></li>
						<li><a href="module/dokumen/tampil.php"><i class="mdi-action-description left"></i>Dokumen Pengetahuan</a></li>
						<li><a href="module/berita/tampil.php"><i class="mdi-action-description left"></i>Berita dan Publikasi</a></li>
						<li><a href="module/diskusi/tampil.php"><i class="mdi-action-description left"></i>Manajemen Forum Diskusi</a></li>
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
		                	<h4>Selamat Datang</h4>
							<p>Silahkan mengatur konten sesuai dengan kebutuhan anda.</p>
	                	</div>
	                	<div class="section">
							<div class="slider">
							    <ul class="slides">
							      <li>
							        <div class="caption center-align">
							          <h3>This is our big Tagline!</h3>
							          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
							        </div>
							      </li>
							      <li>
							        <div class="caption left-align">
							          <h3>Left Aligned Caption</h3>
							          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
							        </div>
							      </li>
							      <li>
							        <div class="caption right-align">
							          <h3>Right Aligned Caption</h3>
							          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
							        </div>
							      </li>
							      <li>
							        <div class="caption center-align">
							          <h3>This is our big Tagline!</h3>
							          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
							        </div>
							      </li>
							    </ul>
							</div>
	                	</div> 
	                	<div class="section row">
	                		<div class="col s2 offset-s1">
		                		<a href="http://kemenag.go.id/" target="_blank">
		                			<img class="responsive-img" src="../asset/images/kemenag.go.id1.png">
	                			</a>
                			</div>
                			<div class="col s2">
		                		<a href="http://haji.kemenag.go.id/" target="_blank">
		                			<img class="responsive-img" src="../asset/images/hajiumroh1 copy.png">
	                			</a>
                			</div>
                			<div class="col s2">
		                		<a href="http://lpse.kemenag.go.id/" target="_blank">
		                			<img class="responsive-img" src="../asset/images/lpse.png">
	                			</a>
                			</div>
                			<div class="col s2">
		                		<a href="http://webmail@kemenag.go.id/" target="_blank">
		                			<img class="responsive-img" src="../asset/images/webkemenag.png">
	                			</a>
                			</div>
                			<div class="col s2">
		                		<a href="http://satulayanan.id/" target="_blank">
		                			<img class="responsive-img" src="../asset/images/layanan.png">
	                			</a>
                			</div>
	                	</div>
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
	                    <p class="grey-text text-lighten-4">
							Pusat Informasi dan Hubungan Masyarakat</br>
							Kementerian Agama Republik Indonesia
	                    </p>
	                </div>
	                <!-- <div class="col l4 offset-l2 s12">
	                    <h5 class="white-text"><i class="mdi-action-account-circle left"></i>Links</h5>
	                    <ul>
	                        <li><a class="grey-text text-lighten-3" href="#!"><i class="mdi-content-add-circle left"></i>Link 1</a>
	                        </li>
	                        <li><a class="grey-text text-lighten-3" href="#!"><i class="mdi-content-mail left"></i>Link 2</a>
	                        </li>
	                        <li><a class="grey-text text-lighten-3" href="#!"><i class="mdi-content-send left"></i>Link 3</a>
	                        </li>
	                        <li><a class="grey-text text-lighten-3" href="#!"><i class="mdi-content-archive left"></i>Link 4</a>
	                        </li>
	                    </ul>
	                </div> -->
	            </div>
	        </div>
	        <div class="footer-copyright">
	            <div class="container">
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
	        	height : 200,
	        	interval : 1000,
	        	transition : 500,
	        	indicators : false
	        });
	    });
	    </script>
    </body>
</html>