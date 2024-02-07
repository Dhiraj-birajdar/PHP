/*Q.1 Write a PHP script for the following: Design a form having a text box and a drop down list
containing any 3 separators(e.g. #, |, %, @, ! or comma) accept a strings from the user and also a
separator.
a. Split the string into separate words using the given separator.
b. Replace all the occurrences of separator in the given string with some other separator.
c. Find the last word in the given string.*/

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q1</title>
</head>

<body>
    <form action="#" method="post">
        <label for="txt">Enter String: </label>
        <br>
        <textarea name="txt" cols="30" rows="10"></textarea>

        <br><br>
        <label for="separator">Choose Separator: </label>
        <select name="separator" id="cars">
            <option value="#">#</option>
            <option value="|">|</option>
            <option value="@">@</option>
        </select>
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $str = chop($_POST["txt"]);
    $separator = $_POST["separator"];
    $words = explode(" ", $str);
    $str2 = str_replace($separator, "*", $str);
    echo "<h1> --" . print_r($words) . "-- </h1>";
    echo "<h1>++" . end($words) . "++</h1>";
    echo "<h1>%%" . $str2 . "%%</h1>";
    echo "<h1>!! $separator !!</h1>";

    // echo "<a href=\"Q1.php\"> <button>Back</button></a>";
}

?>