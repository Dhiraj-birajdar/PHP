<!DOCTYPE html>
<html lang="en">
   <head>
     <meta charset="UTF=8">
     <meta name="viewport" content="width=device-width,initial scale=1.0">
      <title>Input</title>
   </head>
<body>
 <h2>
   <form method="post">
      <label for="n1">Integer 1:</label>
      <input type="number" name="n1" required>
      <br><br>
      <label for="n2">Integer 2:</label>
      <input type="number" name="n2" required>
      <br><br>
      <input type="submit" name="submit" value="Calculate">
   </form>
  <h2>
     <?php
	if(isset($_POST['submit'])){
	  $n1=$_POST["n1"];
          $n2=$_POST["n2"];
	  echo"<br><br>$n1%$n2=".mod($n1,$n2)."<br><br>";
	  printf("%d^%d=%d<br><br>",$n1,$n2,power($n1,$n2));
	  printf("Sum of %d natural number is %d<br><br>",$n1,sumn($n1));
	  printf("factorial of %d is %d<br><br>",$n2,factorial($n2));
	 
	}
	function mod($n1,$n2)
	{
	   return $n1 % $n2;
	}
	function power($n1,$n2)
	{
	   return $n1**$n2;
	}
	function sumn($n1)
	{
	   $s=0;
	   for($i=1;$i<=$n1;$i++)
	     $s+=$i;
	   return $s;
	}
	function factorial($n2)
	{
	   $f=1;
	   for($i=1;$i<=$n2;$i++)
	     $f*=$i;
	   return $f;
	}
     ?>
    </h2>
</body>
</html>