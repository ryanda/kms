<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING) ^ E_DEPRECATED);
require "includes/header_user_input.php";
require "includes/config.php";
$query=mysql_query("select * from user");
?>

<main style="margin-top:30px; margin-bottom: 30px;">
<div class="container row">

<?php
  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
  include "config.php";
  $id_user=$_GET['id_user'];
  $query=mysql_query("select * from user where id_user='$id_user'");
?>
  
    <form action="simpan.php" method="post"> 
        
<?php
    while($row=mysql_fetch_array($query)){ 
      $a = $row['divisi'];
?>
          <div class="input-field col s3">
            <input type="text" id="id_user" name="id_user" readonly="readonly" value="<?php echo $row['id_user'];?>" required>
            <label for="id_user">Id_User</label>
          </div>

          <div class="input-field col s4">
            <input id="username" type="text" name="username" value="<?php echo $row['username'];?>" required>
            <label for="username">Username</label>
          </div>

          <div class="input-field col s5">
            <input type="password" name="password" value="" required id="password">
            <label for="password">Password</label>
          </div>

          <div class="input-field col s4">
              <select name="level" id="level" required>
                <option value="1"
<?php if($row['level'] == '1') echo 'selected = "selected"' ?>
                >admin</option>
                <option value="2"
<?php if($row['level'] == '2') echo 'selected = "selected"' ?>
                >pegawai</option>
                <option value="3"
<?php if($row['level'] == '3') echo 'selected = "selected"' ?>
                >kepala</option>
              </select>
              <label>Level</label>
          </div>

            <div class="input-field col s8">
                <select name="divisi" id="divisi" required>
                  <option value="1" <?php if($a == 1) echo "selected"; ?> >Kepala Pusat Informasi & Hubungan Masyarakat RI </option>
                  <option value="2" <?php if($a == 2) echo "selected"; ?> >Subbagian Tata Usaha</option>
                  <option value="3" <?php if($a == 3) echo "selected"; ?> >Kelompok Jabatan Fungsional</option>
                  <option value="4" <?php if($a == 4) echo "selected"; ?> >Subbidang Data Keagamaan</option>
                  <option value="5" <?php if($a == 5) echo "selected"; ?> >Subbidang Data Pendidikan</option>
                  <option value="6" <?php if($a == 6) echo "selected"; ?> >Subbidang Pengembangan Teknologi Informasi dan Komunikasi</option>
                  <option value="7" <?php if($a == 7) echo "selected"; ?> >Subbidang Media Informasi Elektronik</option>
                  <option value="8" <?php if($a == 8) echo "selected"; ?> >Subbidang Hubungan Kelembagaan</option>
                  <option value="9" <?php if($a == 9) echo "selected"; ?> >Subbidang Layanan Informasi Publik</option>
                </select>
                <label>Divisi</label>
            </div>

            <div class="input-field col s6">
              <input type="text" id="nama_lengkap" name="nama_lengkap" value="<?php echo $row['nama_lengkap'];?>" required>
              <label for="nama_lengkap">Nama Lengkap</label>
            </div>


            <div class="input-field col s4">
              <input name="email" id="email" type="email" value="<?php echo $row['email'];?>" required>
              <label for="email">Email</label>
            </div>

            <div class="input-field col s2">
              <input name="no_telp" id="no_telp" type="text"  value="<?php echo $row['no_telp'];?>" required>
              <label for="no_telp">No Telp</label>
            </div>

          
<?php
    }
?>
      <button class="btn waves-effect waves-light" type="submit" name="proses">Proses
                <i class="mdi-content-send right"></i>
            </button>
            <a class="waves-effect waves-light btn red" href="tampil.php">
              <i class="mdi-hardware-keyboard-backspace left"></i>Kembali
            </a>
        
    </form> 
</main> 

<script type="text/javascript">
$(document).ready(function() {
    $('select').material_select();
  });
</script>   

</body>
</html>