<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 7</title>
</head>
<body>
    <?php
        $set1 = [6, 4, 4, 1];
        $set2 = [8, 2, 6, 1];
        $set3 = [6, 8, 8, 2];

        $awnser1 = (($set1[0] - $set1[3]) * $set1[1]) + $set1[2];
        echo "antwoord 1 $awnser1";

        echo "<br>";

        $awnser2 = $set2[0] * $set2[2] / $set2[1] * $set2[3];
        echo "antwoord 2 $awnser2";

        echo "<br>";

        echo "antwoord 3 ", array_sum($set3);
    ?>
</body>
</html>