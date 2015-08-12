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
        
        <!-- start header navbar -->
        <header> 
            <nav class="green darken-4">
                <div class="nav-wrapper container">
                    <a class="brand-logo">Dokumen Pengetahuan</a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                    
                        <li><a href="../../index.php"><i class="mdi-action-home left"></i>Home</a></li>
                        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">
                            <i class="mdi-navigation-arrow-drop-down right"></i>
                            <i class="mdi-action-dashboard left"></i>Post</a></li>
                        <li><i class="mdi-action-account-child left"></i>
                        <?php echo (isset($_SESSION['nama_lengkap']) ? $_SESSION['nama_lengkap'] : 'anonym' )?>
                        </li>
                        <li><a href="../../../logout.php"><i class="mdi-content-reply left"></i>Logout</a></li>                         
                        
                         
                    </ul>   
                </div>

                <ul id="dropdown1" class="dropdown-content">
                    <li><a href="../dokumen/input.php">Input</a></li>
                    <li><a href="../dokumen/upload.php">Upload</a></li>
                </ul>

            </nav>
        </header>
        <!-- end header navbar -->

        <script src="../../../asset/js/jquery.min.js"></script>
        <script src="../../../asset/js/materialize.min.js"></script>
    
    </body>
