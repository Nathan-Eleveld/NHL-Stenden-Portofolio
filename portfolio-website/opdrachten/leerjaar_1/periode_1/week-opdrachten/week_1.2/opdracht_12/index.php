<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 12</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php
            $input = 6;
            $i = $input;

            if($i < 1){
                echo "Ongeldig cijfer";
            }elseif($i == 1 || $i == 2 || $i == 3){
                echo "Heel slecht";
            }elseif($i == 4 || $i == 5){
                echo "Onvoldoende";
            }elseif($i == 6 || $i == 7){
                echo "Voldoende";
            }elseif($i == 8){
                echo "Goed";
            }elseif($i == 9){
                echo "Zeer goed";
            }elseif($i == 10){
                echo "Uitstekend";
            }elseif($i > 10){
                echo "Ongeldig cijfer";
            }

            echo "<br>";

            switch ($i) {
                case ($i < 1):
                    echo "Ongeldig cijfer";
                    break;
                case 1:
                case 2:
                case 3:
                    echo "Heel slecht";
                    break;
                case 4:
                case 5:
                    echo "Onvoldoende";
                    break;
                case 6:
                case 7:
                    echo "Voldoende";
                    break;
                case 8:
                    echo "Goed";
                    break;
                case 9:
                    echo "Zeer goed";
                    break;
                case 10:
                    echo "Uitstekend";
                    break;
                case ($i > 10):
                    echo "Ongeldig cijfer";
                    break;
            }

        ?>
    </main>
</body>
</html>