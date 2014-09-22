<html>
<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.css">
	<head>
	<title> </title>
	</head>
	<body>

	<?php
	// Connect to database server
	mysql_connect("localhost", "root", "") or die (mysql_error ());

	// Select database
	mysql_select_db("laporkeun") or die(mysql_error());

	// SQL query
	$strRESULT = "SELECT * FROM `POST2`";

	// Execute the query (the recordset $rs contains the result)
	$rs = mysql_query($strRESULT);
	// Loop the recordset $rs
	// Each row will be made into an array ($row) using mysql_fetch_array
	?>
	

	<ul class="list-group" style="width:50%;margin:auto auto auto auto;">
	<?php 
		while($row = mysql_fetch_array($rs)){

	   // Write the value of the column FirstName (which is now in the array $row)

	?>
		<li class="list-group-item">
		<?php
			echo $row['USER']."<br/>";
			echo $row['TIME']."<br/>";
			echo $row['TITLE']."<br/>";
			echo $row['PHOTO']."<br/>";
			echo $row['LOCATION']."<br/>";
	  		echo $row['COMMENTS']."<br/>";
	  	?>
		</li>

		<?php 
	  
			  }

			// Close the database connection
			mysql_close(); ?>
			
	</div>

	</body>
	</html>