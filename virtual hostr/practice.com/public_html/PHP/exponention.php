<!DOCTYPE html>
<html>
<head>
	<title>php codes</title>
</head>
<body>
<!-- <?php
$x=2;
$p=5;

echo "2 power 5 is " .$x **$p;




?> -->

<?php

$t = date("H");

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
?>



</body>
</html>
