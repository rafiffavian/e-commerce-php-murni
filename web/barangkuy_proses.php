<?php 

	include 'konfigurasi/config.php';
	$barang = $_POST['namabarang'];
	$harga = $_POST['hargabarang'];
	$diskon = $_POST['diskon'];
	$kategori = $_POST['kategori'];
	$deskripsi = $_POST['deskripsi'];
	$nama_gambar = $_FILES['gambar']['name'];
	$nama_gambar_rand = rand(0,1000)."-".$nama_gambar;
	$file_temp = $_FILES['gambar']['tmp_name'];
	$ukuran_gambar = $_FILES['gambar']['size'];
	$tipe = $_FILES['gambar']['type'];
	$yang_boleh = array('png','jpg','gif');
	$ext = explode('.', $nama_gambar);
	$extension = strtolower(end($ext));
	$pencet = $_POST['proses'];
	$id = $_POST['rara'];
	$foto = $_POST['roro'];

	if($pencet == "ADD"){
		if(in_array($extension, $yang_boleh) === true && $ukuran_gambar <= 100000000000){
			move_uploaded_file($file_temp, 'images/'.$nama_gambar_rand);
		}
		else{
			echo "Tipe File Tidak Memenuhi Syarat";
			die();
		}
		$sql = "INSERT INTO `barang`
						(`id_kategori`,`nama_barang`,`harga_barang`,`deskripsi_barang`,`gambar`,`diskon`,`status`)
					VALUES('$kategori','$barang','$harga','$deskripsi','$nama_gambar_rand','$diskon','1');";
		$dbh->query($sql);
	}
	else if($pencet == "ubah"){
		if($nama_gambar == ""){
			$sql = "UPDATE `barang`
					SET `id_kategori` = '$kategori',
						`nama_barang` = '$barang',
						`harga_barang` = '$harga',
						`deskripsi_barang` = '$deskripsi',
						`diskon` = '$diskon'
					WHERE `barang`.`id_barang` = $id";
			$dbh->query($sql);
		}
		else{
				if(in_array($extension, $yang_boleh)=== true && $ukuran_gambar <= 100000000000000){
					move_uploaded_file($file_temp, 'images/'.$nama_gambar_rand);
				}
				else{
					echo "Tipe File Tidak Memenuhi Syarat";
				}
				unlink("images/".$foto);
				$sql = "UPDATE `barang`
						SET `id_kategori` = '$kategori',
							`nama_barang` = '$barang',
							`harga_barang` = '$harga',
							`deskripsi_barang` = '$deskripsi',
							`gambar` = '$nama_gambar_rand',
							`diskon` = '$diskon'
						WHERE `barang`.`id_barang` = $id";
				$dbh->query($sql);
				
			}
	}
	else{
		$gbr = $_GET['g'];
		unlink('images/'.$gbr);
		$id = $_GET['b'];
		$sql = "DELETE FROM `barang`
						WHERE `barang`.`id_barang` = $id";
		$dbh->query($sql);
	}
	
	header('location:barangkuy.php');

	// echo "

	// 		$barang<br>
	// 		$harga<br>
	// 		$deskripsi<br>
	// 		$nama_gambar_rand<br>
	// 		$ukuran_gambar<br>
	// 		$tipe<br>
	// 		$extension<br>
	// 		$file_temp<br>
	// 		<img src = '../img/$nama_gambar_rand' width = '100' height = '100'>

	// ";

 ?>