<!DOCTYPE html>
<html>
<head>
	<title>php code</title>
</head>


<body>

<?php

$myarr= array("car","bike","Truck","bus");
echo count($myarr)."<br>";
$lenght= count($myarr);
echo "<br>".$myarr[0]."<br>";
echo "<br>".$myarr[1];
 echo "displaying array values with for loo<br>";

for ($x=0;$x<$lenght;$x++)

{

	echo $myarr[$x];
echo "<br>";


}

?>
</body>
</html>