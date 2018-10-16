<?php
$myfile= fopen("file1.txt", "r") or die ("enable to open file!");

$file=fread($myfile,filesize("file1.txt"));
echo $file;
fclose($myfile);



?>