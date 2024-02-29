<!-- Suppose following books.xml is loaded into xmlDoc. Get the first
<book> element and change the ''category'' attribute value to “food”
using XML DOM -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOM xml</title>
</head>

<body style="background-color:black; color:red">
    <h3>
        <?php
        $xmlDoc = new DOMDocument();
        $xmlDoc->preserveWhiteSpace = false;
        $xmlDoc->load("books.xml");
        $book = $xmlDoc->getElementsByTagName("book")->item(0);
        $attr = $book->attributes->getNamedItem("category");
        // print_r( $attr->nodeValue );
        $attr->nodeValue = "food";
        // print_r( $attr->nodeValue );


        $book = $xmlDoc->getElementsByTagName("book")->item(1);
        $book->attributes->getNamedItem("category")->nodeValue = "cooking";

        $xmlDoc->save("books.xml");
        echo htmlspecialchars($xmlDoc->saveXML());
        // echo $xmlDoc;
        ?>
    </h3>
</body>

</html>