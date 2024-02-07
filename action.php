<?php

$str = $_POST["txt"];
$separator = $_POST["separator"];
$words = explode(" ",$str);
echo "<h1> --". print_r($words) ."-- </h1>";
echo "<h1>++". end($words)."++</h1>";

echo "<a href=\"Q1.php\"> <button>Back</button></a>";