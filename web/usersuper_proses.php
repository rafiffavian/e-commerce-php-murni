<?php 
	include 'konfigurasi/config.php';
	$namaUser = $_POST['namauser'];
	$usernameUser = $_POST['usernameuser'];
	$jenisKelamin = $_POST['jeniskelamin'];
	$pencet = strtolower($_POST['proses']);
	$id = $_POST['id'];

	if($pencet == "tambah"){
		$sql = "INSERT INTO `penjual`
								(`nama_penjual`,`username_penjual`,`hak_penjual`,`jenis_kelamin`)
						  VALUES('$namaUser','$usernameUser','admin','$jenisKelamin')";
		$dbh->query($sql);
	}
	else if($pencet == "edit"){
		$sql = "UPDATE `penjual` SET `nama_penjual` = '$namaUser', `username_penjual` = '$usernameUser',`jenis_kelamin` = '$jenisKelamin'  WHERE `id_penjual` = '$id'";
		$dbh->query($sql);
	}
	else{
		$id = $_GET['id'];
		$sql = "DELETE FROM `penjual` WHERE `penjual`.`id_penjual` = '$id'";
		$dbh->query($sql);
	}
	header('location:usersuper.php');
 ?>