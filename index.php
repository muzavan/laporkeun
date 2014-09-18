<html>
<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.css">
<head>

</head>

<body>
	<center>
			<div class="well-laporkeun">
				<form action="authentication.php" method="post">
				    <div class="form-group">
				        <label for="inputEmail">Username</label>
				        <input type="text" class="form-control-laporkeun" id="username" name="username" placeholder="Username" width="20pt">
				    </div>
				    <div class="form-group">
				        <label for="inputPassword">Password</label>
				        <input type="password" class="form-control-laporkeun" id="password" name="password" placeholder="password" width="20pt">
				    </div>
				    <div class="checkbox">
				        <label><input type="checkbox"> Remember me</label>
				    </div>
				    <button type="submit" class="btn btn-primary">Login</button> or <a href="signup.php">Sign Up </a>
				</form>
			</div>
	</center>
	
</body>



</html>