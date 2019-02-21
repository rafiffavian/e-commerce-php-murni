<?php include 'header.php' ?>
	<hr>
	<h1>Selamat Datang di Artikel</h1>

	<form method="post" action="proses_artikel.php">
		judul : <input type="text" name="judul"><br><br>
		kategori : <select name="kategori">
						<?php 
							$a = "select * from kategori";
							$perintah = $dbh->query($a);
							foreach ($perintah as $v) {
								echo "
									<option value='$v[id_kategori]'>$v[nama_kategori]</option>

								";
							}
						 ?>

				   </select><br><br>
		isi : <textarea name="isi"></textarea><br><br>
		gambar: <input type="text" name="gambar"><br><br>
		<input type="submit" name="proses" value="tambah">		   
		<input type="reset" name="proses" value="ulangi">
	</form>

	<hr>

	<table border="1">
		<tr>
		<?php  
			$sql = "SELECT * FROM `artikel`,kategori WHERE artikel.id_kategori = kategori.id_kategori order by id_artikel asc";
			$perintah = $dbh->query($sql);//sebagai penampung dari database
			$no = 1;

			foreach ($perintah as $a) {//kita aliasin si perintah jadi v, perintah itu adalah penamung database nya .
				echo "
			

						<td>$no</td>
						<td>$a[judul]</td>
						<td>$a[nama_kategori]</td>
						<td>$a[isi]</td>
						<td>
							<a href='artikel_edit.php?id=$a[id_artikel]'><button>edit</button></a>
							<a href='proses_artikel.php?id=$a[id_artikel]'><button>hapus</button></a>
						</td>
					</tr>
					";
					$no++;
			}
		?>
	</table>

</body>	
</html>