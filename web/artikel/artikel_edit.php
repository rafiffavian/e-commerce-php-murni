<?php 
	include 'header.php';
	$id = $_GET['id'];
	$sql = "select * from artikel where id_artikel = $id";
	$perintah = $dbh->query($sql);//nampung array table baris dari database php nya.
	$field = $perintah->fetch(); // fecth itu buat ngeker baris mana yg mau diubah 
?>	



	<form method="post" action="proses_artikel.php">
		<input type="hidden" name="id" value="<?php echo $field['id_artikel'] ?>">
		judul : <input type="text" name="judul" value="<?php echo $field['judul'] ?>"><br><br>
		kategori : <select name="kategori">
						<option value="">Pilih</option>
						<?php 
							$a = "select * from kategori";
							$perintah = $dbh->query($a);
							foreach ($perintah as $v) {
								if($v['id_kategori'] == $field['id_kategori']){
									$add = "selected";
								}
								else{
									$add = "";
								}
								echo "
									<option value='$v[id_kategori]' $add>$v[nama_kategori]</option>

								";
							}
						 ?>

				   </select><br><br>
		isi : <textarea name="isi"><?php echo $field['isi']?></textarea><br><br> 
		gambar: <input type="text" name="gambar" value="<?php echo $field['gambar']?>"><br><br>
		<input type="submit" name="proses" value="ubah">		   
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
						</td>
					</tr>
					";
					$no++;
			}
		?>
	</table>
