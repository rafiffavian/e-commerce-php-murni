<?php 

	include 'konfigurasi/config.php';
	$email = $_POST['email'];
	$Password = md5($_POST['password']);

	$sql = "SELECT * FROM `pembeli` WHERE `email_pembeli` = '$email' AND `password_pembeli` = '$Password'";
	$perintah = $dbh->query($sql);
	$v = $perintah->fetch();

	if($email == $v['email_pembeli'] && $Password == $v['password_pembeli']){
		session_start();
		$_SESSION['ide'] = $v['id_pembeli'];
		$_SESSION['namae'] = $v['first_name'];
		header('location:beli.php');
	}
	else{
		header('location:loginlah.php?i=gagal');
	}

 ?>