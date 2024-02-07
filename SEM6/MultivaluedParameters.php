<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multivalued parameters</title>
</head>
<body>
<fieldset>
        <legend>Multivalued parameters</legend>
        <form action="#" method="GET">
            Select options: 
            <input type="checkbox" name="languages[]" value="C">C
            <input type="checkbox" name="languages[]" value="C++">C++
            <input type="checkbox" name="languages[]" value="C#">C#
            <input type="checkbox" name="languages[]" value="php">php
            <input type="checkbox" name="languages[]" value="javascript">javascript
            <input type="checkbox" name="languages[]" value="python">python
            <input type="checkbox" name="languages[]" value="java">java
            <br><input type="submit" name="ok" value="submit">
        </form>
    </fieldset>
    <?php
    if(isset($_GET["languages"])){
        echo "your selection: <br>";
        foreach($_GET["languages"] as $s){
            echo $s."<br>";
        }
    }
    ?>
</body>
</html>