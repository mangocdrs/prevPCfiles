<!DOCTYPE html>
<html>
<head>
	<title>php code</title>
</head>
<body>
<?php 
$mularr= array(
array("Jhelum",28,28),
array("Rawalpindi",56,78),
array("Multan",45,89),
array("Lahore",87,56)

);
for($row=0; $row <4 ; $row++)
{
echo "<p><b>Row Number</b></p>";

echo "<ul>";

for($col=0;$col <3; $col++)
{
	echo "<li>" .$mularr[$row][$col]. "</li>";
}

echo "<ul>";

}

	?>
</body>
</html>