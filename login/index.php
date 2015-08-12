<?php
  	session_start(); 
include "config.php";
if (isset($_POST['login'])) {
$username = $_POST['username'];
$password = $_POST['password'];

$query = mysql_query("Select * from user where username='$username' and password='$password'");
$cekdata = mysql_num_rows($query);
if ($cekdata == 1) {
    $data = mysql_fetch_array($query);
    echo 'dialihkan...'; 

	$_SESSION['id_user'] = $data['id_user'];
	$_SESSION['username'] = $data['username'];
	$_SESSION['nama_lengkap'] = $data['nama_lengkap'];
    $_SESSION['level'] = $data['level'];
        
    if ($data['level'] == "1") { ?> <!-- admin -->
		<script language="javascript">document.location.href="../admin/beranda/menu.php";</script>
	<?php } ?> 
	<?php if ($data['level'] == "2") { ?> <!-- pegawai -->
		<script language="javascript">document.location.href="../pegawai/index.php";</script>
	<?php } ?> 
	<?php  if ($data['level'] == "3") { ?> <!-- kepala -->
		<script language="javascript">document.location.href="../kepala/index.php";</script>
	<?php } 
	$_SESSION['error'] = 'Maaf tidak ditemukan user yang sesuai!';
	 } else { 
	$_SESSION['error'] = 'Username atau password anda salah!';
		} 
	} ?> 


<html>
    <head>
        <title>Login</title>
        <link rel="shortcut icon" type="image" href="../asset/imagelogo/logo.png">
	    <link href="../asset/css/materialize.min.css" rel="stylesheet">
	    <style type="text/css">
		    body {
	            display: flex;
	            min-height: 100vh;
	            flex-direction: column;
	        }
	        main {
	            flex: 1 0 auto;
	        }
        </style>
    </head>
    <body>
    	<!--    header navbar-->
	    <header>
	        <nav class="green darken-4">
	            <div class="nav-wrapper container">
	                <a class="brand-logo">Silahkan Login</a>
	            </div>
	        </nav>
	    </header>
	    <!--    end header navbar-->

	    <!--    main content-->
	    <main style="margin-top:40px;">
	        <div class="container">
	            <div class="row">
	                <div class="col s5 offset-s3">
	                <!-- tanda aja -->
	                	<form action="index.php" method="post" name="postform">
	                		<p>Username</p>
			                <input type="text" required name="username"/></br>
			                <p>Password</p>
			                <input type="password" required name="password" /></br>
			                <button class="btn waves-effect waves-light" type="submit" name="login">Login
						    	<i class="mdi-content-send right"></i>
						  	</button>
						  	<br>
						  	<br>
						  	<br>
						  	<?php if(isset($_SESSION['error'])) { 
						  		echo "
								<div class='card-panel red lighten-2 white-text'> 
									<span>".$_SESSION['error']." </span>  
								</div>";
						  		unset($_SESSION['error']); 
						  	} ?>
		                </form>
	                </div>
	            </div>
	        </div>
	    </main>
	    <!--    end main content-->

	    <!--    footer page-->
	    <footer class="page-footer green darken-4">
	        <div class="container">
                <h5 class="white-text">Knowledge Management System</h5>
		        <div class="footer-copyright">
		            © 2015 Copyright miftaamelia
		        </div>
	        </div>
	    </footer>
	    <!--    end footer page-->

        <script src="../asset/js/jquery.min.js"></script>
	    <script src="../asset/js/materialize.min.js"></script>
    </body>
</html>