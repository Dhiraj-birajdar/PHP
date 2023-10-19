<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>my first php </h1>
    <?php echo"hello world from php";
    
    ?>
    <?php
$p = "basic/";
$d = opendir("basic/");
$s = readdir($d);
echo $s."<br>hello";
?>
</body>
</html>