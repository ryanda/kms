<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
require "includes/header_peraturan_input.php";
require "includes/config.php";
?>

    <main style="margin-top:30px;">
        <div class="container row">
          <div class="col m4 offset-m4">
            <form enctype="multipart/form-data" method="post">

              <div class="file-field input-field">
                <input class="file-path validate" type="text"/>
                <div class="btn">
                  <span>File</span>
                  <input type="file" required="" name="berkas"/>
                </div>
              </div>
              <div class="input-field">
                <textarea id="judul_peraturan" name="judul_peraturan" class="materialize-textarea"></textarea>
                <label for="judul_peraturan">Judul Peraturan</label>
              </div>
              <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                <i class="mdi-content-send right"></i>
              </button>
              <a class="waves-effect waves-light btn red" href="tampil.php">
                <i class="mdi-hardware-keyboard-backspace left"></i>Kembali
              </a>

            </form>
          </div>
        </div>
    </main>
  </body>
</html>

<?php
include "../includes/config.php";
 
if ($_POST)
{
  $filedata = addslashes(fread(fopen($_FILES['berkas']['tmp_name'], 'r'),
  $_FILES['berkas']['size']));
  $tipe  = $_FILES['berkas']['type'];
  $ukuran = $_FILES['berkas']['size'];
  $nama_file = $_FILES['berkas']['name'];
  $judul_peraturan = $_POST['judul_peraturan'];

  $result = mysql_query ("insert into peraturan values ('','$judul_peraturan','$tipe','$filedata','$nama_file',$ukuran)") 
                          or die(mysql_error());
 
  if ($result){
    ?><script language="javascript">document.location.href="tampil.php";</script><?php
  }else{
    echo mysql_error();
  }
  
}
?>
