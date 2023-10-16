<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input</title>
</head>

<body>
    <form method="post">
        <label for="n1">First Number :</label>
        <input type="text" name="n1">
        <br>
        <label for="n2">Second Number :</label>
        <input type="text" name="n2">
        <br>
        <label for="str">String :</label>
        <input type="text" name="str">
        <br>
        <input type="submit" name="submit" value="Calculate">
    </form>

    <?php
    if (isset($_POST['submit'])){

        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        $str = $_POST["str"];
        
        echo "<br><br>$n1 % $n2 = " . $n1 % $n2 . "<br><br>";
        printf("%d ^ %d = %d<br><br>", $n1, $n2, $n1 ** $n2);
        
        echo "<br>" . var_dump(hash('sha256', $str)), "<br>";
    }
    ?>

</body>

</html>