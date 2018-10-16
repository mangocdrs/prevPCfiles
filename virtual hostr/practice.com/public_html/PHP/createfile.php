<?php
$my_file = 'newfile.txt';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
?>