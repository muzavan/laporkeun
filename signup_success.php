<html>
	<?php
		//var_dump($_POST);
		//var_dump($_FILES);
		$nama_lengkap = $_POST["nama_lengkap"];
		echo $nama_lengkap;
		$username = $_POST["username"];
		$password = $_POST["password"];
		$bio = $_POST["bio"];
		$con = mysql_connect("localhost","root","");
		if(!$con){
			die();
		}
		else{
			mysql_select_db("laporkeun");
			
			$i=0;
			while(file_exists("uploads/$i-{$_FILES['avatar']["name"]}")){
				$i++;
			}
			move_uploaded_file ($_FILES['avatar'] ['tmp_name'],
       		"uploads/$i-{$_FILES['avatar'] ['name']}");

			$imgSrc = "uploads/$i-{$_FILES['avatar'] ['name']}";
			$query = "INSERT INTO `user`(`username`,`password`,`nama_lengkap`,`bio`,`imgSrc`) VALUES ('".$username."','".$password."','".$nama_lengkap."','".$bio."','".$imgSrc."');";
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