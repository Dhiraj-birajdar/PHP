<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SimpleXML</title>
</head>

<body style="background-color:black; color:red">
    <h3>
        <?php
        // read with simplexml
        // $data = simplexml_load_file("dataset.xml");
        // echo htmlspecialchars($data->asXML());

        // create xml with simplexml
        $cricketTeam = new SimpleXMLElement(" <CricketTeam/> ");
        $country = $cricketTeam->addChild("Country");
        $country->addAttribute("name", "india");
        $country->addChild('captain', 'm s dhoni');
        $country->addChild('wickets', 45);
        $country->addChild('run', 244);
        $country = $cricketTeam->addChild("Country");
        $country->addAttribute("name", "england");
        $country->addChild('captain', 'steve');
        $country->addChild('wickets', 45);
        $country->addChild('run', 244);
        $cricketTeam->asXML("cricket.xml");

        // convert xml simplexml <--> dom
        $dom = new DOMDocument();
        $dom->load("dataset.xml");

        $sxml = simplexml_import_dom($dom);
        echo $sxml->record[0]->first_name;

        $dom = dom_import_simplexml($sxml);
        // $dom->preserveWhiteSpace = false;
        // echo $dom->getElementsByTagName("record")->item(2)->firstChild;

        // modify xml with simplexml
        $s = simplexml_load_file("cricket.xml");
        $s->Country[1]->captain = "mark zuck";
        $s->asXML("cricket.xml");

        ?>
    </h3>
</body>

</html>