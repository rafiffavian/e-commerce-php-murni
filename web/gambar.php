<?php include 'header.php';?>

<div class="container-fluid">
	<div class="col-sm-4">

		<?php 
			if(isset($_GET['s'])){
			$id = $_GET['s'];
			$sql = "SELECT * FROM `gambar` WHERE `id_gambar` = $_GET[s]";
			$x = $dbh->query($sql)->fetch();
		 ?>

		<h1>EDIT Gambar</h1><br><br>
			<form action="gambar_proses.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="rara" value="<?php echo $_GET['s'] ?>">
				<input type="hidden" name="roro" value="<?php echo $_GET['gbr'] ?>">
				<select name="kategori_namabarang" class="form-control">
						<option value="">Nama Barang</option>
						<?php 
							$a = "select * from barang";
							$perintah = $dbh->query($a);
							foreach ($perintah as $v) {
								if($v['id_barang'] == $x['id_barang']){
									$add = "selected";
								}
								else{
									$add = "";
								}
								echo "
									<option value='$v[id_barang]' $add>$v[nama_barang]</option>

								";
							}
						 ?>

				   </select><br>
				<input type="file" name="gambar" class="form-control" value="<?php echo $x['sub_gambar'] ?>"><br>
				<img src="images/<?php echo $x['sub_gambar'] ?>" width = "150"><br><br>
				<button class="btn btn-success" name="proses" value="ubah">
  				<span class="glyphicon glyphicon-plus"></span> UBAH</button>
  				<button class="btn btn-warning" name="proses" value="ULANG"><span class="glyphicon glyphicon-repeat"></span> ULANG</button>
				
			</form>
		<?php }
		else{ ?>

		<h1>TAMBAH Gambar</h1><br><br>
			<form action="gambar_proses.php" method="post" enctype="multipart/form-data">
				
				<select name="kategori_namabarang" class="form-control" required="">
					<option value="">Nama Barang</option>
					<?php 
						$a = "SELECT * FROM `barang`";
						$perintah = $dbh->query($a);
						foreach ($perintah as $v) {
							echo "
								<option value='$v[id_barang]'>$v[nama_barang]</option>
							";
							
						}
					 ?>

					
				</select><br>
				
				<input type="file" name="gambar" class="form-control" required=""><br>
				<button class="btn btn-success" name="proses" value="ADD">
  				<span class="glyphicon glyphicon-plus"></span> ADD</button>
  				<button class="btn btn-warning" name="proses" value="ULANG"><span class="glyphicon glyphicon-repeat"></span> ULANG</button>
				
			</form>
		<?php } ?>
	</div>
	<div class="col-sm-6 col-sm-offset-1">
		<h1 align="center">Table Tambah Gambar</h1><br><br>
		<table class="table">
			<thead>
				<th>No</th>
				<th>Nama Barang</th>
				<th>Gambar</th>
				<th>Aksi</th>
			</thead>
			<tbody>
				<?php 
					$sql = "SELECT * FROM `gambar`,`barang` WHERE `gambar`.`id_barang` = `barang`.`id_barang` order by `id_gambar` asc";
					$perintah = $dbh->query($sql);
					$no = 1;

					foreach ($perintah as $v) {
						
						echo "
								<tr>
									<td>$no</td>
									<td>$v[nama_barang]</td>
									<td><img src = 'images/$v[sub_gambar]' width = '150px' height = '100px'><br>$v[sub_gambar]</br></td>
									<td>
										<a href='gambar.php?s=$v[id_gambar]&gbr=$v[sub_gambar]' class = 'btn btn-success'>EDIT</a>
										<a href='gambar_proses.php?b=$v[id_gambar]&g=$v[sub_gambar]' class = 'btn btn-danger'>DELETE</a>
									</td>
								</tr>


							";
							$no++;
					}

				 ?>
				
			</tbody>
		</table>

	</div>	
</div>		

<?php include 'footer.php';  ?>	
