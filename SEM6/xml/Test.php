<?php
// Your XML content
$xmlContent = <<<XML
<?xml version='1.0' encoding='UTF-8'?>
<bookstore>
    <book category='cooking'>
        <title lang='en'>Everyday Italian</title>
        <author>Giada De Laurentiis</author>
        <year>2005</year>
        <price>30.00</price>
    </book>
</bookstore>
XML;

// Load the XML content into a DOMDocument
$xmlDoc = new DOMDocument();
$xmlDoc->loadXML($xmlContent);

// Get the first <book> element
$firstBook = $xmlDoc->getElementsByTagName('book')->item(0);

// Change the 'category' attribute value to "food"
$firstBook->setAttribute('category', 'food');

// Save the modified XML document
$newXmlContent = $xmlDoc->saveXML();

// Output the modified XML content
echo $newXmlContent;
?>
