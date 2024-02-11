<?php
setcookie("id", '121');
setcookie("name", 'laptop');
if (!isset($_COOKIE['access'])) {
    setcookie("access", 1);
} else {
    $count = $_COOKIE['access'];
    echo "<h2> cookies set. <br>you have accessed this site $count times </h2>";
    setcookie('access', ++$count);
}
if (isset($_POST['color'])) {
    $bg = $_POST['bg'];
    $fg = $_POST['fg'];
    setcookie('bg', $bg);
    setcookie('fg', $fg);
}else{
    $bg = $_COOKIE['bg'];
    $fg = $_COOKIE['fg'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<!-- <body bgcolor="<?= $_COOKIE['bg'] ?? 'white' ?>" text="<?= $_COOKIE['fg'] ?? 'violet' ?>"> -->
<body bgcolor="<?= $bg ?? 'white' ?>" text="<?= $fg ?? 'violet' ?>">
    <h1>color change using cookies</h1>
    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta a expedita voluptates voluptas veniam perspiciatis cum asperiores hic voluptate nulla accusantium commodi totam rem, illum dolores labore deleniti vero eos.</h3>
    <h4>
        <?php echo "Background color: " . $_COOKIE['bg'];
        echo "<br> Foreground color: " . $_COOKIE['fg'];  ?>
    </h4>
</body>

</html>