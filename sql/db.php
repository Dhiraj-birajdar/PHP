<body style="background: black; color: white;">
    <h2>
        <?php
        // pg_connect("host=localhost dbname=edb user=enterprisedb password=postgres");
        $db = pg_connect("host=localhost dbname=products user=postgres password=root") or die("cannot connect");

        // $tb = pg_query($db,"CREATE TABLE cars (
//     brand VARCHAR(255),
//     model VARCHAR(255),
//     year INT
//   );") or die("couldn't create table");
        
        // pg_query($db,"INSERT INTO cars VALUES
//   ('Volvo', 'p1800', 1968),
//   ('BMW', 'M1', 1978),
//   ('Toyota', 'Celica', 1975);") or die("");
        

        $res = pg_query($db, "select * from cars;");

        while ($row = pg_fetch_row($res))
            echo "$row[0]  $row[1]  $row[2] <br>";

        echo "<br><br>";
        $res = pg_query($db, "select * from cars;");
        // rewind($res);
        while ($row = pg_fetch_array($res))
            echo "$row[0]  $row[1]  $row[2] <br>";

        echo "<br><br>";
        $res = pg_query($db, "select * from cars;");
        while ($row = pg_fetch_assoc($res))
            echo $row["brand"] . "    " . $row["model"] . "    " . $row["year"] . "<br>";

        echo "<br><br>";
        $res = pg_query($db, "select * from cars;");
        while ($row = pg_fetch_object($res))
            echo $row->brand. "    " . $row->model. "    " . $row->year . "<br>";



        pg_close($db);
        ?>
    </h2>
</body>