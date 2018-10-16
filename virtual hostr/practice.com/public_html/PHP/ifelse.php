<!DOCTYPE html>
<html>
<head>
	<title>php codes</title>
</head>
<body>
<?php

$dt =date("H");


if ($dt>"24")
{
	echo "Good after Noon !";

}
else if ($dt == "12")
{
	echo "About to half of day";

}

else
{
	echo "Good Evening Boy!";

}




?>



</body>
</html>
