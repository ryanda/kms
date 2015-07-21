<?php
require "includes/header_mu.php";
require "includes/config.php";
?>

<body>
	<main style="margin-top:30px; margin-bottom:30px;">	
	<div class="container">
	<table class="hoverable centered responsive-table">
	<thead>
		<tr>
  		<th>No</th>
  		<th>Menu Utama</th>
  		<th>Link</th>
	  	<th>Aksi</th>
		</tr>
	</thead>

<?php
$q=mysql_query("SELECT * FROM menu_utama");
$no=1;
while($r=mysql_fetch_array($q)){
?>

<tbody>
<tr>
<td><?php echo $no; ?></td>
<td><?php echo $r['nama_menu']; ?></td>
<td><?php echo $r['link']; ?></td>
<td><a id="edit" href="edit.php?id_menu=<?php echo $r['id_menu'] ?>">Ubah</a></td>
</tr>
</tbody>

<?php
$no++;
}
?>

</table>
</br>
</br>

<div class="row">
      <div class="col s12 m5">
        <div class="card-panel green">
          <span class="white-text">
          <?php echo "Data pada Menu Utama tidak dapat dihapus, tetapi dapat di non-aktifkan melalui ubah menu utama";?>
          </span>
        </div>
      </div>
    </div>


			</div>
		</div>
	</main>
</body>	


