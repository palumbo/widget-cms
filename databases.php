<?php // we're going to connect to the database before the html 
	
	// 1. create the database connection 
	$dbhost = "localhost"; 
	$dbuser = "widget_cms"; 
	$dbpass = "password"; 
	$dbname = "widget_corp"; 
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname); 
	
	if (mysqli_connect_errno()) { 
		die("Database Connection Failed: " . 
		mysqli_connect_error() . 
		" -->" . mysqli_connect_errno() . "<--"
		); 
	}
?>
<html>
	<head>
		<title></title>
	</head>
	
	<body>
		
		<script src=""></script>
	</body>
</html>

<?php // 5. close the database connection
	mysqli_close($connection); 
?>