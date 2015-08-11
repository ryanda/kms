<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING) ^ E_DEPRECATED);
require "includes/header_user_input.php";
require "includes/config.php";
$query = mysql_query("select * from pegawai_pinmas");
?>

<main style="margin-top:30px;">
<div class="container row">

<?php
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    include "config.php";
    $nip=$_GET['nip'];
    $query=mysql_query("select * from pegawai_pinmas where nip='$nip'");
?>
    <form action="simpan.php" method="post">
<?php
    while($row=mysql_fetch_array($query)){
?>
        
        
        <div class="input-field col s4">
          <input type="text" id="nip" name="nip" value="<?php echo $row['nip'];?>" required>
          <label for="nip">NIP</label>
        </div>

        <div class="input-field col s8">
          <input  type="text" name="nama_lengkap" value="<?php echo $row['nama_lengkap'];?>" required>
          <label for="nama_lengkap">Nama Lengkap</label>
        </div>

        <div class="input-field col s4">
          <input type="text" name="jabatan" value="<?php echo $row['jabatan'];?>" required>
          <label for="jabatan">Jabatan</label>
        </div>

        <div class="input-field col s4">
          <input type="text" name="golongan" value="<?php echo $row['golongan'];?>" required>
          <label for="golongan">Golongan</label>
        </div>

        <div class="input-field col s4">
            <select name="jenis_kelamin" required>
              <option value="L"
                    <?php if($row['jenis_kelamin'] == 'L') echo 'selected = "selected"' ?>
              >L</option>
              <option value="P"
                    <?php if($row['jenis_kelamin'] == 'P') echo 'selected = "selected"' ?>
              >P</option>
            </select>
            <label>Jenis Kelamin</label>
        </div>

        <div class="input-field col s6">
          <input type="text" name="tempat_lahir" value="<?php echo $row['tempat_lahir'];?>" required>
          <label for="tempat_lahir">Tempat Lahir</label>
        </div>
        
        <div class="input-field col s6">
          <input type="date" name="tgl_lahir" id="tgl_lahir" value="<?php echo $row['tgl_lahir'];?>" required>
        </div>

        <div class="input-field col s12">
          <input type="text" name="alamat" id="alamat" value="<?php echo $row['alamat'];?>" required>
          <label for="alamat">Alamat</label>
        </div>

        <div class="input-field col s6">
          <input type="text" name="no_telp" value="<?php echo $row['no_telp'];?>" required>
          <label for="no_telp">No. Telepon</label>
        </div>

        <div class="input-field col s6">
          <input type="email" name="email" value="<?php echo $row['email'];?>" required>
          <label for="email">Email</label>
        </div>
<?php
    }
?>

        <button class="btn waves-effect waves-light" type="submit" name="simpan">Submit
            <i class="mdi-content-send right"></i>
        </button>
        <a class="waves-effect waves-light btn red" href="tampil.php">
          <i class="mdi-hardware-keyboard-backspace left"></i>Kembali
        </a>
    </form>

</div>
</main>

<script type="text/javascript">
$(document).ready(function() {
    $('select').material_select();
  });
</script>   
</body>  
                    
</html>