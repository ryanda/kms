<?php
require 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
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

      <!-- <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                  <ul class="nav">
                        <li class="active">
                            <a href="index.php"></a>
                        </li>
						<ul class="nav nav-pills">
							<li class="dropdown" id="menu1">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#menu1">
									Posts
									<b class="caret"></b>
								</a>
								<ul class="dropdown-menu">
									<li><a href="tampil.php">View</a></li>
									
						        </ul>
                                
							<li class="dropdown">
								<a href="../../beranda/menu.php">Home</a>
                                </li>
						  </li>
							</ul>
					</ul>
					 
                    <ul class="nav pull-right">
							<li><a>Selamat Datang, Admin</a></li>
				    </ul>
                </div>
            </div>
        </div> -->

         <!-- start header navbar -->
        <header> 
            <nav class="green darken-4">
                <div class="nav-wrapper container">
                    <a class="brand-logo">Dokumen Pengetahuan</a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                    
                        <li><a href="../../beranda/menu.php"><i class="mdi-action-home left"></i>Home</a></li>
                        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">
                            <i class="mdi-navigation-arrow-drop-down right"></i>
                            <i class="mdi-action-dashboard left"></i>Post</a></li>
                        <li><i class="mdi-action-account-child left"></i>Admin</li>
                         
                    </ul>   
                </div>

                <ul id="dropdown1" class="dropdown-content">
                    <li><a href="tampil.php">View</a></li>
                </ul>

            </nav>
        </header>
        <!-- end header navbar -->

        <script src="../../../asset/js/jquery.min.js"></script>
        <script src="../../../asset/js/materialize.min.js"></script>
		
    </body>