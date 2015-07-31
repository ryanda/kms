<?php
  include ('config.php'); 
  session_start(); 
  $user = $_SESSION['user'];

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

?>
