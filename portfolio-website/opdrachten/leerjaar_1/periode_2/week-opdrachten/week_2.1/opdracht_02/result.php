<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $name = filter_input(INPUT_POST, "name");
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        $type = filter_input(INPUT_POST, "type");
        $remark = filter_input(INPUT_POST, "remark");
        $globalEmail = filter_input(INPUT_POST, "globalEmail");
    }

    $dataIsValid = true;

    function dataValidation($name, $email, $type, $remark, $globalEmail, $dataIsValid){
        
        if(strlen($name) < 2){
            $dataIsValid = false;
            echo "Zou u een naam willen invullen? Word gewaardeerd.<br>";
        }

        if(empty($email)){
            $dataIsValid = false;
            echo "VUL EEN EMAIL IN!!!!<br>";
        }elseif(!$email){
            $dataIsValid = false;
            echo "De email is ongeldig.<br>";
        }

        $allowedTypes = ["student", "teacher"];
        if(!in_array($type, $allowedTypes, true)){
            $dataIsValid = false;
            echo "Jaja, leuk die f12. Volgens mij is het zo gefixed toch?<br>";
        }

        if(str_word_count(trim($remark)) < 5){
            $dataIsValid = false;
            echo "Het commentaar moet meer dan 5 woorden bevatten.<br>";
        }
        return $dataIsValid;
    }

    $dataIsValid = dataValidation($name, $email, $type, $remark, $globalEmail, $dataIsValid);

    function globalEmailOption($globalEmail){
        if($globalEmail){
            return "Alle gebruikers worden hier van op de hoogte gebracht.";
        }elseif(!$globalEmail){
            return "Alle gebruikers worden niet op de
        hoogte gebracht.";
        }else{
            return "Loop eens niet te klooien met die f12....";
        }
    }

    function displayText($name, $email, $type, $remark, $globalEmail){
        echo "
        Beste $name, <br>
        Je gaat commentaar plaatsen als $type met het volgende e-mailadres: $email.<br>
        Het commentaar is als volgt: $remark.<br>
        " . globalEmailOption($globalEmail) . "
        ";
        echo "<br>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
    <?php
        if($dataIsValid == true){
            displayText($name, $email, $type, $remark, $globalEmail);
        }
    ?>

    <a href="index.html">Ga terug</a>
</body>
</html>