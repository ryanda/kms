<?php
header('content-type: application/json; charset=utf-8');
include('api.php');
$db = new Database();
$db->connect();
if(!isset($_GET["id"])) $db->select('forum'); 
else $db->select('forum','*',null,"id=".$_GET['id']); 
$res = $db->getResult();
echo json_encode($res);

