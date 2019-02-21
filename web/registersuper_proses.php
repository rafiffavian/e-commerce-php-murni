<?php 

	include 'konfigurasi/config.php';
	$firstName = $_POST['firstname'];
	$lastName = $_POST['lastname'];
	$userName = $_POST['user'];
	$mobile = $_POST['nohp'];
	$jenisKelamin = $_POST['radio'];
	$password = md5($_POST['password']);
	$rpassword = md5($_POST['rpassword']);
	$hak = $_POST['hak'];

	if($password == $rpassword){

		$sql = "INSERT INTO `penjual`
							(`nama_penjual`,`username_penjual`,`password_penjual`,`hak_penjual`,`jenis_kelamin`)
						VALUES('$firstName','$userName','$password','$hak','$jenisKelamin')";
		$dbh->query($sql);

	}
	else{
		header('location:registersuper.php?s=salah');
	}





 ?>