<?php
  include ('config.php'); 
  session_start(); 
  $user = $_SESSION['user'];

  if(isset($_POST['submit'])) {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $tgl = date('Y-m-d');
    $jam = date('H:i:s');

    $query = "INSERT INTO forum(id, judul, isi, user, tgl, jam) VALUE('', '$judul', '$isi', '$user', '$tgl', '$jam')";
    $sql = mysql_query ($query);

    if ($sql) {
      header('location:forum.php');
      echo $query;
    }
    else { 
      error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
      echo "gagal buat thread";
    }

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
          <li><a href="forum.php"><i class="mdi-action-home left"></i>Home</a></li>
          <li class="active"><a><i class="mdi-social-person left"></i><?php echo $user; ?></a></li>
          <li><a href="index.php">Logout</a></li> 
          </ul>
            </div>
        </nav>
    </header>
    <!--    end header navbar-->

    <main style="margin-top:30px;" class="container">

<form action="" method="post">
  <div class="row">
    <div class="input-field col s8 offset-s2">
      <input id="judul" name="judul" type="text" class="validate">
      <label for="judul">Judul Thread</label>
    </div>
    <div class="input-field col s8 offset-s2">
      <input id="isi" name="isi" type="tel" class="validate">
      <label for="isi">Isi Thread</label>
    </div>
    <div class="col s8 offset-s2"> <br>
      <button class="btn waves-effect waves-light" type="submit" name="submit">Submit
        <i class="mdi-content-send right"></i>
      </button>
    </div>
  </div>
</form>

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


    <script src="../asset/js/jquery.min.js"></script>
    <script src="../asset/js/materialize.min.js"></script>
    <script type="text/javascript">
      $(".dropdown-button").dropdown();
      $('.modal-trigger').leanModal();
    </script>
  </body>
</html>