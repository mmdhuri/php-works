
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>While Loop </title>
	<?php
include("bootstraplink.php");
?>
</head>
<body>
<?php
include("include/header.php");
?>
	<h1>PHP While loop</h1>
	<?php
		$grade=0;
// INfinite WhileLoop
		//while ($grade<20) {
			//echo "<p>This is While Loop $grade</p>";
			
		//}

		while ($grade<20) {
			echo "<p>This is While Loop $grade</p>";
			$grade++;
		}


	?>
</div>
</body>
</html>