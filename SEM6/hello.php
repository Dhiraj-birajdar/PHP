<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>my first php </h1>
    <form action="#" method="get">
        <label for="name">Name: </label>
        <input type="text" name="name">
        <input type="submit" name="submit" value="submit">
        <br>
        <input type="file" name="file" id="">
    </form>
    <?php 
    // foreach ($_SERVER as $key => $value) {
    //     echo "<h2>".$key . ": " . $value ."</h2>";
    // }
    // if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_GET["submit"])){
        // echo QUERY_STRING;
        foreach ($_GET as $key => $value) {
            echo "<h4>".$key . ": " . $value ."</h4>";
        }
        echo "<hr>";
        foreach ($_FILES['file'] as $key => $value) {
            echo "<h4>".$key . ": " . $value ."</h4>";
        }
    }
    ?>
</body>
</html>