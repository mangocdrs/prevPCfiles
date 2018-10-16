<!DOCTYPE html>
<html>
<head>
	<title>php codes</title>
</head>
<body>

	<?php

function secondFunc()
{
global $z;

$z="global keyword";
}

secondFunc();
echo "<p>Variable z  outside function is: $z</p><br>";
?>



</body>
</html>
