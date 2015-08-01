<?php
header('content-type: application/json; charset=utf-8');
include('api.php');
$db = new Database();
$db->connect();
if(!isset($_GET["id"])) $db->select('forum','id,judul,isi,user,tgl,jam'); 
else $db->select('forum','id,judul,isi,user,tgl,jam'); 
$res = $db->getResult();
echo json_encode($res);

