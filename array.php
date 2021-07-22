<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP Array</title>
	<?php
include("bootstraplink.php");
?>
</head>
<body>

<?php
include("include/header.php");
?>
	<h1>PHP - Array</h1>
		<?php
		//A variable
			$num=3;
			//An Array //Only one data type
			$numbers=array(1,2,3,4,5,6,7,8,9,10);
			echo $numbers[2];
			$size=count($numbers);
			echo '<br>Size is : '.$size.'';

			for ($count=0; $count <$size ; $count++) { 
				echo "<p>$numbers[$count]</p>";
			}

		?>
</div>
</body>
</html>