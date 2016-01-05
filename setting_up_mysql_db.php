<html>
	<head>
		<title>Setting up the MySQL Database</title>
		<link rel="stylesheet" type="text/css" href="_css/main.css" /> 
	</head>
	<body>
		
		<h1>MySQL: Setting up widget_corp database</h1>

		<input type="checkbox" /> 		
		Create the database<br /> 
		<code>CREATE DATABASE widget_corp;</code>
	
		<br /><br />
	
		<input type="checkbox" /> 
		Create a user for that database<br /> 
		<code>GRANT ALL PRIVILEGES ON widget_corp.*
		TO 'widget_cms'@'localhost'
		IDENTIFIED BY 'password';</code>
	
		<br /><br />
		
		<input type="checkbox" /> 
		Show and confirm grants for that user<br /> 
		<span id='hint'>Need hint?</span>
		
		
	<script> 
		var hint = document.getElementById('hint'); 
		hint.onclick = function(){ 
			var code = document.createElement('code'); 
			hint.appendChild(code); 
			var text = document.createTextNode("SHOW GRANTS FOR 'widget_cms'@'localhost';"); 
			code.appendChild(text); 
			// hint.style.display = 'none'; 
			
		}
			
	</script> 	
	</body>
</html>