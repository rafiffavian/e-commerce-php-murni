<?php 

	include "config.php";
	$judul = $_POST['judul'];
	$kategori = $_POST['kategori'];
	$isi = $_POST['isi'];
	$gambar = $_POST['gambar'];
	$pencet = $_POST['proses'];
	$id = $_POST['id'];

	if($pencet== "tambah") {

		$sql = "INSERT INTO `artikel` (`id_kategori`, `judul`, `isi`, `gambar`, `tgl_upload`) 
							   VALUES ('$kategori', '$judul', '$isi', '$gambar', CURRENT_TIMESTAMP)";
		 $dbh->query($sql);
		// $perintah = $dbh->prepare($sql);
		// $perintah->execute();
	}
	else if($pencet == "ubah"){
		$sql = "UPDATE `artikel` 
					SET `id_kategori` = '$kategori', `judul` = '$judul', `isi` = '$isi', `gambar` = '$gambar' 
								WHERE `artikel`.`id_artikel` = $id";
		$dbh->query($sql);
	}
	else{
		$id = $_GET['id'];
		$sql = "DELETE FROM `artikel` 
					WHERE `artikel`.`id_artikel` = $id";
		$dbh->query($sql);			
	}

	header('location:artikel.php');//kodingan disamping untuk menyatakan setelah aksi mau dibawa kemana file nya.

 ?>