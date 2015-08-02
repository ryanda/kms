<?php
include('api.php');
header("Content-type: application/json");

$tgl = date('Y-m-d');
$jam = date('H:i:s');
$db = new Database();
$db->connect();

$json = json_decode(file_get_contents('php://input'));
$isi = $json->{'isi'};
$judul = $json->{'judul'};
$nama = $json->{'nama'};

$db->insert('forum',array(
	'judul'=> $judul,
	'isi'=> $isi,
	'user' => $nama,
	'tgl' => $tgl,
	'jam' => $jam 
));

$result = [
	'judul' => $judul, 
	'status' => 200
];

echo json_encode($result);
