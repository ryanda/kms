<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
require "includes/config.php";
$query=mysql_query("select * from user");
require "includes/header_user_input.php";
?>



<main style="margin-top:30px; margin-bottom: 30px;">
    <form action="proses.php" method="post"> 
        <div class="container row">

            <div class="input-field col s4">
              <input name="username" id="username" required type="text" class="validate">
              <label for="username">Username</label>
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

            <div class="input-field col s4">
              <input name="password" id="password" required type="password">
              <label for="password">Password</label>
            </div>

            <div class="input-field col s6">
              <input name="nama_lengkap" id="nama_lengkap" required type="text" class="validate">
              <label for="nama_lengkap">Nama Lengkap</label>
            </div>


            <div class="input-field col s4">
              <input name="email" id="email" required type="text" class="validate">
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