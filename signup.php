<html>
	<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.css">
	<head>

	</head>
<?php
/*
	$password_error="";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	   if ($_POST["confpassword"]<>$_POST["password"]) {
	     $password_error = "Password didn't match";
		}
	}
	*/
?>
<body>
	<center>
			<div class="well-laporkeun">
				<form method="post" enctype="multipart/form-data" action="<?php
					/*
					if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  					if ($_POST["confpassword"]!=$_POST["password"]) {
	    						echo $_SERVER["PHP_SELF"];
						}
						else{
								$success = "signup_success.php";
								echo $success;
						}
					}
					*/
					echo "signup_success.php";

				?>"
				

			>
					<div class="form-group">
				        <label for="inputEmail">Nama Lengkap</label>
				        <input type="text" class="form-control-laporkeun" name="nama_lengkap"  placeholder="Username" width="20pt">
				    </div>
				    <div class="form-group">
				        <label for="inputEmail">Username</label>
				        <input type="text" class="form-control-laporkeun" name="username"  placeholder="Username" width="20pt">
				    </div>
				    <div class="form-group">
				        <label for="inputPassword">Password</label>
				        <input type="password" class="form-control-laporkeun" name="password" placeholder="Password" width="20pt">
				    </div>
				    <span class="form-group">
				        <label for="inputPassword">Confirm Password</label>
				        <input type="password" class="form-control-laporkeun" name="confpassword" placeholder="Confirm Password" width="20pt">
				    </span>
				    <span style="color:#FF0000;">
				    <?php 
				    	/* echo $password_error; */
				    ?>
				    </span>

				    <div class="form-group">
				        <label for="inputPassword">Bio</label>
				        <input type="text" class="form-control-laporkeun" name="bio" placeholder="Sedikit cerita tentang kamu" width="20pt">
				    </div>
				    <div class="form-group">
				        <label for="inputPassword">Avatar</label>
				        <input type="file" name="avatar">
				    </div>
				    <button type="submit" class="btn btn-primary">Sign Up</button>

				</form>
			</div>
	</center>
</body>

</html>