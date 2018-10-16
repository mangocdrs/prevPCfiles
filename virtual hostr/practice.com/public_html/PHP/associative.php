<!DOCTYPE html>
<html>
<head>
	<title>php code</title>
</head>
<body>

	<?php
$age = array("peter" => "35", "Mike" => "65" , "Sammual" => "15" );

	arsort($age);
echo "peter is " .$age['peter']. " "."is year old";


echo "<br>";

echo "Array values and  keys using foreach loop<br><br>";


foreach ($age as $x => $x_value) {
	echo "Key is " . $x . " ". "and values is " . " ". $x_value ."<br><br>";

}

	?>

</body>
</html>