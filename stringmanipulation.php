<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>String Manipulation </title>
	<?php
include("bootstraplink.php");
?>
</head>
<body>

<?php
include("include/header.php");
?>
	<h1>PHP String Manipulation</h1>
	<?php
	$String1="I am a fresher.";
	$String2="As a fresher i don't have any experience";
	$String3="manish dhuri";
	//Concatnation of Strings
	echo "<hr>";
	echo '<h4>Concatnation of Strings</h4>';
	echo $String1." ".$String2."<br>";

	//String transformation
	echo "<hr>";
	echo '<h4>String transformation</h4>';
	echo 'Uppercase First Letter using <b><u>ucfirst()</u></b> : '.ucfirst($String3).'<br>';
	echo 'Uppercase first Letter of each words using <b><u>ucwords()</u></b> : '.ucwords($String2).'<br>';
	echo 'Uppercase using <b><u>strtoupper()</u></b> : '.strtoupper($String3).'<br>';

	echo 'Lowercase using <b><u>strtolower()</u></b> : '.strtolower($String2).'<br>';
	echo "<hr>";
	echo 'Repeat String Using <b><u>str_repeat()</u></b> : '.str_repeat($String3, 4).'<br>';
	echo 'Repeat String Using <b><u>str_repeat(str_repeat())</u></b> : '.ucwords(str_repeat($String3, 4)).'<br>';
	echo "<hr>";
	echo 'Get a Substring <b><u>substr()</u></b> : '.substr($String1,4,9).'<br>';
	echo 'Get a Position <b><u>strpos()</u></b> : '.strpos($String1, "f").'<br>';

	echo "<hr>";
	echo 'Find a charecter D Using <b><u>strchr()</u></b> :'.strchr($String2,"d").'<br>';
	echo 'Find a charecter D Using <b><u>strchr()</u></b> :'.strchr($String2,"e").'<br>';

	?>
</div>
</body>
</html>