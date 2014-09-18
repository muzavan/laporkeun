<html>
<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.css">
<head>

</head>
<script>
        function validate(){

	    if(!document.getElementById("password").value==document.getElementById("confpassword").value)alert("Passwords do no match");
    	return document.getElementById("password").value==document.getElementById("confpassword").value;
   		return false;
    }
    </script>

<body>
	<center>
			<div class="well-laporkeun">
				<form method="post" action="signup_success.php">
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
				    <div class="form-group">
				        <label for="inputPassword">Confirm Password</label>
				        <input type="password" class="form-control-laporkeun" name="confpassword" placeholder="Confirm Password" width="20pt">
				    </div>

				    <div class="form-group">
				        <label for="inputPassword">Sedikit Cerita Tentang Kamu</label>
				        <input type="text" class="form-control-laporkeun" name="bio" placeholder="Sedikit cerita tentang kamu" width="20pt">
				    </div>

				    <button type="submit" class="btn btn-primary" onclick="validate()" >Sign Up</button>

				</form>
			</div>
	</center>
	
</body>



</html>