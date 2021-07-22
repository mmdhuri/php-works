<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Date and Time manipulation </title>
	<?php
include("bootstraplink.php");
?>
</head>
<body>

<?php
include("include/header.php");
?>
	<h1>PHP Date and Time manipulation</h1>
	<?php
	$date=getdate();
	echo "Today's date : ";
		echo $date['mday'].'<br>';
		echo "Month is : ";
		echo $date['mon'].'<br>';
		echo "Year is : ";
		echo $date['year'].'<br>';

		echo "Today's date : ".$date['mday']."/".$date['mon']."/".$date['year']."<br>";
		echo time()."<br>";

		print date("m/d/y g.i.a<br>",time())."<br>";

	?>

</div>
</body>
</html>