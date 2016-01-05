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
	
	$query  = "select * "; 
	$query .= "from subjects ";
	$query .= "where visible = 1 "; 
	$query .= "order by position asc";  
	$result = mysqli_query($connection, $query); 	
	// $result is a special kind of object called a "resource" 
	// which is a collection of database rows
	
	// test if there was a query error
	if (!$result){ 
		die("Database Query Failed"); 
	}
?>
<html>
	<head>
		<title></title>
	</head>
	<body>
		
		<pre>
		<?php 
			// 3. use return data (if any)
			while ($row = mysqli_fetch_row($result)) { 
				// output data from each row
				var_dump($row); 
				echo "<hr />"; 
			}
		?>
		</pre>
		<?php
			// 4. Release returned data
			mysqli_free_result($result); 
		?>
		
		<script src=""></script>
	</body>
</html>

<?php // 5. close the database connection
	mysqli_close($connection); 
?>