<?php

$f = fopen("file.csv", "a+");
while(!feof($f))
echo fgetc($f); // same as fread($f,1);

rewind($f);
echo "<br><br>".fgets($f)."<br>";

rewind($f);
print_r(fgetcsv($f));
// fputs($f, "\nwill, male, uk"); // alias of fwrite($f, "string", 5);

fclose($f);