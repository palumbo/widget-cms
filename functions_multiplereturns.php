<html> 
	<head> 
		<title>Functions: Multiple Returns</title>
	</head>
	
	<body> 

		<?php // creating a function w/ multiple returns
			
			function add_subt($val1, $val2){ 
				$add = $val1 + $val2; 
				$subt = $val1 - $val2; 
				return [$add, $subt]; 
			}
			
		?>
		
		<?php $result_array = add_subt(10,5); 
			echo "Add: {$result_array[0]} <br /> Subtract: {$result_array[1]}"; 
		?>
		
		<?php list($add_result, $subt_result) = add_subt(10, 10); 
			echo "Add: {$add_result} <br /> Subtract: {$subt_result}"; 
		?>			
		
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>	
	<script src=""></script> 
	</body>
</html>