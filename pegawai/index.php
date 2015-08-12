<?php 
include 'config.php';
?>
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
	        main { flex: 1 0 auto }
	        .container{width:90%}            
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
						<li><a><i class="mdi-action-account-child left"></i>
							<?php echo (isset($_SESSION['nama_lengkap']) ? $_SESSION['nama_lengkap'] : 'anonym' )?>
						</a></li>
				        <li><a href="../logout.php"><i class="mdi-content-reply left"></i>Logout</a></li>
				    </ul>
	            </div> 
	        </nav>
	    </header>
	    <!--    end header navbar-->

	    <!--    main content-->
	    <main style="margin-top:20px;">
	        <div class="container">
	            <div class="row">
	                <div class="col s5 offset-s3">
	                	<h4>Selamat Datang <?php echo (isset($_SESSION['nama_lengkap']) ? $_SESSION['nama_lengkap'] : 'anonym' )?></h4>
						<p>Silahkan klik menu untuk lanjut</p>
						<a href="home.php" class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Click Me!">Menu</a>
	                </div>
	            </div>
	        </div>
			
			<!-- menu icon -->
		<!-- 	<div class="fixed-action-btn" style="bottom: 30%; right: 24px;">
				<a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">Hover me!</a>
			</div> -->

			<!-- menu icon -->

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
    		$('.tooltipped').tooltip({delay: 50});
  		});
	    
	    </script>
    </body>
</html>