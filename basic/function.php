<?php

declare(strict_types=1);


function sqr(int|string $a) : int|float {
    return $a * $a;
}

echo "<h1>".sqr('5')."</h1>";

// default arguments
function sum($a, $b=5) : int|float {
    return $a + $b;
}
echo "<h1>".sum(4)."</h1>";

// variable arguments
function var1(){
    echo "<h1>".func_num_args()."</h1>";
    echo "<h1>".print_r(func_get_args())."</h1>";

}
var1(1,2,3,4,5);