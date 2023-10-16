
<center>
<h1 style="font-size: 3rem;">

<?php
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$str = $_POST["str"];

echo "<br><br>$n1 % $n2 = ".$n1 % $n2."<br><br>";
printf("%d ^ %d = %d<br><br>",$n1,$n2,$n1**$n2);

echo "<br>".var_dump(hash('sha256', $str)),"<br>";
?>
<a href="index.html"><button style="padding: 50px; border: 0;font-size: 2rem;cursor:pointer;">Back</button></a>
</h1>
</center>

