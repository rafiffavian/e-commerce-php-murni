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
		        <li><a href="barangkuy.php">Barang</a></li>
		        <li class="active"><a href="#">Transaksi <span class="sr-only">(current)</span></a></li>
		        <li><a href="#">Kategori</a></li>
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
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">WELCOME <?php echo $_SESSION['namae'] ?> <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="logoutadmin.php">Logout</a></li>
		          </ul>
		        </li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	
	
	<div class="logo">
		<a href="index.html"><h1>ADMIN'S Luxury Watches</h1></a>
	</div><br>
	<div class="ckeck-top heading">
				<h2>HALO <?php echo $_SESSION['namae'] ?> ,WELCOME!!!</h2>
	</div>
			<br><br>

	<div class="col-sm-8 col-sm-offset-2">
				<?php 
					$id = $_GET['id'];
					$sql = "SELECT * FROM `transaksi`,`pembeli` WHERE `transaksi`.`id_pembeli` = `pembeli`.`id_pembeli` AND `id_transaksi` = '$id'";
					$a = $dbh->query($sql)->fetch();
				 ?>
				 <table class="table table-striped">
				 	<tr>
				 		<th>Nama</th>
				 		<th><?php echo $a['first_name'] ?></th>
				 	</tr>
				 	<tr>
				 		<th>Email</th>
				 		<th><?php echo $a['email_pembeli'] ?></th>
				 	</tr>
				 	<tr>
				 		<th>No Hp</th>
				 		<th><?php echo $a['no_hp'] ?></th>
				 	</tr>
				 	<tr>
				 		<th>Jenis Kelamin</th>
				 		<th><?php echo $a['jenis_kelamin'] ?></th>
				 	</tr>
				 	<tr>
				 		<th>Status</th>
				 		<th>
				 			<form action="" method="post">
				 				<select name="status" class="form-control">
				 					<?php 
				 						$status = array('Belum Di Proses','Selesai','Cancle');
				 						foreach ($status as $s) {
				 							if($s == $a['status_pengiriman']){
				 								$add = "selected";
				 							}
				 							else{
				 								$add = "";
				 							}
				 							echo "<option value='$s' $add>$s</option>";
				 						}
				 					 ?>

				 				</select><br>
				 				<input type="submit" name="proses" value="PILIH" class="btn btn-primary">
				 			</form>
				 			<?php 
				 				if(isset($_POST['status'])){
				 					$status = $_POST['status'];
				 					$sql = "UPDATE `transaksi`
				 									SET `status_pengiriman` = '$status'
				 									WHERE `id_transaksi` = '$id'";
				 					$dbh->query($sql);
				 					echo "<script>
											window.location.href='adminkita.php';
										  </script>";
				 				}
				 			 ?>
				 		</th>
				 	</tr>
				 </table>
				
			</div>   <br><br><br>
	
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
	</div>
	<!--bottom-header-->
	<!--start-breadcrumbs-->
	
	<!--end-breadcrumbs-->
	<!--start-ckeckout-->

	<div class="ckeckout">
		<div class="container">
			
			<div class="ckeckout-top">
			<div class="cart-items">
			 
				<script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cart-header').fadeOut('slow', function(c){
							$('.cart-header').remove();
						});
						});	  
					});
			   </script>
			<script>$(document).ready(function(c) {
					$('.close2').on('click', function(c){
						$('.cart-header1').fadeOut('slow', function(c){
							$('.cart-header1').remove();
						});
						});	  
					});
			   </script>
			   <script>$(document).ready(function(c) {
					$('.close3').on('click', function(c){
						$('.cart-header2').fadeOut('slow', function(c){
							$('.cart-header2').remove();
						});
						});	  
					});
			   </script>
			
				
			<div class="in-check" >
				<ul class="unit10">
					<li><span>No</span></li>
					<li><span>Nama Barang</span></li>		
					<li><span>Harga</span></li>
					<li><span>Jumlah</span></li>
					<li><span>Subtotal</span></li>
					
					<div class="clearfix"> </div>
				</ul>

					<?php 

						$sql = "SELECT * FROM `detail_transaksi` WHERE `id_transaksi` = $id ";
						$perintah = $dbh->query($sql);
						$no = 1;
						foreach ($perintah as $e) {
							

							echo "
				<ul class='cart-header10'>
									<li><span class='name'>$no</span></li>
									<li><span class='name'>$e[nama_barang]</span></li>
									<li><span class='cost'>Rp ". number_format($e['harga']) . "	</span></li>
									<li><span class='cost'>$e[jumlah]</span></li>
									<li><span class='cost'>Rp " . number_format($e['subtotal']) . "</span></li>

					<div class='clearfix'> </div>
				</ul>
							";
							$no++;
							
						}
					 ?>
					 
						
						
						
			</div>
			</div>  
		 </div>
		</div>
	</div>
	<!--end-ckeckout-->
	<!--information-starts-->
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