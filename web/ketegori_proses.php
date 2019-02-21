<?php 
	include 'konfigurasi/config.php';
	$namaKategori = $_POST['kategori'];
	$pencet = strtolower($_POST['proses']);
	$id = $_POST['id'];

if($pencet == "tambah"){
	$sql = "INSERT INTO `kategori` (`nama_kategori`) VALUES('$namaKategori')";
	$dbh->query($sql);
}
else if($pencet == "edit"){
	$sql = "UPDATE `kategori` set `nama_kategori` = '$namaKategori' WHERE `id_kategori` = '$id'";
	$dbh->query($sql);
}
else{
	$id = $_GET['id'];
	$sql = "DELETE FROM `kategori` WHERE `id_kategori` = $id";
	$dbh->query($sql);
}
header('location:ketegori.php');
 ?>