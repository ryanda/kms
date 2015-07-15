<?php

// Sebelumnya
// error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

// Setelahnya
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING) ^ E_DEPRECATED);

mysql_connect("localhost","root","");
mysql_select_db("db_lw");
?>