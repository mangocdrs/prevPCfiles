<!DOCTYPE html>
<html>
<head>
	<title>php codes</title>
</head>
<body>





<?php


$y="THis for G";
function myFunc()
{
	$GLOBALS['y']="Not fot G ok";



}

myFunc();

echo $y;



?>



</body>
</html>
