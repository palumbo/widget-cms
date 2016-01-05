<html> 
	<head> 
		<title>Audible Search Field</title>
		<style> 
			body { font-family: sans-serif; }
			form { 
					width: 100px; 
					height: 100px; 					
					position: absolute; 
					top: 0; 
					bottom: 0; 
					left: 0; 
					right: 0; 
					margin: auto;  
			}	
			
			.red { 
				width: 100px; 
				height: 100px; 					
				position: absolute; 
				top: 0; 
				bottom: 0; 
				left: 0; 
				right: 0; 
				margin: auto;  
				border-color: red; 
			}
		</style> 
	</head>
	
	<body> 
		
		<div id="form"> 
		<form> 
			<input type="text" id="text" value="Search for a good book" placeholder=""> 
		</form>
		</div>
						
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>	
	<script>
		
		var textField = document.getElementById('text'); 

		textField.onblur = function(){ 
			if (textField.getAttribute("value") === "") { 
				textField.setAttribute("value", "Search for a good book"); 
				textField.setAttribute("placeholder", ""); 
				console.log("onblur triggered"); 
			}
		};
		
		textField.onfocus = function(){ 
			if (textField.getAttribute("value") === "Search for a good book") { 
				textField.setAttribute("value", ""); 
				textField.setAttribute("placeholder", "Search for a good book"); 
				console.log('onfocus triggered'); 
			}
		};
		

/*
		textField.onmouseover = function(){ 
			if (textField.getAttribute("value") === "Search for a good book") { 
				textField.setAttribute("value", ""); 
				textField.setAttribute("placeholder", "Search for a good book"); 
				
				// return it back to normal 
				setTime(0); 
			};			
		};
*/
		
		
/*
		textField.onmouseout = function(){ 
			if (textField.getAttribute("placeholder") === "Search for a good book") { 
				textField.setAttribute("value", "Search for a good book"); 
				textField.setAttribute("placeholder", ""); 
			};
		};
	
*/
		
/*
		textField.onblur = function(){ 
			textField.setAttribute("value", "Search for a good book"); 
			textField.setAttribute("placeholder", ""); 
		}; 
		
		textField.onfocus = function(){ 
			textField.setAttribute("value", ""); 
			textField.setAttribute("placeholder", "Search for a good book"); 	
		}; 
*/
		
/*
		textField.onmouseover = function(){ 
			textField.setAttribute("value", ""); 
			textField.setAttribute("placeholder", "Search for a good book"); 
		}; 
		
		textField.onmouseout = function(){ 
			textField.setAttribute("value", "Search for a good book"); 
			textField.setAttribute("placeholder", ""); 
		}; 
*/
		
	</script> 
	</body>
</html>