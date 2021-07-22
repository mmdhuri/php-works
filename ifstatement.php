
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>If-Else Statement </title>
<?php
include("bootstraplink.php");
?>
</head>
<body>
<?php
$title="If Else statement";

include("include/header.php");
?>

	<h1>If-Else Statement  </h1>
	<?php
		//if statement
	
	$grade=50;
	if ($grade >= 50) {
		echo '<h3 style="Color:green">You have passed!!!</h3>';
	}else{
		echo '<h3 style="Color:red">You have failed!!!</h3>';
	}

	//IF else-if 

	$grade='A';
	if ($grade=='A') {
		echo '<h3 style="color:green">Excellent!!!</h3>';
	}elseif($grade=='B'){
		echo '<h3 style="color:blue">Good!!!</h3>';
	}else{
		echo '<h3 style="Color:red">You have failed!!!</h3>';
	}

	?>
</div>
</body></html>