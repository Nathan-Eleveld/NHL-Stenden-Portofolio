<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 16</title>
</head>
<body>
    <?php
        // <task 1>
        $colorwheel = ['oranje', 'geel', 'rood', 'groen', 'blauw', 'roze'];

        function outputColor(){
            global $colorwheel;

            $randomNumber = random_int(0, 5);

            $color = $colorwheel[$randomNumber];
            
            echo "Kleur is " . $color;
        }

        outputColor();
        // </task 1>

        echo "<br>";

        // <task 2>
        $colorwheel = ['oranje', 'oranje', 'geel', 'geel', 'rood', 'groen', 'blauw', 'roze'];

        function outputColor2(){
            global $colorwheel2;

            $randomNumber = random_int(0, 5);

            $color = $colorwheel2[$randomNumber];
            
            echo "Kleur is " . $color;
        }

        outputColor();
        // </task 2>

        echo "<br>";

        // <task 3>
        $areacodes = [14, 26, 12, 58, 34, 66, 7, 41];

        function biggestNumber($areacodes){
            rsort($areacodes);
            echo $areacodes[0];
        }

        biggestNumber($areacodes);
        // </task 3>

        echo "<br>";

        // <task 4>
        $areacodes2 = [14, 26, 12, 58, 34, 66, 7, 41];
        $targetNumber = 34;

        function findNumber($areacodes2, $targetNumber){
            for($i = 0; $i < count($areacodes2); $i++){
                if($areacodes2[$i] == $targetNumber){
                    echo "nummer gevonden op locatie " .$i;
                    return;
                }
            }
            echo "nummer is niet gevonden.";
        }

        findNumber($areacodes2, $targetNumber);
        // </task 4>

        echo "<br>";
        echo "<br>";
        
        // <task 5>

        echo "vormpje 1";
        echo "<br>";
        for($i = 0; $i < 10; $i++){
            echo "*";
        }

        echo "<br>";

        echo "vormpje 2";
        echo "<br>";
        for($j = 0; $j < 4; $j++){
            for($k = 0; $k < 10; $k++){
                echo "*";
            }
            echo "<br>";
        }

        echo "<br>";
        
        echo "vormpje 3";
        echo "<br>";
        for($l = 0; $l < 10; $l++){
            for($m = 0; $m < $l; $m++){
                echo "*";
            }
            echo "<br>";
        }

        echo "<br>";

        echo "vormpje 4";
        echo "<br>";
        for($n = 9; $n >=0; $n--){
            for($o = 0; $o < $n; $o++){
                echo "*";
            }
            echo "<br>";
        }
        // </task 5>

        echo "<br>";

        // <task 6>
        echo "vormpje 5";
        echo "<br>";
        for($p = 1; $p < 8; $p++){
            for($q = 1; $q < $p; $q++){
                echo $q . " ";
            }
            echo "<br>";
        }

        echo "<br>";

        echo "vormpje 6";
        echo "<br>";
        for($r = 7; $r >=1; $r--){
            for($s = 1; $s < $r; $s++){
                echo $s . " ";
            }
            echo "<br>";
        }
        
        echo "<br>";
        
        echo "vormpje 7";
        echo "<br>";
        for($r = 7; $r >=1; $r--){
            for($s = 1; $s < $r; $s++){
                echo $s . " ";
            }
            echo "<br>";
        }

        echo "<br>";

        echo "vormpje 8";
        echo "<br>";
        for($t = 0; $t < 5; $t++){
            for($u = 0; $u < $t; $u++){
                echo "*";
            }
            if($t < 4){
                echo "<br>";
            }
        }
        for($v = 0; $v < 5; $v++){
            for($x = 0; $x < $v; $x++){
                echo "*";
            }
            echo "<br>";
        }
        // </task 6>
    ?>
</body>
</html>