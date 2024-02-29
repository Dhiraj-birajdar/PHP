<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:black; color:red">
    <h4>

        <?php
    // $xml = simplexml_load_file("dataset.xml") or die("cannot open");
    // print_r($xml);
    $dom = new DOMDocument();
    $dom->load("dataset.xml");
    print_r($dom);

    ?>
    </h4>
    
</body>
</html>