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

<?php // 2. Perform database query
	
	// Often these are form values from $_POST
	$menu_name = "Edit me"; 
	$position = 4; 
	$visible = 1; 
	
	// Constructing my query
	$query  = "INSERT INTO subjects ("; 
	$query .= " menu_name, position, visible"; 
	$query .= ") VALUES ("; 
	$query .= " '{$menu_name}', {$position}, {$visible}"; 
	$query .= ")";  
	
	$result = mysqli_query($connection, $query); 
	
	if ($result) { 
		// Success
		// redirect_to("somepage.php"); 
		echo "Success"; 
	} else { 
		// Failure
		// $message = "Subject creation failed"; 
		die("Database query failed: " . mysqli_error($connection)); 
	}
?>
<html>
	<head>
		<title></title>
	</head>
	<body>
				
	</body>
</html>

<?php // 5. close the database connection
	mysqli_close($connection); 
?>