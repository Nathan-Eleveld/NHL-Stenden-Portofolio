<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $name = filter_input(INPUT_POST, "name");
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        $type = filter_input(INPUT_POST, "type");
        $remark = filter_input(INPUT_POST, "remark");
        $globalEmail = filter_input(INPUT_POST, "globalEmail");
    }

    function dataValidation($name, $email, $type, $remark, $globalEmail){
        if(){

        }

        if(empty($email)){
            return "VUL EEN EMAIL IN!!!!";
        }elseif(!$email){
            return "De email is ongeldig.";
        }

        if(!$type || $type !== "student" || $type !== "teacher"){
            return "Jaja, leuk die f12. Volgens mij is het zo gefixed toch?";
        }

        if(){

        }
    }

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
        displayText($name, $email, $type, $remark, $globalEmail);
    ?>

    <a href="index.html">Ga terug</a>
</body>
</html>