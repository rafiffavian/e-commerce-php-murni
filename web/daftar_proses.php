<?php 

	include "konfigurasi/config.php";
	$namaPembeli = $_POST['nama'];
	$usernamePembeli = $_POST['username'];
	$EmailPembeli = $_POST['email'];
	$passwordPembeli = md5($_POST['password']);
	$nohpPembeli = $_POST['no_hp'];
	$alamatPembeli = $_POST['alamat'];
	$pencet = $_POST['proses'];


	if($pencet == "daftar"){

		$sql = "INSERT INTO `pembeli`
					(`id_pembeli`,`nama`,`nohp_pembeli`,`email_pembeli`,`username_pembeli`,`password_pembeli`,`alamat_pembeli`)
				VALUES(NULL,'$namaPembeli','$nohpPembeli','$EmailPembeli','$usernamePembeli','$passwordPembeli','$alamatPembeli');";
		$dbh->query($sql);		
	}
	header('location:login.php');