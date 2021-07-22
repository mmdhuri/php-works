
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Index Page</title>
	<?php
include("bootstraplink.php");
?>
</head>
<body>


<?php
include("include/header.php");

?>
	<?php
		echo "This is Php Block";
		echo "<br>";
	?>


	<?php
	//Declare Variabe
		$name='Manish Dhuri';
		$age=21;
	//Echo Variable
		echo $name;
		echo "<h5>My name is ".$name."</h5>";
		echo "<h5>My age is ".$age."</h5>";

		echo '<h5>My name is '.$name.'</h5>';

	?>
</div>
</body>
</html>