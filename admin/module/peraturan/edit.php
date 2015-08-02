<?php 
//panggil file config.php untuk menghubung ke server
require"includes/header_peraturan_input.php";
require"includes/config.php";

$id= ($_GET['id']);
$query = "SELECT * from peraturan_input  WHERE id='$id'";
$sql = mysql_query ($query);
$hasil = mysql_fetch_array ($sql);
?>
    <main style="margin-top:30px;">
		<div class="container row">
			<form action="update.php" method="POST" name="input" >
        <div class="input-field col s12">
          <input type="hidden" name="id" value="<?php echo $hasil['id'];?>">
          <input type="text" id="judul" name="judul" value="<?php echo $hasil['judul'];?>">
          <label for="judul">Judul Peraturan</label>
        </div>
        <div class="input-field col s12">
          <textarea id="isi" name="isi" rows="9" cols="60" class="materialize-textarea"><?php echo $hasil['isi'];?></textarea>
          <label for="isi">Isi Peraturan</label>
        </div>
        <button class="btn waves-effect waves-light" type="submit" name="update">
          Submit <i class="mdi-content-send right"></i>
        </button>
        <a class="waves-effect waves-light btn red" href="tampil.php">
          <i class="mdi-hardware-keyboard-backspace left"></i>Kembali
        </a>
			</form>
		</div>
    </main>
</body>
</html>