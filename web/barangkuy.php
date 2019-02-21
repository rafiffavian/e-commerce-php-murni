<?php 
	session_start();
	include 'konfigurasi/config.php';
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Luxury Watches A Ecommerce Category Flat Bootstarp Resposive Website Template | Checkout :: w3layouts</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
<script src="js/jquery-1.11.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!--Custom-Theme-files-->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--start-menu-->
<script src="js/simpleCart.min.js"> </script>
<script
			  src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous">
			 
</script>
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<!--dropdown-->
<script src="js/jquery.easydropdown.js"></script>			
</head>
<body> 
	
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <!-- <a class="navbar-brand" href="#">Brand</a> -->
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li class="active"><a href="barangkuy.php">Barang</a></li>
		        <li><a href="adminkita.php">Transaksi <span class="sr-only">(current)</span></a></li>
		        <li ><a href="#">Kategori</a></li>
		        <!-- <li class="dropdown"> -->
		          <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">Action</a></li>
		            <li><a href="#">Another action</a></li>
		            <li><a href="#">Something else here</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">Separated link</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">One more separated link</a></li> -->
		          </ul>
		        </li>
		      </ul>
		      <!-- <form class="navbar-form navbar-left">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search">
		        </div>
		        <button type="submit" class="btn btn-default">Submit</button>
		      </form> -->
		      <ul class="nav navbar-nav navbar-right">
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">WELCOME <?php echo $_SESSION['namaadmin'] ?> <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="logoutadmin.php">Logout</a></li>
		          </ul>
		        </li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	
	
	<div class="logo">
		<h1>ADMIN'S Luxury Watches</h1>
		<h3>Halo <?php echo $_SESSION['namaadmin'] ?>, Welcome!!!</h3>

	</div>
	
	<div class="header-bottom">
		<div class="container">
			<div class="header">
				<div class="col-md-9 header-left">
				<div class="top-nav">
					<ul class="memenu skyblue">
						<li><h1></h1></li>
						
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-4"> 
				<label style="margin-left: 280px">Go Seacrh!</label>
			</div>
			<div class="col-md-4"> 
				<div class="search-bar">

					<input type="text" style="margin-right: 80px" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
					<input type="submit" value="">
				</div>
			</div>
			<div class="clearfix"> </div>
			</div>
		</div>
	</div><br><br><br><br><br>


<div class="container-fluid">

	<div class="col-sm-4 col-sm-offset-3">

		<?php 
			if(isset($_GET['s'])){
			$id = $_GET['s'];
			$sql = "SELECT * FROM `barang` WHERE `id_barang` = $_GET[s]";
			$x = $dbh->query($sql)->fetch();
		 ?>

		<h1>EDIT BARANG</h1><br><br>
			<form action="barangkuy_proses.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="rara" value="<?php echo $_GET['s'] ?>">
				<input type="hidden" name="roro" value="<?php echo $_GET['gbr'] ?>">
				<input type="text" name="namabarang" placeholder="Nama Barang" class="form-control" value="<?php echo $x['nama_barang'] ?>"><br>
				<select name="kategori" class="form-control">
					<?php 
						$sql = "SELECT * FROM `kategori`";
						$perintah = $dbh->query($sql);
						foreach ($perintah as $v) {
							if($v['id_kategori']  == $x['id_kategori']){
								$add = "selected";
							}
							else{
								$add = "";
							}
							echo "<option value='$v[id_kategori]' $add>$v[nama_kategori]</option>";
						}
					 ?>
					
				</select><br>
				<input type="text" name="hargabarang" placeholder="Harga Barang" class="form-control" value="<?php echo $x['harga_barang']?>"><br>
				
				<input type="text" name="diskon" placeholder="Diskon" class="form-control" value="<?php echo $x['diskon'] ?>"><br>
				<textarea name="deskripsi" placeholder="Deskripsi" class="form-control" rows="5"><?php echo $x['deskripsi_barang'] ?></textarea><br>
				<input type="file" name="gambar" class="form-control" value="<?php echo $x['gambar'] ?>"><br>
				<img src="images/<?php echo $x['gambar'] ?>" width = "150"><br><br>
				<button class="btn btn-success" name="proses" value="ubah">
  				<span class="glyphicon glyphicon-plus"></span> UBAH</button>
  				<button class="btn btn-warning" name="proses" value="ULANG"><span class="glyphicon glyphicon-repeat"></span> ULANG</button>
				
			</form>
		<?php }
		else{ ?>

		<h1>TAMBAH BARANG</h1><br><br>
			<form action="barangkuy_proses.php" method="post" enctype="multipart/form-data">
				<input type="text" name="namabarang" placeholder="Nama Barang" class="form-control" required=""><br>
				<select name="kategori" class="form-control">
					<?php 
						$sql = "SELECT * FROM `kategori`";
						$perintah = $dbh->query($sql);
						foreach ($perintah as $v) {
							echo "<option value='$v[id_kategori]'>$v[nama_kategori]</option>";
						}
					 ?>
					
				</select><br>
				<input type="text" name="hargabarang" placeholder="Harga Barang" class="form-control" required=""><br>
				<input type="text" name="diskon" placeholder="Diskon" class="form-control" required=""><br>
				<textarea name="deskripsi" placeholder="Deskripsi" class="form-control" rows="5" required=""></textarea><br>	
				<input type="file" name="gambar" class="form-control" required=""><br>
				<button class="btn btn-success" name="proses" value="ADD">
  				<span class="glyphicon glyphicon-plus"></span> ADD</button>
  				<button class="btn btn-warning" name="proses" value="ULANG"><span class="glyphicon glyphicon-repeat"></span> ULANG</button>
				
			</form>
		<?php } ?>
	</div>
	<div class="col-sm-10 col-sm-offset-1" style="margin-top: 50px;">
		<h1 align="center">Table Tambah Barang</h1><br><br>
		<table class="table">
			<thead>
				<th>No</th>
				<th>Nama Barang</th>
				<th>Diskon</th>
				<th>Harga</th>
				<th>Diskon</th>
				<th>Deskripsi</th>
				<th>Gambar</th>
				<th>Status</th>
				<th>Aksi</th>
			</thead>
			<tbody>
				<?php 
					$sql = "SELECT * FROM `barang`,`kategori` WHERE `barang`.`id_kategori` = `kategori`.`id_kategori`";
					$perintah = $dbh->query($sql);
					$no = 1;

					foreach ($perintah as $v) {
						
						echo "
								<tr>
									<td>$no</td>
									<td>$v[nama_barang]</td>
									<td>$v[nama_kategori]</td>
									<td>Rp. ".number_format($v['harga_barang']). "</td>
									<td>$v[diskon]". '%' . "</td>
									<td>$v[deskripsi_barang]</td>
									<td><img src = 'images/$v[gambar]' width = '150px' height = '100px'><br>$v[gambar]</br></td>
									<td>$v[status]</td>
									<td>
										<a href='barangkuy.php?s=$v[id_barang]&gbr=$v[gambar]' class = 'btn btn-success'>EDIT</a>
										<a href='barangkuy_proses.php?b=$v[id_barang]&g=$v[gambar]' class = 'btn btn-danger' style ='margin-top : 20px' >DELETE</a>
									</td>
								</tr>


							";
							$no++;
					}

				 ?>
				
			</tbody>
		</table>

	</div>	
</div>	<br><br><br><br><br>	

<div class="information">
		<div class="container">
			<div class="infor-top">
				<div class="col-md-3 infor-left">
					<h3>Follow Us</h3>
					<ul>
						<li><a href="#"><span class="fb"></span><h6>Facebook</h6></a></li>
						<li><a href="#"><span class="twit"></span><h6>Twitter</h6></a></li>
						<li><a href="#"><span class="google"></span><h6>Google+</h6></a></li>
					</ul>
				</div>
				<div class="col-md-3 infor-left">
					<h3>Information</h3>
					<ul>
						<li><a href="#"><p>Specials</p></a></li>
						<li><a href="#"><p>New Products</p></a></li>
						<li><a href="#"><p>Our Stores</p></a></li>
						<li><a href="contact.html"><p>Contact Us</p></a></li>
						<li><a href="#"><p>Top Sellers</p></a></li>
					</ul>
				</div>
				<div class="col-md-3 infor-left">
					<h3>My Account</h3>
					<ul>
						<li><a href="account.html"><p>My Account</p></a></li>
						<li><a href="#"><p>My Credit slips</p></a></li>
						<li><a href="#"><p>My Merchandise returns</p></a></li>
						<li><a href="#"><p>My Personal info</p></a></li>
						<li><a href="#"><p>My Addresses</p></a></li>
					</ul>
				</div>
				<div class="col-md-3 infor-left">
					<h3>Store Information</h3>
					<h4>The company name,
						<span>Lorem ipsum dolor,</span>
						Glasglow Dr 40 Fe 72.</h4>
					<h5>+955 123 4567</h5>	
					<p><a href="mailto:example@email.com">contact@example.com</a></p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--information-end-->
	<!--footer-starts-->
	<div class="footer">
		<div class="container">
			<div class="footer-top">
				<div class="col-md-6 footer-left">
					<form>
						<input type="text" value="Enter Your Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your Email';}">
						<input type="submit" value="Subscribe">
					</form>
				</div>
				<div class="col-md-6 footer-right">					
					<p>© 2015 Luxury Watches. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--footer-end-->	
</body>
</html>
