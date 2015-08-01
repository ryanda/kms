<?php
header('content-type: application/json; charset=utf-8');
include('api.php');
$db = new Database();
$db->connect();
	
	if(isset($_GET["komen"])) $db->select('forum2', '*', null, 'forum_id='.$_GET['komen']); 
	if(isset($_GET["id"])) $db->select('forum','*',null,"id=".$_GET['id']); 
	if(empty($_GET)) $db->select('forum'); 

$res = $db->getResult();
echo json_encode($res);

