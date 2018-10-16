<!DOCTYPE html>
<html>
<head>
	<title>php codes</title>
</head>
<body>





<?php

 function myfunction()

 {
 	static $y=0;

 	echo $y;
 $y++;


 }

 myfunction();
 echo "<br>";
 myfunction();
  echo "<br>";
 myfunction();

?>



</body>
</html>
