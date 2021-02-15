
<html lang="en">
	<head>
		
		<title>Addition</title>
	</head>
	<body>
		<form method="post">
		<h3> <b>Enter the first number</b></h3>
		<input type="text" name="first"> <br><br>
		<h3> <b>Enter the second number</b></h3>
		<input type="text" name="second"> <br><br>
		<input type="submit" name="submit">
		<h2><b>Result</b></h2>
		<?php
		if(isset($_POST['submit'])) {
			$flag=true;
			$sum=0;
			$first=$_POST['first'];
			if(!is_numeric($first)){
			$flag = false; 
			echo "Enter the first number again<br>"; 
		}
		
		$second=$_POST['second'];
		if(!is_numeric($second)){
			$flag = false; 
			echo "Enter the second number again"; 
		}
		
		if($flag){
		$sum=$first+$second;
			echo $sum;
			}
		}
		?>

		</form>
	</body>
	</html>
