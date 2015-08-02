<?php
include('api.php');
header("Content-type: application/json");

$tgl = date('Y-m-d');
$jam = date('H:i:s');
$db = new Database();
$db->connect();

$json = json_decode(file_get_contents('php://input'));
$komen = $json->{'komen'};
$id = $json->{'id'};
$nama = $json->{'nama'};

$db->insert('forum2',array(
	'forum_id'=> $id,
	'komentar'=> $komen,
	'user' => $nama,
	'tgl' => $tgl,
	'jam' => $jam 
));

$result = [
	'komentar' => $komen, 
	'status' => 200
];

echo json_encode($result);
