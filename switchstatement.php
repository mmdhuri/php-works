<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Switch Statement </title>

<?php
include("bootstraplink.php");
?>
</head>
<body>
<?php
include("include/header.php");
?>
	<h1>Switch Statement</h1>
	<?php
		$grade='B';
		switch ($grade) {
			case 'A':
				echo "<h3 style='color:green'>Excellent grade!!!</h3>";
				break;
			case 'B':
				echo "<h3 style='color:blue'>Good grade!!!</h3>";
			break;
			default:
				echo "<h3 style='color:red'>You are failed!!!</h3>";
				break;
		}
	 ?>
	</div>
</body>
</html>