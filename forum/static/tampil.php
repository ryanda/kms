<?php 
session_start(); 
$user = $_SESSION['user']; 
?>
<html>
  <head>
      <title>KMS Pinmas Kementerian Agama</title>
      <link rel="shortcut icon" type="image" href="../../asset/imagelogo/logo.png">
    <link href="../../asset/css/materialize.min.css" rel="stylesheet">
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
          <li class="active"><a><i class="mdi-social-person left"></i><?php echo $user; ?></a></li>
          <li><a href="index.php">Logout</a></li> 
          </ul>
            </div>
        </nav>
    </header>
    <!--    end header navbar-->

<?php 
require"config.php";

$id= ($_GET['id']);
$query = "SELECT * FROM forum INNER JOIN forum2 ON forum.id = forum2.forum_id WHERE forum.id='$id' Order BY forum2.user, forum2.komentar";
$q = "SELECT * FROM forum WHERE id='$id'";
$sql = mysql_query ($q);
$hasil = mysql_fetch_array ($sql);
?>
    <main style="margin-top:30px;" class="container">
  		<div class="card-panel teal darken-3 row">

        <div class="card-panel teal lighten-2 white-text col s9 offset-s1">
          <h4><?php echo $hasil['judul']?></h4>
          <h5><?php echo $hasil['isi']?></h5>
          <p><?php echo $hasil['user']?> | <?php echo $hasil['jam']?>, <?php echo $hasil['tgl']?></p>
        </div>

  <?php
    $q2 = "SELECT * from forum2 WHERE forum_id='$id'";
    $sql = mysql_query ($q2);
    while ($hasil2 = mysql_fetch_array ($sql)) {
  ?>

        <div class="card-panel red lighten-1 col s6 offset-s2 white-text">
          <div class="container" style="margin-top: 20px">
            <h5><?php echo $hasil2['komentar']?></h5>
            <p><?php echo $hasil2['user']?> | <?php echo $hasil2['jam']?>, <?php echo $hasil2['tgl']?></p>
          </div>
        </div>

  <?php } ?>

        <div class="card-panel lighten-2 col s6 offset-s2">
        <form action="simpan.php" method="post">
          <input type="hidden" id="forum_id" name="forum_id" value="<?php echo $hasil['id'];?>">
          <div class="container" style="margin-top: 20px">
              <input type="text" id="komentar" name="komentar" required placeholder="Ketik Komentar Anda, Enter untuk kirim...">
          </div>
        </form>
        </div>

      </div>
    </main>

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


    <script src="../../asset/js/jquery.min.js"></script>
    <script src="../../asset/js/materialize.min.js"></script>
    <script type="text/javascript">
      $(".dropdown-button").dropdown();
      $('.modal-trigger').leanModal();
    </script>
  </body>

</html>