<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING) ^ E_DEPRECATED);

  session_start(); 
mysql_connect("localhost","root","");
mysql_select_db("kms");
?>