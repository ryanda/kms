<?php
require 'config.php';
//Including facebook php sdk file
$path = 'includes/';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
		<link rel="Shortcut Icon" href="../img/logo.png" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Le styles -->
        <link href="<?php echo $path; ?>bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo $path; ?>bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
        <script type="text/javascript" src="<?php echo $path; ?>js/jquery-1.7.2.js"></script>
        <script type="text/javascript" src="<?php echo $path; ?>bootstrap/js/bootstrap.js"></script>
        <style>
            body{margin: 0; padding: 0; margin-top: 40px;}
        </style>
      
    </head>
    <body>
      <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <ul class="nav">
                        <li class="active">
                            <a href="index.php"></a>
                        </li>
                        
						<ul class="nav nav-pills">
							<li class="dropdown" id="menu1">

                                <li class="dropdown">
								<a href="../../index.php">Home</a>
                                </li>

							</li>
							</ul>
					</ul>
					 
                    <ul class="nav pull-right">
							<li><a>Selamat Datang,  Kepala  Pinmas Kementerian Agama RI</a></li>
				    </ul>
                </div>
            </div>
        </div>
		<div class="container">
