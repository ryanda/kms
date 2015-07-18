<?php
$query=mysql_query("select * from pegawai_pinmas");
require "includes/header_user_input.php";
require "includes/config.php";
?>

<main style="margin-top:30px; margin-bottom: 30px;">
    <form action="proses.php" method="post"> 
        <div class="container row">

            <div class="input-field col s4">
              <input name="nip" id="nip" required="" type="text" class="validate">
              <label for="nip">NIP</label>
            </div>

            <div class="input-field col s8">
              <input name="nama_lengkap" id="nama_lengkap" required="" type="text" class="validate">
              <label for="nama_lengkap">Nama Lengkap</label>
            </div>

            <div class="input-field col s4">
              <input name="jabatan" id="jabatan" type="text" class="validate">
              <label for="jabatan">Jabatan</label>
            </div>

            <div class="input-field col s4">
              <input name="golongan" id="golongan" required="" type="text" class="validate">
              <label for="golongan">Golongan</label>
            </div>

            <div class="input-field col s4">
                <select name="jenis_kelamin" id="jenis_kelamin" required="" class="validate">
                  <option value="" disabled selected>Pilihan</option>
                  <option value="L">L</option>
                  <option value="P">P</option>
                </select>
                <label>Jenis Kelamin</label>
            </div>

            <div class="input-field col s6">
              <input type="text" class="validate" name="tempat_lahir" id="tempat_lahir">
              <label for="tempat_lahir">Tempat Lahir</label>
            </div>
            
            <div class="input-field col s6">
              <input type="date" name="tgl_lahir" id="tgl_lahir" required="">
            </div>

            <div class="input-field col s12">
              <input type="text" name="alamat" id="alamat" required="">
              <label for="alamat">Alamat</label>
            </div>

            <div class="input-field col s6">
              <input type="text" name="no_telp" id="no_telp">
              <label for="no_telp">No. Telepon</label>
            </div>

            <div class="input-field col s6">
              <input type="text" name="email" id="email">
              <label for="email">Email</label>
            </div>

            <button class="btn waves-effect waves-light" type="submit" name="proses">Proses
                <i class="mdi-content-send right"></i>
            </button>
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
