<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oprdacht 13</title>
    <link rel="stylesheet" href="../opdracht_13/css/style.css">
</head>
<body>
    <main>
        <div class="content">
            <img src="../opdracht_13/img/image-omelette.jpeg" alt="image-omelette">

            <h1>Simple Omelette Recipe</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut voluptates nihil, ratione quasi, cumque odit velit sapiente, repellat quod nemo quos voluptate debitis. Repellat ratione possimus ut labore at quidem!</p>

            <div class="preptime">
                <h3>Preperation time</h3>
                <ul>
                    <li>Total: 10 min</li>
                    <li>Prep: 5 min</li>
                    <li>cooking: 5 min</li>
                </ul>
            </div>

            <h2>Ingredients</h2>
            <ul class="underline">
                <li>eggs</li>
                <li>salt</li>
                <li>pepper</li>
                <li>oil</li>
                <li>cheese</li>
            </ul>

            <div class="line"></div>

            <h2>Instructions</h2>
            <ol class="underline">
                <li><b>Lorem ipsum dolor sit</b> amet consectetur adipisicing elit. Esse inventore qui assumenda quisquam nihil modi eligendi. Itaque ab nisi maxime, aliquid rerum cum hic, optio earum consectetur magni laboriosam doloribus.</li>
                <li><b>Lorem ipsum dolor sit</b> amet consectetur adipisicing elit. Ipsum incidunt, ab dolor, sequi tempore nulla deserunt voluptatum ratione itaque excepturi autem dolores, dolorum laudantium soluta nostrum aut ea magnam veritatis.</li>
                <li><b>Lorem ipsum dolor sit</b> amet, consectetur adipisicing elit. Laborum dolor sed et laboriosam! Ducimus id veniam obcaecati similique! Laudantium, accusamus nihil. Mollitia quibusdam dolores doloremque modi itaque, doloribus vitae. Rerum.</li>
                <li><b>Lorem ipsum dolor sit</b> amet consectetur adipisicing elit. Fugiat unde impedit quos, ex veniam dignissimos est. Harum ullam maiores omnis, vel aliquid ipsam eaque asperiores dolorum alias vero dolor enim!</li>
                <li><b>Lorem ipsum dolor sit</b> amet consectetur adipisicing elit. Enim exercitationem iure tempore reprehenderit voluptatem quod quidem, ea animi, temporibus non quasi recusandae. Fuga magni, illo totam autem maiores provident nulla?</li>
            </ol>
            
            <h2>Nutrition</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio tempora laborum, unde, quos tenetur ipsam dolor ratione laudantium, vero perferendis ex modi nemo. Debitis commodi, adipisci ad unde quod amet?</p>
            <table>
                <tr class="no-line">
                    <td>Calories</td>
                    <td class="color-brown">277kcal</td>
                </tr>
                <tr>
                    <td>Carbs</td>
                    <td class="color-brown">0g</td>
                </tr>
                <tr>
                    <td>Protein</td>
                    <td class="color-brown">20g</td>
                </tr>
                <tr>
                    <td>Fat</td>
                    <td class="color-brown">22g</td>
                </tr>
            </table>
        </div>


        <div class="content">

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

        </div>
    </main>
</body>
</html>