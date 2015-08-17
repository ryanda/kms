<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
require "includes/config.php";
$query=mysql_query("select * from user");
require "includes/header_user_input.php";
?>

<style type="text/css">
  .btn { z-index:0; }
</style>

<main style="margin-top:30px; margin-bottom: 30px;">
    <form action="proses.php" method="post"> 
        <div class="container row">

            <div class="input-field col s6">
              <input name="username" id="username" required type="text" class="validate">
              <label for="username">Username</label>
            </div>

            <div class="input-field col s6">
              <input name="password" id="password" required type="password">
              <label for="password">Password</label>
            </div>

            <div class="input-field col s4">
                <select name="level" id="level" required class="validate">
                  <option value="" disabled selected>Pilihan</option>
                  <option value="1">admin</option>
                  <option value="2">pegawai</option>
                  <option value="3">kepala</option>
                </select>
                <label>Level</label>
            </div>

            <div class="input-field col s8">
                <select name="divisi" id="divisi" required class="validate">
                  <option value="" disabled selected>Pilihan</option>
                  <option value="1">Kepala Pusat Informasi & Hubungan Masyarakat RI </option>
                  <option value="2">Subbagian Tata Usaha</option>
                  <option value="3">Kelompok Jabatan Fungsional</option>
                  <option value="4">Subbidang Data Keagamaan</option>
                  <option value="5">Subbidang Data Pendidikan</option>
                  <option value="6">Subbidang Pengembangan Teknologi Informasi dan Komunikasi</option>
                  <option value="7">Subbidang Media Informasi Elektronik</option>
                  <option value="8">Subbidang Hubungan Kelembagaan</option>
                  <option value="9">Subbidang Layanan Informasi Publik</option>
                </select>
                <label>Divisi</label>
            </div>

            <div class="input-field col s6">
              <input name="nama_lengkap" id="nama_lengkap" required type="text" class="validate">
              <label for="nama_lengkap">Nama Lengkap</label>
            </div>


            <div class="input-field col s4">
              <input name="email" id="email" required type="email" class="validate">
              <label for="email">Email</label>
            </div>

            <div class="input-field col s2">
              <input name="no_telp" id="no_telp" required type="text" class="validate">
              <label for="no_telp">No Telp</label>
            </div>

            <button class="btn waves-effect waves-light" type="submit" name="proses">Proses
                <i class="mdi-content-send right"></i>
            </button>
            <a class="waves-effect waves-light btn red" href="tampil.php">
              <i class="mdi-hardware-keyboard-backspace left"></i>Kembali
            </a>
        </div>
    </form> 
</main> 

<script type="text/javascript">
$(document).ready(function() {
    $('select').material_select();
  });
</script>   

</body>
</html>