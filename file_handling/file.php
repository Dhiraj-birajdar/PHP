<?php

$f = fopen("file.txt", 'w+');
$f = fopen("file1.txt", 'w+');
// echo fread($f,10 )."<br>";
fwrite($f, "PHP is a server side scripted language.");
// print_r(stat("file.txt"));
$path = "../basic/file.txt";
echo basename($path);
echo basename($path, '.txt');
echo pathinfo($path, PATHINFO_EXTENSION);
echo "<br>".$f."<br><br><br>";

// rename can be used to move files to same as linux mv
echo rename("file.txt", "../file.txt");
// echo unlink("file1.txt");
copy("file1.txt","../file.txt");