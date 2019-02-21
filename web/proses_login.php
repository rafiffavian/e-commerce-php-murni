<?php 
	include 'konfigurasi/config.php';
	$user = $_POST['user'];
	$password = md5($_POST['pass']);

	$sql = "SELECT * FROM `pembeli` WHERE `username_pembeli` = '$user' and `password_pembeli` = '$password'";
	$perintah = $dbh->query($sql);
	$v = $perintah->fetch();

	if($user == $v['username_pembeli'] && $v['password_pembeli']){
		session_start();
		$_SESSION['id'] = $v['id_pembeli'];
		$_SESSION['nama'] = $v['nama_pembeli'];
		header('location:index.html');
	}
	else{
		header('location:login.php?v=gagal');
	}




 ?>