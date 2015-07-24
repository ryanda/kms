<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
require "includes/header_artikel_input.php";
require "includes/config.php";
?>

<main style="margin-top:30px;">
        <div class="container row">
                <form name="input_data" action="proses.php" method="post">
                        <div class="input-field col s12">
                                <input type="text" id="judul" name="judul" required>
                                <label for="judul">Judul Dokumen</label>
                        </div>
                        <div class="input-field col s12">
                                <textarea id="isi" name="isi" rows="9" cols="60" class="materialize-textarea" required></textarea>
                                <label for="isi">Isi Dokumen</label>
                        </div>
                        <button class="btn waves-effect waves-light" type="submit" name="proses">
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