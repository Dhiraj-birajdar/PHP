<?php

$a = 1;
$b = '1';

echo $a == $b; // camparison after type juggling(casting)
echo '<br>';
$r = (int) $a === $b; // camparison without type juggling ( checks same type)     raw comparison true comparison
echo $r;
echo '<br>';
echo $a && $b;
echo '<br>';
$op = `ls -l`;
echo $op;

if($a == $b)
    echo "fake comparison <br>";
elseif($a === $b) //else if works to
    echo "true comparison <br>";