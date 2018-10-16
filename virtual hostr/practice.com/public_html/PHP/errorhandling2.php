<?php

$test=5;
function customError($errno, $errstr) {
  echo "<b>Error:</b> [$errno] $errstr";
}

//set error handler
set_error_handler("customError");
echo "hello";
//trigger error
echo($test);
?>