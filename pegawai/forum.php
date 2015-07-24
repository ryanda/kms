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
			#gbr div a img { display:block; margin:0 auto; margin-bottom: 5px;}
			.tabs .indicator{ height:5px;background-color:rgba(255,255,255,0.5); }
        </style>
    </head>
    <body>
    	<!--    header navbar-->
	    <header>
	        <nav class="green darken-4" id="top">
	            <div class="nav-wrapper container">
	                <a class="brand-logo"><img style="height:60px; padding-top: 5px;" src="../asset/imagelogo/logo.png"></a>
	                <ul id="nav-mobile" class="right hide-on-med-and-down">
						<li><a href="index.php"><i class="mdi-action-home left"></i>Home</a></li>
						<li><a><i class="mdi-action-account-child left"></i>Kepala</a></li>
				        <li><a href="../login/index.php"><i class="mdi-content-reply left"></i>Logout</a></li>
						<!-- <li id="search">
							<form>
								<div class="input-field">
									<input id="search" type="search" required placeholder="pencarian">
									<label for="search"><i class="mdi-action-search"></i></label>
									
								</div>
							</form>
						</li> -->
				    </ul>
	            </div> 
	        </nav>
	    </header>
	    <!--    end header navbar-->

	    <!--    main content-->
	    <main style="margin-top:20px;">
	        <div class="container section teal darken-4">
	            <div class="row">
                	<!-- <div class="col s12">
                		<div class="section">
	                		<img class="responsive-img" src="../asset/images/logo.png">
                		</div>
                	</div> -->
                	<div class="col s12">
						<ul class="tabs z-depth-1">
					        <li class="tab col s12 m2 l2 teal"><a class="white-text btn" target="_blank" href="#home">Berita</a></li>
					        <li class="tab col s12 m2 l2 teal"><a class="white-text btn" target="_blank" href="#pegawai">Data Pegawai</a></li>
					        <li class="tab col s12 m2 l2 teal"><a class="white-text btn" target="_blank" href="#peraturan">Peraturan</a></li>
					        <li class="tab col s12 m2 l2 teal"><a class="white-text btn" target="_blank" href="#dokumen">Dokumen Pengetahuan</a></li>
					        <li class="tab col s12 m2 l2 teal"><a class="white-text btn" target="_blank" href="#berita">Berita & Publikasi</a></li>
					        <li class="tab col s12 m2 l2 teal"><a class="white-text btn active" target="_blank" href="#forum">Forum Diskusi</a></li>
					    </ul>
                	</div>
                	
                	<div class="col s12 row section" id="pegawai"> <br>
                		<a href="module/pegawai/tampil.php"> Dialihkan... </a>
                	</div>
                	<div class="col s12 row section" id="peraturan"> <br>
                		<a href="module/peraturan/tampil.php"> Dialihkan... </a>
                	</div>
                	<div class="col s12 row section" id="dokumen"> <br>
                		<a href="module/dokumen/tampil.php"> Dialihkan... </a>
                	</div>
                	<div class="col s12 row section" id="berita"> <br>
                		<a href="module/berita/tampil.php"> Dialihkan... </a>
                	</div>
                	<div class="col s12 row section" id="home"> <br>
                		<a href="index.php"> Dialihkan... </a>
                	</div>

                	<div class="col s12 row section" id="forum"> <br>

                			<!-- link ke forum  -->
						    <div class="col s4 ">
						      <div class="card">
						        <div class="card-image waves-effect waves-block waves-light">
						          <img class="activator" src="../asset/imagelogo/logo-kaskus-1024x1024.png">
						        </div>
						        <div class="card-content">
						          <span class="card-title activator grey-text text-darken-4">Kaskus <i class="mdi-navigation-more-vert right"></i></span>
						          <p><a href="http://kaskus.co.id">Menuju Link</a></p>
						        </div>
						        <div class="card-reveal teal lighten-2">
						          <span class="card-title grey-text text-darken-4">Kaskus <i class="mdi-navigation-close right"></i></span>
						          <p>Kaskus is an Indonesian internet forum site which claims to be the largest Indonesian online community. 
						          Registration is required for new users to participate in the community, and every registered member has access to more than twenty regional and subject-related sub-forums. 
						          .</p>
						        </div>
						      </div>
						    </div>


                			<!-- link ke forum  -->
						    <div class="col s4 ">
						      <div class="card">
						        <div class="card-image waves-effect waves-block waves-light">
						          <img class="activator" src="../asset/imagelogo/logo-bar-detik1.jpg">
						        </div>
						        <div class="card-content">
						          <span class="card-title activator grey-text text-darken-4">DetikCom <i class="mdi-navigation-more-vert right"></i></span>
						          <p><a href="http://forum.detik.com/forum.php?dftforum">Menuju Link</a></p>
						        </div>
						        <div class="card-reveal teal lighten-2">
						          <span class="card-title grey-text text-darken-4">DetikCom <i class="mdi-navigation-close right"></i></span>
						          <p>DetikCom is an online news and article website based in Indonesia. 
						          DetikCom only has online edition and it relies on advertisements for its profit. 
						          While the website focuses on news, it also has many articles about other topics such as sport, automotive, food, health, etc. and they are divided by its own site
						          .</p>
						        </div>
						      </div>
						    </div>

						    <!-- link ke forum  -->
						    <div class="col s4 ">
						      <div class="card">
						        <div class="card-image waves-effect waves-block waves-light">
						          <img class="activator" src="../asset/imagelogo/Logo_Kompas_Di_Layar_kaca.png">
						        </div>
						        <div class="card-content">
						          <span class="card-title activator grey-text text-darken-4">Kompas <i class="mdi-navigation-more-vert right"></i></span>
						          <p><a href="http://forum.kompas.com/">Menuju Link</a></p>
						        </div>
						        <div class="card-reveal teal lighten-2">
						          <span class="card-title grey-text text-darken-4">Kompas <i class="mdi-navigation-close right"></i></span>
						          <p>Kompas is an Indonesian national newspaper. Published by Kompas Gramedia, it has been in existence since June 28, 1965.
									Kompas also manage an online portal KOMPAS.com, which contains updated news and the digital version of the paper
									.</p>
						        </div>
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
	    <footer class="page-footer green darken-4">
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
                			<img class="circle responsive-img" src="../asset/images/kemenag.go.id1.png" style="">
            			</a>
        			</div>
        			<div class="col s4">
                		<a href="http://haji.kemenag.go.id/" target="_blank">
                			<img class="circle responsive-img" src="../asset/images/hajiumroh1 copy.png">
            			</a>
        			</div>
        			<div class="col s4">
                		<a href="http://lpse.kemenag.go.id/" target="_blank">
                			<img class="circle responsive-img" src="../asset/images/lpse.png">
            			</a>
        			</div>
        			<div class="col s4">
                		<a href="http://webmail@kemenag.go.id/" target="_blank">
                			<img class="circle responsive-img" src="../asset/images/webkemenag.png">
            			</a>
        			</div>
        			<div class="col s4">
                		<a href="http://satulayanan.id/" target="_blank">
                			<img class="circle responsive-img" src="../asset/images/layanan.png">
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

        <script src="../asset/js/jquery.min.js"></script>
	    <script src="../asset/js/materialize.min.js"></script>
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
	        $('.tabs').click(function() {
			    cekaktif();
	        });

	        function cekaktif() {
	        	if ($('.tabs .tab:eq(1) a').hasClass('active')) {
				    document.location.href="module/pegawai/tampil.php";
			    } else if ($('.tabs .tab:eq(2) a').hasClass('active')) {
				    document.location.href="module/peraturan/tampil.php";
			    } else if ($('.tabs .tab:eq(3) a').hasClass('active')) {
				    document.location.href="module/dokumen/tampil.php";
			    } else if ($('.tabs .tab:eq(4) a').hasClass('active')) {
				    document.location.href="module/berita/tampil.php";
			    } else if ($('.tabs .tab:eq(0) a').hasClass('active')) {
				    document.location.href="index.php";
			    } else {
				    document.location.href="forum.php";
			    }
	        }

		});
	    </script>
    </body>
</html>