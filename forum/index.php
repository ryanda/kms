<?php
	require "config.php";
	session_start();
	if(isset($_POST['action'])) {
		$_SESSION['user'] = $_POST['user'];	
      	header('location:forum.php');
	}
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
	        <nav class="green darken-4">
	            <div class="nav-wrapper container">
	                <a class="brand-logo">Dashboard</a>
	                <ul id="nav-mobile" class="right hide-on-med-and-down">
	                <!-- tanda aja -->
						<li><a><i class="mdi-action-home left"></i>Home</a></li>
						<li class="active"><a><i class="mdi-social-person left"></i>User</a></li>
						<li><a href="index.php">Logout</a></li>	
				    </ul>
	            </div>
	        </nav>
	    </header>
	    <!--    end header navbar-->

	    <!--    main content-->
	    <main style="margin-top:20px;">
	        <div class="container">
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

<!-- input user name -->
<div id="user" class="modal modal-fixed-footer" style="max-height: 250px; max-width: 400px">
	<form action="" method="post">
		<div class="modal-content">
			<h4>Silahkan Input Nama</h4><br>
			<div class="input-field">
	          	<input id="user" name="user" type="text" placeholder="Silahkan inputkan nama anda" class="validate">
	        </div>
		</div>
		<div class="modal-footer">
			<button class="btn waves-effect waves-light" type="submit" name="action">Masuk</i>
	  		</button>
		</div>
	</form>
</div>

        <script src="../asset/js/jquery.min.js"></script>
	    <script src="../asset/js/materialize.min.js"></script>
	    <script type="text/javascript">
	    	$(".dropdown-button").dropdown();
	    	$('.modal-trigger').leanModal();
	    	$('#user').openModal({
	    		dismissible: false,
	    		opacity: .9
	    	});
	    </script>
    </body>
</html>