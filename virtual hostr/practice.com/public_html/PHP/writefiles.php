<?php
$myfile=fopen("newfile.txt", "w") or die ("can not open the file");
$txt=" Jhon DOe \n";
fwrite($myfile,$txt);
fclose($myfile);

?>