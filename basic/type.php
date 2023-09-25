<?php
declare(strict_types=1);

// scalar types
// int ,float, boolean, string

// boolean false = 0, "", "0", [], 0.0, false, null, empty object
// boolean true = everything else
$i = 4
$f = (string) $i; // casting

//compound types
// array, object, callable, iterable

class Person
{
    public $name = "noname";
    function name($newName)
    {
        $this -> name = $newName;
    }
}

$p = new Person();
echo "<h1>$p->name</h1> </br>";
$p->name("Dhiraj");
echo "$p->name".'</br>';
var_dump($p);

//special types
//resource, null


function sum($a, $b)
{
    var_dump($a);
    return $a + $b;
}

echo sum(1,2)."<br>";
echo sum("1","2")."<br>";

//strict type declared on first line
function mul(int $a, int $b)
{
    return $a + $b;
}

echo mul(1,2)."<br>";
echo mul("1","2")."<br>";



