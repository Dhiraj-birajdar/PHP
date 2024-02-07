<?php
        $name = "";
        if(isset($_GET["name"])){
            $name = $_GET["name"];
            echo "<h3>Sticky name : ".$_GET["name"]."</h3>";
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sticky Form</title>
</head>
<body>
<fieldset>
        <legend>Sticky Form</legend>
        <form action="#" method="GET">
            Name: <input type="text" name="name" value="<?php echo $name; ?>">
            <br><input type="submit" name="ok" value="Sticky">
        </form>
    </fieldset>
</body>
</html>