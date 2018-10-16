<!DOCTYPE html>
<html>
<head>
	<title>php codes</title>
</head>
<body>
<?php
$x="hello world";

echo strlen($x);
echo "<br>words in string <br>";

echo str_word_count($x);


echo "<br>Reverse of hello world is:<br>";

echo  strrev($x);

echo "<br> <World> position in this string is:<br>";

echo strpos($x, "world");

echo "<br>Repalce world with Macantosh:<br>";

echo str_replace("world","Macantosh",$x);



?>



</body>
</html>
