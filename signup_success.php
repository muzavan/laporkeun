<html>
	<?php
		$nama_lengkap = &$_POST["nama_lengkap"];
		$username = &$_POST["username"];
		$password = &$_POST["password"];
		$bio = &$_POST["bio"];
		$con = mysql_connect("localhost","root","");
		if(!$con){
			die();
		}
		else{
			mysql_select_db("laporkeun");
			$query = "INSERT INTO `user`(`username`,`password`,`nama_lengkap`,`bio`) VALUES ('".$username."','".$password."','".$nama_lengkap."','".$bio."');";
			$result = mysql_query($query);
			if(!$result){
				echo "Salah?";
			}
			else{
				echo "Bener";
			}
		}

	?>
</html>