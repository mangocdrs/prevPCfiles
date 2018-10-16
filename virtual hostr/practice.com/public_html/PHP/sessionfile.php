<?php
include 'startsession.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>php code</title>
</head>
<body>
<?php

$_SESSION["fav"] ="green";
$_SESSION["favanimal"] ="Camel";
echo "Session variables are set <br><br>";
echo $_SESSION["fav"];
print_r($_SESSION);
?>
</body>
</html>