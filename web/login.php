<?php include 'header.php' ?>

		<div class="col-sm-4 col-sm-offset-4" style="margin-top: 30px">
	          <h1>LOGIN</h1>
	          <form method="post" action="proses_login.php">
	              <input type="text" name="user" class="form-control" placeholder="Username"><br>
	              <input type="password" name="pass" class="form-control" placeholder="Password"><br>
	              <input type="submit" name="proses" value="LOGIN" class="btn btn-default">
	          </form><br><br>
	          <?php 
	          if (isset($_GET['v'])) {
	           	echo "LOGIN GAGAL";
	           } 

	           else{
	           		echo "SILAHKAN LOGIN DULU";
	           	}
	           	?>

	          
        </div>


<?php include 'footer.php' ?>