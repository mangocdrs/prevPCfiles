<!DOCTYPE html>
<html>
<head>
	<title>php codes</title>
</head>
<body>





<?php
$x = "global variable"; // global scope

function myTest() {
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
} 

function secondFunc()
{
	$z="local variable";
	 echo "<p>Variable z inside function is: $z</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p><br>";

secondFunc();

echo "<p>Variable z  outside function is: $z</p><br>";
?>



</body>
</html>
