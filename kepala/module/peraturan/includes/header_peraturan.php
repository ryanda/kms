<?php
require 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
		<link rel="shortcut icon" type="image" href="../../../asset/imagelogo/logo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Le styles -->
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
                    <a class="brand-logo">Peraturan</a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="../../index.php"><i class="mdi-action-home left"></i>Home</a></li>
                        <li><i class="mdi-action-account-child left"></i>
                        <?php echo (isset($_SESSION['nama_lengkap']) ? $_SESSION['nama_lengkap'] : 'anonym' )?>
                        </li>
                        <li><a href="../../../logout.php"><i class="mdi-content-reply left"></i>Logout</a></li>
                    </ul>   
                </div>
            </nav>
        </header>
        <!-- end header navbar -->
        <main style="margin-top:30px;">
            <div class="container">
        <script src="../../../asset/js/jquery.min.js"></script>
        <script src="../../../asset/js/materialize.min.js"></script>