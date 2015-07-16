<?php  

include "koneksi.php";

if (isset($_POST['login'])){
	$username=$_POST['username'];
	$password=$_POST['password'];

    $query = mysql_query("Select * from user where username='$username' and password='$password'");
	$cekdata = mysql_num_rows($query);
    if ($cekdata > 0) {
		$data = mysql_fetch_array($query);
		$level=$data['level'];
		echo $level;
		if ($level == "1")
			{
				?><script language="javascript">document.location.href="../admin/beranda/menu.php";</script><?php
			}
		else if ($level == "2")
			{
				?><script language="javascript">document.location.href="../pegawai/index.php";</script><?php
			}
		else{
				?><script language="javascript">document.location.href="../kepala/index.php";</script><?php
			}
    }else{
			header('Location:index.php?login=Maaf password atau username anda salah!');
	}    
					
}else{
	unset($_POST['login']);
}
?>

<html>
<head>
<title>Login Multi User</title>
<style>
.tengah{
	position: absolute;
	margin-top: -100px;
	margin-left: -200px;
	left: 50%;
	top: 50%;
	width: 400px;
	height: 220px;
	background-color:#009900;
}
</style>
</head>
<body>
<div align="center" class="tengah">
	<p align="center"><font face="verdana" size="4" color="gold">Silahkan Login</font></p>

<form action="index.php" method="post" name="postform">
		<font face="verdana" size="2" color="white">Username</br>
			<input type="text" name="username"/></br>
		Password</br>
			<input type="password"  name="password" /></br>
		<input type="submit" name="login" value="Login"/></font>
</form>
<p align="center"><font face="verdana" size="2" color="red"><?php  if(isset($_GET['login'])){ echo $_GET['login']; }?></font></p>
</div>
</body>
</html>