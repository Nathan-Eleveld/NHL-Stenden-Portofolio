<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP?</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <main>
        <?php
            $lastName = "Van Winteren";
            $age = 33;
            $yearsCollecting = 4;
            $guitarAge = 132;
            $horseAge = 8;
            $ammountOfCars = 33;
            $ammountOfHorses = 37;
            $ammountOfInstruments = 29;

            echo "<p>De heer $lastName, $age jaar, verzamelt al $yearsCollecting jaar bijzondere objecten. $lastName, heeft momenteel $ammountOfCars
                auto's, $ammountOfHorses paarden en $ammountOfInstruments zeldzame muziekinstrumenten. Het zeldzaamste instrument in het bezit van $lastName
                is een $guitarAge jaar oude gitaar. Zijn lievelingspaard is Bensley, de $horseAge jarige hengst.
            </p>";

            echo "<p>De heer <i>$lastName</i>, <b>$age</b> jaar, verzamelt al <b>$yearsCollecting</b> jaar bijzondere <u>objecten</u>. <i>$lastName</i>, heeft momenteel <b>$ammountOfCars</b>
                <u>auto's</u>, <b>$ammountOfHorses</b> paarden en <b>$ammountOfInstruments</b> zeldzame <u>muziekinstrumenten</u>. Het zeldzaamste <u>instrument</u> in het bezit van <i>$lastName</i>
                is een <b>$guitarAge</b> jaar oude <u>gitaar</u>. Zijn lievelingspaard is <i>Bensley</i>, de <b>$horseAge</b> jarige hengst.
            </p>";
        ?>
    </main>
</body>
</html>