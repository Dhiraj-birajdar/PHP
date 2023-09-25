<?php

$global = 1; // global var scope
$g = 4;
function scope($parameter) // function parameter scope used only inside function
{
    global $global, $g;
    $g = 5;
    echo "global var => $global <br>$g <br>";
    static $stat = 0; // static var scope
    $local = 2;// local var scope
    echo "$local <br> $global <br> $parameter";
    $stat++;
    echo "<br>static var => $stat <br>";
}

scope(3);
scope(3);
scope(3);

echo "global var => $global <br>$g <br>";


$c = "k1";
$h = "abcz";

echo ++$c."<br>".++$h;

