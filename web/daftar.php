<?php 

  include 'header.php';

 ?>
	<div class="col-sm-4 col-sm-offset-4">
		<h1>Daftar</h1>
		<form action="daftar_proses.php" method="post">
			<input type="text" name="nama" placeholder="Nama Lengkap" class="form-control"><br>
			<input type="text" name="username" placeholder="Username" class="form-control"><br>
			<input type="text" name="email" placeholder="Email" class="form-control"><br>
			<input type="password" name="password" placeholder="Password" class="form-control"><br>
			<input type="text" name="no_hp" placeholder="No Hp" class="form-control"><br>
			<textarea name="alamat" placeholder="Alamat" class="form-control"></textarea><br>
			<input type="submit" name="proses" value="daftar" class="btn btn-primary">
		</form>
	</div>

<?php 

  include 'footer.php';

 ?>
	
		



