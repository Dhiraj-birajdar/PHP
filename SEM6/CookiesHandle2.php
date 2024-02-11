<?php

echo "<h2>";

if(isset($_COOKIE['id'])){
    echo "Product ID: ". $_COOKIE['id']. "<br>";
    echo "Product Name: ". $_COOKIE['name']. "<br>";
}else{
    echo "no cookies found";
}
echo "</h2>";