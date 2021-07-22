<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User define function </title>
	<?php
include("bootstraplink.php");
?>
</head>
<body>

<?php
include("include/header.php");
?>
	<h1>PHP User Define Functions</h1>
	<?php 
	//Define Function
		function writemessage(){
			echo "Good morning friends";
		}
	//Call Function
		writemessage();

		echo "<hr>";

		writemessage();
	echo "<hr>";
	//Function with parameters
		 function sum($num1,$num2)
		{
			$addition=$num1+$num2;
			echo "Addition is of $num1 and $num2 is : $addition <br>";
		}

			function changenum($num){
				$num=$num+10;
				echo $num; 
			}

		$num=400;

		sum(10,20);
		sum(100,200);
		sum("45","29");
		echo "<hr>";
		changenum($num);
		echo "<hr>";
		
	?>
</div>
</body>
</html>