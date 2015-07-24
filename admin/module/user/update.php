<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING) ^ E_DEPRECATED);
require "includes/config.php";
$query=mysql_query("select * from user");
require "includes/header_user_input.php";
$id_user=$_GET['id_user'];
$query=mysql_query("select * from user where id_user='$id_user'");
?>

<main style="margin-top:30px; margin-bottom: 30px;">
    <form action="simpan.php" method="post"> 
        <div class="container row">
<?php
    while($row=mysql_fetch_array($query)){
?>
            <div class="input-field col s4">
              <input id="username" type="text" name="username" value="<?php echo $row['username'];?>" readonly="readonly" disabled="disabled">
              <label for="username">Username</label>
            </div>

            <div class="input-field col s4">
                <select name="level" id="level">
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

            <div class="input-field col s4">
              <input type="password" name="password" value="" required="" id="password">
              <label for="password">Password</label>
            </div>

            <div class="input-field col s6">
              <input type="text" id="nama_lengkap" name="nama_lengkap" value="<?php echo $row['nama_lengkap'];?>">
              <label for="nama_lengkap">Nama Lengkap</label>
            </div>


            <div class="input-field col s4">
              <input name="email" id="email" type="text" value="<?php echo $row['email'];?>">
              <label for="email">Email</label>
            </div>

            <div class="input-field col s2">
              <input name="no_telp" id="no_telp" type="text"  value="<?php echo $row['no_telp'];?>">
              <label for="no_telp">No Telp</label>
            </div>

            <button class="btn waves-effect waves-light" type="submit" name="proses">Proses
                <i class="mdi-content-send right"></i>
            </button>
            <a class="waves-effect waves-light btn red" href="tampil.php">
              <i class="mdi-hardware-keyboard-backspace left"></i>Kembali
            </a>
        </div>
<?php
    }
?>
    </form> 
</main> 

<script type="text/javascript">
$(document).ready(function() {
    $('select').material_select();
  });
</script>   

</body>
</html>