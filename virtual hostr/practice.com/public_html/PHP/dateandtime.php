<!DOCTYPE html>
<html>
<head>
	<title>php code</title>
</head>
<body>

	&copy; 2010-<?php echo date("Y");?>
<br>
<br>
	<?php

echo "Today date in / form is :" . date("Y/m/d"). "<br>";

echo "Today date in - form is :" . date("Y-m-d"). "<br>";

echo "Today date in . form is :" . date("Y.m.d"). "<br>";

echo "Today is " . date("l");


echo "<br>";

echo "The Time is:" .date("h:i:sa");


echo "<br>";

echo "<br>";

date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa");

echo "<br>";
echo "<br>";

$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);

echo "<br>";
echo "<br>";

$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d);

echo "<br>";
echo "<br>";

$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";

	?>

</body>
</html>