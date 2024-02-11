<?php
// header("Location: http://www.youtube.com");
function sanitize($data){
    return htmlspecialchars(stripslashes(trim($data))) ;
}
echo "<h3>";
if (isset($_POST['ok'])) {

    if (!empty($_POST["name"])) {
        echo "Name: " . sanitize($_POST['name']) . "<br>";
    } else {
        echo "Name is missing <br>";
    }

    if (!empty($_POST["username"]) and strlen($_POST['username']) >= 5) {
        echo "UserName: " . sanitize($_POST['username']) . "<br>";
    } else {
        echo "UserName should be atleast 5 characters <br>";
    }

    if (!empty($_POST["pass"]) and strlen($_POST['pass']) >= 5) {
        echo "Password: " . sanitize($_POST['pass']) . "<br>";
    } else {
        echo "Password should be atleast 5 characters <br>";
    }


}
echo "</h3>";
