<html>
	<body>
			<?php
			$sql_connection =  mysql_connect("localhost","root","");
			if (!$sql_connection)
			  {
			  die('Could not connect: ' . mysql_error());
			  }

			else{
				mysql_select_db("laporkeun");
				$var_username = &$_POST["username"];
				$var_password = &$_POST["password"];
				$result = mysql_query("SELECT `password` FROM `user` WHERE `username`='muzavan';");
				$values = mysql_fetch_array($result);
				$password1 = $values["password"];
				if($var_password==$password1){
					echo "Autentikasi berhasil!";
				}
				else{
					echo "Autentikasi Gagal";
				}
			}
			?>
	</body>
</html>