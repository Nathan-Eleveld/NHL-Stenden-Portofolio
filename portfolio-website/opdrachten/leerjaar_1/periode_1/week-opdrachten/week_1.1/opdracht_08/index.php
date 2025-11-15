<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 8</title>
</head>
<body>
    <?php
        $left = 5;
        $right = 7;
        
        $temp = $left;
        $left = $right;
        $right = $temp;

        echo "left = $left";
        echo "<br>";
        echo "right = $right";
    ?>
</body>
</html>