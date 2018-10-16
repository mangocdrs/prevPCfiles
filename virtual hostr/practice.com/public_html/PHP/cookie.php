<?php 
include 'cookiefile.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>php code</title>
</head>
<body>

	<?php

if(!isset($_COOKIE[$cookie_name]))

{

	echo "Cookie name"."  " .$cookie_name."  "."it is not set!";
}
else

{
	 echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
 
}
	?>


</body>
</html>