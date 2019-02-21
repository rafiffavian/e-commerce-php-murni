 <?php include 'header.php' ?>
	
	<?php 
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			$sql = "select *from kategori where id_kategori = $id";
			$perintah = $dbh->query($sql);//query PDO
			$a = $perintah->fetch();
	 ?>
	 		<h1>Edit Kategori</h1>
			<form method="post" action="proses_kategori.php" class="form-control">
				<input type="hidden" name="id_kat" value="<?php echo $id?>">
				nama kategori  : <input type="text" name="nama" value="<?php echo $a['nama_kategori']?>">
				<input type="submit" name="proses" value="edit">
			</form>
	 <?php 
	 	}
	 	else{
	  ?>	

			<h1>Kategori</h1>
			<form method="post" action="proses_kategori.php" class="form-control">
				nama kategori  : <input type="text" name="nama">
				<input type="submit" name="proses" value="tambah">
			</form>
	<?php } ?>
	<hr>
	<h2>Tabel Kategori</h2>
	<table class="table">
		<tr>
			<td>No</td>
			<td>Nama Kategori</td>
			<td>Aksi</td>
		</tr>
		<?php 
			$sql = "SELECT * FROM `kategori`";
			$perintah = $dbh->query($sql);
			$no = 1;
			foreach ($perintah as $V) {
				echo "

					<tr>
					 	<td>$no</td>
					 	<td>$V[nama_kategori]</td>
					 	<td>
					 		<a href='kategori.php?id=$V[id_kategori]'>Edit</a> ||
					 		<a href='proses_kategori.php?id=$V[id_kategori]'>Delete</a>
				 		</td>
		 			</tr>

				";
				$no++;
			}
		 ?>

	</table>
<?php include 'footer.php'; ?>