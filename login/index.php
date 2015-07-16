<?php
include "koneksi.php";
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = mysql_query("Select * from user where username='$username' and password='$password'");
    $cekdata = mysql_num_rows($query);
    if ($cekdata > 0) {
        $data = mysql_fetch_array($query);
        $level = $data['level'];
        echo $level;
        if ($level == "1") {
?><script language="javascript">document.location.href="../admin/beranda/menu.php";</script><?php
}
else if ($level == "2") {
?><script language="javascript">document.location.href="../pegawai/index.php";</script><?php
}
else {
?><script language="javascript">document.location.href="../kepala/index.php";</script><?php
}
}
else {
header('Location:index.php?login=Maaf password atau username anda salah!');
}
}
else {
unset($_POST['login']);
}
?>

<html>
    <head>
        <title>Login</title>
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
			                <input type="text" name="username"/></br>
			                <p>Password</p>
			                <input type="password"  name="password" /></br>
			                <button class="btn waves-effect waves-light" type="submit" name="login">Login
						    	<i class="mdi-content-send right"></i>
						  	</button>
							</br>
							</br>
			                <?php
				            if (isset($_GET['login'])) {
				                echo $_GET['login'];
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
	            <div class="row">
	                <div class="col l6 s12">
	                    <h5 class="white-text">Knowledge Management System</h5>
	                    <!-- <p class="grey-text text-lighten-4">Lorem ipsum Reprehenderit reprehenderit in esse est amet aliquip cillum culpa reprehenderit ut ea Duis dolore nisi consectetur magna magna deserunt dolor adipisicing ut dolore deserunt Ut adipisicing pariatur eu.</p> -->
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

        <script src="../asset/js/jquery.min.js"></script>
	    <script src="../asset/js/materialize.min.js"></script>
    </body>
</html>