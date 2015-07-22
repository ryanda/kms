<!DOCTYPE html>
<html>
<head>
	
        <title>KMS Pinmas Kementerian Agama</title>
        <link rel="shortcut icon" type="image" href="../asset/imagelogo/logo.png">
	    <link href="../asset/css/materialize.min.css" rel="stylesheet">
	    <style type="text/css">
		    body {
	            display: flex;
	            min-height: 100vh;
	            flex-direction: column;
	        }

	        img{
	        	height: 100px;
	        }
	        main { flex: 1 0 auto }
	        .container{width:90%}            
	        #search:hover {background-color:rgba(255,255,255,0.1)}
        </style>
    
</head>
<body>
		<!--    header navbar-->
	    <header>
	        <nav class="green accent-4">
	            <div class="nav-wrapper container">
	                <a class="brand-logo"><img class="circle responsive-img" src="../asset/images/logo-kemenag.png"></img></a>
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