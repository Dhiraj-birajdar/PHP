<?php
$d = opendir("../basic/");
$s = readdir($d);
echo $s."<br>hello";


$file = file("file.csv");
print_r($file);
$f = fopen("file.csv", 'r');
echo "<br>";
fpassthru($f);
fclose($f);

// readfile() reads file without fopen()
echo "<br><br>";
readfile("file1.txt");