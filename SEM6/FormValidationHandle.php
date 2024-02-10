<?php
echo "<h3>";
if (isset($_POST['ok'])) {

    if (!empty($_POST["name"])) {
        echo "Name: " . $_POST['name'] . "<br>";
    } else {
        echo "Name is missing <br>";
    }

    if (!empty($_POST["username"]) and strlen($_POST['username']) >= 5) {
        echo "UserName: " . $_POST['username'] . "<br>";
    } else {
        echo "UserName should be atleast 5 characters <br>";
    }

    if (!empty($_POST["pass"]) and strlen($_POST['pass']) >= 5) {
        echo "Password: " . $_POST['pass'] . "<br>";
    } else {
        echo "Password should be atleast 5 characters <br>";
    }


}
echo "</h3>";
