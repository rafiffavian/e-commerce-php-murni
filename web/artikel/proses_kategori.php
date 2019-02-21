<?php 
	include "config.php";
	$kategori = $_POST['nama'];
	$pencet = $_POST['proses'];
	$id = $_POST['id_kat'];

	if($pencet == "tambah"){

	$sql = "INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES (NULL, '$kategori')";
	$dbh->query($sql);

	}

	else if($pencet == "edit"){
		$sql = "UPDATE `kategori`  
					SET	`nama_kategori` = '$kategori'
						WHERE `kategori`.`id_kategori` = $id";
		$dbh->query($sql);			
	}
	else{
		$id = $_GET['id'];
		$sql = "DELETE FROM `kategori` WHERE `kategori`.`id_kategori` = $id";
		$dbh->query($sql);
	}

	header('location:kategori.php');

 ?>