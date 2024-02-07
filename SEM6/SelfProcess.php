<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Self Processing Page</title>
</head>
<body>
    <?php
        if(isset($_POST["pname"])){
            echo "<h3>POST method: ".$_POST["pname"]."</h3>";
        }elseif(isset($_GET["gname"])){
            echo "<h3>GET method: ".$_GET["gname"]."</h3>";
        }
    ?>
    <fieldset>
        <legend>POST Form</legend>
        <form action="#" method="POST">
            Name: <input type="text" name="pname">
            <br><input type="submit" name="pok" value="POST">
        </form>
    </fieldset>
        <br>
    <fieldset>
        <legend>GET Form</legend>
        <form action="#" method="GET">
            Name: <input type="text" name="gname">
            <br><input type="submit" name="gok" value="GET">
        </form>
    </fieldset>

</body>
</html>