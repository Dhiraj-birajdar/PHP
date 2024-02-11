<?php
session_start();

$_SESSION['tm'] = time();
if (isset($_SESSION['counter'])) {
    $_SESSION['counter'] += 1;
} else {
    $_SESSION['counter'] = 1;
}
$msg = "you have visited this page <span style='color: red; font-size: 38px;'>" . $_SESSION['counter'] . "</span> times in this session";
if ($_SESSION['counter'] > 9) {
    unset($_SESSION['counter']); // resets single session variable
    // session_unset(); // removes all session variables
    // session_destroy(); // desttoys session
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
</head>

<body bgcolor="black" text="yellow">
    <form action="SessionExpire.php" method="POST">
        name: <input type="text" name="txt" > <br>
        <input type="submit" name="ok" value="Session check" >
    </form>
    <h2> <?php
            echo $msg . "<br>";
            ?> </h2>

</body>

</html>