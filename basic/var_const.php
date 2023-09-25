<?php

// variables are case sensitive
// class names, function names, keywords are case insensitive
# Identifiers are names that are helpful in uniquely recognizing (used to name) a class, a function, a constant, or a variable.

$var = "variable";
$v = &$var; // reference variable

// constants can be defined in two ways (constant do not require $ char at the start of var)

# 1 define fn defines constant at run time so they can be used in conditional statements 
if(true)
{
    define("PI",3.14); // doesn't work with const 
}
// define("PI".$var,3.14); // this is valid
echo PI;

# 2 const keyword defines constant at compile time (it is a language construct )
const PIV = 3.14;
echo PIV;

// variable variables (dynamic variable creating)
$foo = 'bar';
$$foo = 'baz'; // $."$foo" = $bar
echo $bar;




