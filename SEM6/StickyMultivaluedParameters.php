<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sticky Multivalued parameters</title>
</head>
<body>
<fieldset>
        <legend>Sticky Multivalued parameters</legend>
        <form action="#" method="GET">
            Select options: 
            <input type="checkbox" name="c" value="c" <?php if(isset($_GET["c"]) and isset($_GET["ok"])) echo "checked" ?> >C
            <input type="checkbox" name="c++" value="c++" <?php if(isset($_GET["c++"]) and isset($_GET["ok"])) echo "checked" ?> >C++
            <input type="checkbox" name="c#" value="c#" <?php if(isset($_GET["c#"]) and isset($_GET["ok"])) echo "checked" ?> >C#
            <input type="checkbox" name="php" value="php" <?php if(isset($_GET["php"]) and isset($_GET["ok"])) echo "checked" ?> >php
            <input type="checkbox" name="js" value="js" <?php if(isset($_GET["js"]) and isset($_GET["ok"])) echo "checked" ?> >javascript
            <input type="checkbox" name="py" value="python" <?php if(isset($_GET["py"]) and isset($_GET["ok"])) echo "checked" ?> >python
            <input type="checkbox" name="java" value="java" <?php if(isset($_GET["java"]) and isset($_GET["ok"])) echo "checked" ?> >java
            <br><input type="submit" name="ok" value="submit">
        </form>
    </fieldset>
    <?php
    if(isset($_GET["ok"])){
        echo "your selection: <br>";
        foreach($_GET as $s){
            echo $s."<br>";
        }
    }
    ?>
</body>
</html>