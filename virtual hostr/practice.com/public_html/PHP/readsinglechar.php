<?php
$myfile=fopen("file1.txt","r") or die ("enable to open file");
while(!feof($myfile))
{
echo fgetc($myfile);
echo "<br>";
}
fclose($myfile);
?>