<?php 

	include 'konfigurasi/config.php';

	$kategori_namabarang = $_POST['kategori_namabarang'];
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
		$sql = "INSERT INTO `gambar`
						(`id_barang`,`sub_gambar`)
					VALUES('$kategori_namabarang','$nama_gambar_rand');";
		$dbh->query($sql);
	}
	else if($pencet == "ubah"){
		if($nama_gambar == ""){
			$sql = "UPDATE `gambar`
					SET `id_barang` = '$kategori_namabarang'
						
					WHERE `gambar`.`id_gambar` = $id";
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
				$sql = "UPDATE `gambar`
						SET `id_barang` = '$kategori_namabarang',
							`sub_gambar` = '$nama_gambar_rand'

						WHERE `gambar`.`id_gambar` = $id";
				$dbh->query($sql);
				
			}
	}
	else{
		$gbr = $_GET['g'];
		unlink('images/'.$gbr);
		$id = $_GET['b'];
		$sql = "DELETE FROM `gambar`
						WHERE `gambar`.`id_gambar` = $id";
		$dbh->query($sql);
	}
	
	header('location:gambar.php');

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