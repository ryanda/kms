
<?php
	require "config.php";
	session_start();
	$user = $_SESSION['user'];	
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
						<li><a href="forum.php"><i class="mdi-action-home left"></i>Home</a></li>
						<li class="active"><a><i class="mdi-social-person left"></i><?php echo $user ?> [Kepala]</a></li>
						<li><a href="index.php">Logout</a></li>	
				    </ul>
	            </div>
	        </nav>
	    </header>
	    <!--    end header navbar-->

	    <!--    main content-->
	    <main style="margin-top:20px;">
	        <div class="container">
	            <div class="row">
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
								<a>oleh <?php echo $hasil['user']?>, <?php echo $hasil['jam']?><?php echo $hasil['tgl']?></a>
								<a href="tampil.php?id=<?php echo $hasil['id'] ?>">link</a>
								<a href="hapus.php?id=<?php echo $hasil['id'] ?>" class="red-text">hapus</a>
							</div>
						</div>
	                </div>
	<?php } ?>
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
	    </script>
    </body>
</html>