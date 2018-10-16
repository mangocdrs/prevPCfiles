<!DOCTYPE html>
<html>
<head>
	<title>php codes</title>
</head>
<body>
<?php

for($x=0; $x < 7 ;$x++)
{
	echo "Number is : $x <br>";

}
echo "<br> example is below<br>";

$myarr=array("bmw","audi","jaguar", "ferari","honda");
foreach ($myarr as $arr)

{
	echo "foreach example to diplay values:<br>";
	echo "$arr <br>";
}


?>





</body>
</html>
