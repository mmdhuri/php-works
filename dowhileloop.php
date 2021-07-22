<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Do While Loop </title>
	<?php
include("bootstraplink.php");
?>
</head>
<body>

<?php
include("include/header.php");
?>
	<h1>PHP Do While-Loop</h1>
	<?php
	$grade=1;
	//Infinite Do While loop
	//do {
			//echo "<p>This is do while loop $grade</p>";
			
		//} while ($grade<=10);
		
		do {
			echo "<p>This is do while loop $grade</p>";
			$grade++;
		} while ($grade<=10);
	?>
</div>
</body>
</html>