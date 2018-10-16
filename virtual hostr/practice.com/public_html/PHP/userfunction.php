<!DOCTYPE html>
<html>
<head>
	<title>php code</title>
</head>
<body>

	<?php
function myinfo($fname,$year)
{
	echo "$fname  Refrense . Born in $year <br>";
}

myinfo("Kaleem","1992");
myinfo("Talha","1978");

echo "<br>set default value to function <br>";


function  myage($minage = 10)
{
	echo "The age is : $minage <br>";
}

myage(35);
myage(65);
myage();
myage(135);


	?>


</body>
</html>