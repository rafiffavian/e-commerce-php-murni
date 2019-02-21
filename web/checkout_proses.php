<?php 
	session_start();
	include 'konfigurasi/config.php';
	$pembeli = $_POST['pembeli'];
	$total = $_POST['total'];

	$sql = "INSERT INTO `transaksi`
						(`id_pembeli`,`total`)
				  VALUES('$pembeli','$total')";

	$dbh->query($sql);
	$id_transaksi = $dbh->LastInsertId();


	$sql = "SELECT * FROM `barang`, `keranjang` WHERE `barang`.`id_barang` = `keranjang`.`id_barang` AND `id_pembeli` = '$pembeli'";

	$perintah = $dbh->query($sql);

	foreach ($perintah as $v) {
		
		$namaBarang = $v['nama_barang'];
		$hargaBarang = $v['harga_barang'];
		$gambarBarang = $v['gambar'];
		$jumlahBarang = $v['jumlah'];
		$subtotal = $hargaBarang * $jumlahBarang;

		$sql = "INSERT INTO `detail_transaksi`
							(`id_transaksi`,`nama_barang`,`harga`,`gambar`,`jumlah`,`subtotal`)
					  VALUES('$id_transaksi','$namaBarang','$hargaBarang','$gambarBarang','$jumlahBarang','$subtotal')";
		$dbh->query($sql);
	}
	$sql = "DELETE FROM `keranjang` WHERE `id_pembeli` = '$pembeli'";
	$dbh->query($sql);

	header('location:riwayat.php');
 ?>