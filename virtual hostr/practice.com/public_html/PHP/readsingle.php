<?php
$myfile=fopen("file1.txt","r") or die ("enable to open file");
while(!feof($myfile))
{
echo fgets($myfile);
echo "<br>";
}
fclose($myfile);
?>