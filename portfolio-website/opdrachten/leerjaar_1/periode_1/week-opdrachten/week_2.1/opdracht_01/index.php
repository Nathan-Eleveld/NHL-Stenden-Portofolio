<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 1</title>
</head>
<body>
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

        function getAllCities($distances){
            foreach($distances as $distance){
                echo '<option value="'$distance[]'">'$distance[]'</option>';
            }
        };

        // echo "
        //     <form action="index.php" method="post">
        //     <label for="start">Start</label>
        //     <select name="start" id="start">
        // ";
        getAllCities($distances);

    ?>

    <form action="index.php" method="post">
        <label for="start">Start</label>
        <select name="start" id="start">
            <option value="Berlin">Berlin</option>
            <option value="Moscow">Moscow</option>
            <option value="Paris">Paris</option>
            <option value="Prague">Prague</option>
            <option value="Rome">Rome</option>
        </select>
        <label for="destination">Bestemming</label>
        <select name="destination" id="destination">
            <option value="Berlin">Berlin</option>
            <option value="Moscow">Moscow</option>
            <option value="Paris">Paris</option>
            <option value="Prague">Prague</option>
            <option value="Rome">Rome</option>
        </select>
    </form>

</body>
</html>