<?php 
	include 'konfigurasi/config.php';
	$idbarang = $_POST['idbarang'];
	$idpembeli = $_POST['idpembeli'];
	$qtybarang = $_POST['qty'];
	$pencet = $_POST['proses'];


	if($pencet == "beli"){
		$sql = "INSERT INTO `keranjang`
							(`id_pembeli`,`id_barang`,`jumlah`)
					  VALUES('$idpembeli','$idbarang','$qtybarang')";

		$dbh->query($sql);
		header('location:keranjang.php');
	}
	else{
		$id = $_GET['idkeranjang'];
		$sql = "DELETE FROM `keranjang` WHERE `id_keranjang` = $id";
		$dbh->query($sql);
	}
		header('location:keranjang.php');

 ?>