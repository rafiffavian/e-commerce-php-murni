<?php 
	
	include 'konfigurasi/config.php';
	$Firstname = $_POST['firstname'];
	$Lastname = $_POST['lastname'];
	$Username = $_POST['user'];
	$Mobile = $_POST['nohp'];
	$Password = md5($_POST['password']);
	$Rpassword = md5($_POST['rpassword']);
	$Hak = $_POST['hak'];
	$Jeniskelamin = $_POST['radio'];

	if($Password == $Rpassword){

		$sql = "INSERT INTO `penjual`
									(`nama_penjual`,`username_penjual`,`password_penjual`,`hak_penjual`,`jenis_kelamin`)
							  VALUES('$Firstname','$Username','$Password','$Hak','$Jeniskelamin')";
		$dbh->query($sql);
		header('location:loginadmin.php');
	}
	else{
		header('location:registeradmin.php?d=gagal');
	}

 ?>