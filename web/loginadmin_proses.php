<?php 
	include 'konfigurasi/config.php';
	$username = $_POST['user'];
	$password =md5($_POST['password']);
	$sql = "SELECT * FROM `penjual` WHERE `username_penjual` = '$username' AND `password_penjual` = '$password'";

	$v = $dbh->query($sql)->fetch();

	if($username == $v['username_penjual'] && $password == $v['password_penjual']){
		if($v['hak_penjual'] == 'super admin'){
			session_start();
			$_SESSION['idadmin'] = $v['id_penjual'];
			$_SESSION['namaadmin'] = $v['nama_penjual'];
			header('location:usersuper.php');	
		}
		else {
			session_start();
			$_SESSION['idadmin'] = $v['id_penjual'];
			$_SESSION['namaadmin'] = $v['nama_penjual'];
			header('location:adminkita.php');		
		}
		
	}	
	else{
		header('location:loginadmin.php?x=gagal');
	}

 ?>