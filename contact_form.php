<html> 
	<head> 
		<title>Contact Me</title>
		<style> 
			body { font-family: sans-serif; }
			
			#container { 
					width: 100px; 
					height: 100px; 					
					position: absolute; 
					top: 0; 
					bottom: 0; 
					left: 0; 
					right: 0; 
					margin: auto;  
			}
				
		</style> 
	</head>
	
	<body> 

		<div id="container">
			<form> 
				<input type="text" name="name" id="name" value="your name" placeholder="" /> <br>  
				<input type="text" name="email" id="email" value="your email" placeholder="" /> <br> 
				<input type="submit" name="submit" value="Submit" /> 
			</form>
		</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>	
	<script>
		var nameField = document.getElementById('name'); 
		var emailField = document.getElementById('email'); 
		

		nameField.onfocus = function(){ 
			nameField.setAttribute("placeholder", "your name"); 
			nameField.setAttribute("value", "")
		}; 
		
		nameField.onblur = function(){ 
			nameField.setAttribute("placeholder", ""); 
			nameField.setAttribute("value", "your name")
		}; 
		
		emailField.onfocus = function(){ 
			emailField.setAttribute("placeholder", "your email"); 
			emailField.setAttribute("value", "")
		}; 
		
		emailField.onblur = function(){ 
			emailField.setAttribute("placeholder", ""); 
			emailField.setAttribute("value", "your email")
		}; 
		
/*
		nameField.onfocus = function(){
			if (nameField.getAttribute("value") == "your name") { 
				nameField.setAttribute("value", ""); 
				nameField.setAttribute("placeholder", "your name"); 
				console.log("nameField.onfocus triggered"); 
			}
		}; 
		
		nameField.onblur = function(){ 
			if (nameField.getAttribute("placeholder") == "your name" || nameField.getAttribute("value") == "") { 
				nameField.setAttribute("value", "your name"); 
				nameField.setAttribute("placeholder", ""); 
				console.log("nameField.onblur triggered"); 
			}
		}; 
*/
		
/*
		
		emailField.onfocus = function(){
			emailField.setAttribute("value", ""); 
			emailField.setAttribute("placeholder", "your email"); 
		}; 
		
		emailField.onblur = function(){ 
			emailField.setAttribute("value", "your email"); 
			emailField.setAttribute("placeholder", ""); 
		}; 
*/
	</script> 
	</body>
</html>