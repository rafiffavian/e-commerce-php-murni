<?php 

	include 'konfigurasi/config.php';
	$FirstName = $_POST['firstname'];
	$LastName = $_POST['lastname'];
	$Email = $_POST['email'];
	$Nohp = $_POST['nohp'];
	$JenisKelamin = $_POST['radio'];
	$Password = md5($_POST['password']);
	$Rpassword = md5($_POST['rpassword']);


	// $sql = "SELECT * FROM `pembeli` WHERE `password_pembeli` = '$Password' AND `retype_password` = '$Rpassword'";
	// $perintah = $dbh->query($sql);
	// $v = $perintah->fetch();

	if($Password ==  $Rpassword){
		$sql = "INSERT INTO `pembeli`
						(`first_name`,`last_name`,`email_pembeli`,`password_pembeli`,`retype_password`,`no_hp`,`jenis_kelamin`)
				  VALUES('$FirstName','$LastName','$Email','$Password','$Rpassword','$Nohp','$JenisKelamin')";
	$dbh->query($sql);
		header('location:loginlah.php');
	}
	else{
		header('location:register.php?v=gagal');
	}

	
 ?>