<html> 
	<head> 
		<title>Functions: Defining</title> 
	</head>
	
	<body> 
		
		<?php // create function 
			function login(){ 
				$username = ""; 
				$password = ""; 
				if (isset($_GET['submit'])) { 
					$username = $_GET['username']; 
					$password = $_GET['password']; 
				}
				
				if ($username == 'joseph' && $password == "monkey") { 
					echo "<h1>You have successfully authorized</h1>"; 
				} else { 
					echo "<h1>AUTHORIZATION FAILED</h1>"; 
				}
			}
		?>
		
		<div id="container">
			<form> 
				Username: <input type="text" name="username" id="username" /> 
				<br /> 
				Password: <input type="password" name="password" id="password" /> 
				<br /> 
				<input type="submit" name="submit" /> 
			</form>
		</div>
		
		<?php login(); ?>
		
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>	
	<script src=""></script> 
	</body>
</html>