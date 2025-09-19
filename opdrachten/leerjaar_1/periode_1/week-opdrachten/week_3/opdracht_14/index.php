<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 14</title>
    <link rel="stylesheet" href="../opdracht_14/css/style.css">
</head>
<body>
    <?php
        // vars for task 1
        $input = 100;
        $reference = 100;

        // vars for task 2
        $calories = rand();
        $carbs = rand();
        $protein = rand();
        $fat = rand();
        $isDietApproved = true;

        // vars for task 3
        $age = rand(0, 100);
        $gender = (rand(0,1) === 0) ? "male" : "female";
        $lastVisit = "18/09/2025";
        $currentDate = "18/09/2025";

        // task 1
        function checkInput($input, $reference){
            if($input > $reference){
                echo "je input is groter dan $reference <br>";
            }elseif($input == $reference){
                echo "je input is gelijk aan $reference <br>";
            }elseif($input < $reference){
                echo "je input is kleiner dan $reference <br>";
            }
        }

        checkInput($input, $reference);

        // task 2
        function getList($calories, $carbs, $protein, $fat, $isDietApproved){
            if($isDietApproved == true){
                echo '<div class="meal-allowed">donders je mag dit eten dit zijn de voedings waarden.<br> calories: ' . $calories . '<br> carbs: ' . $carbs . ' <br> protein: ' . $protein . '<br> fat: ' . $fat . ' </div>';
            }else{
                echo '<div class="meal-not-ok">weet je dat wel zeker bolle? Zouden we dit toch maar niet doen?</div>';
            }
        }
        echo "<br>";
        getList($calories, $carbs, $protein, $fat, $isDietApproved);

        // task 3 
        function checkRegistration($age, $gender, $lastVisit, $currentDate){
            if($age < 18 && $gender == "female" && $lastVisit != $currentDate){
                echo "<br>Dit is een hele grote rode WAARSCHUWING!!";
                return;
            }

            if($age < 18){
                echo "Gaan we nie doen kerl! Jij bent te jong. <br>";
            };
            
            if($gender == "female"){
                echo "Er komt me toch een event aan. Ladies night in de videotheek. Kom zeker langs. <br>";
            }
            
            if($lastVisit != $currentDate){
                echo "Donders dikke korting voor jou. <br>";
            };

        }
        echo "<br>";
        checkRegistration($age, $gender, $lastVisit, $currentDate);
    ?>
</body>
</html>