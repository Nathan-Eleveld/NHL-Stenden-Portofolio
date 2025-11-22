<?php
    $distances = array(
        "Berlin" => array(
            "Berlin" => 0,
            "Moscow" => 1607.99,
            "Paris" => 876.96,
            "Prague" => 280.34,
            "Rome" => 1181.67
        ),
        "Moscow" => array(
            "Berlin" => 1607.99,
            "Moscow" => 0,
            "Paris" => 2484.92,
            "Prague" => 1664.04,
            "Rome" => 2374.26
        ),
        "Paris" => array(
            "Berlin" => 876.96,
            "Moscow" => 641.31,
            "Paris" => 0,
            "Prague" => 885.38,
            "Rome" => 1105.76
        ),
        "Prague" => array(
            "Berlin" => 280.34,
            "Moscow" => 1664.04,
            "Paris" => 885.38,
            "Prague" => 0,
            "Rome" => 922
        ),
        "Rome" => array(
            "Berlin" => 1181.67,
            "Moscow" => 2374.26,
            "Paris" => 1105.76,
            "Prague" => 922,
            "Rome" => 0
        )
    );

    $dataIsValid = true;

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $startLoc = filter_input(INPUT_POST, "start");
        $endLoc = filter_input(INPUT_POST, "destination");

        if(!array_key_exists($startLoc, $distances)){
            $dataIsValid = false;
            echo "Blijf eens met je tengels van de start value's af!!!!<br>";
        }

        if(!array_key_exists($endLoc, $distances)){
            $dataIsValid = false;
            echo "Blijf eens met je tengels van de destination value's af!!!!<br>";
        }
    }

    function main($startLoc, $endLoc, $distances){
        $distance = $distances[$startLoc][$endLoc];
        $output = "The distance between $startLoc and $endLoc is $distance kilometers";
        echo $output;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 1</title>
</head>
<body>
    <?php
        function getAllOptions($distances){
            foreach($distances as $distance => $city){
                echo '<option value="' . $distance . '">' . $distance . '</option>';
            }
        }

        echo '
            <form action="index.php" method="post">
                <label for="start">Start</label>
                <select name="start" id="start">
        ';
        getAllOptions($distances);
        echo '
                </select>
                <label for="destination">Destination</label>
                <select name="destination" id="destination">
        ';
        getAllOptions($distances);
        echo '
                </select>
                <button type="submit">Bereken de afstand</button>
            </form>
        ';

        if($dataIsValid == true){
            main($startLoc, $endLoc, $distances);
        }
    ?>
</body>
</html>