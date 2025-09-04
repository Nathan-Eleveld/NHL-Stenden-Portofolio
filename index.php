<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dikke index pagina</title>
    <link rel="stylesheet" href="style.css">
</head>
<header>
    <H1>Dit is een dikke index pagina.</H1>
</header>
<body>
    <?php
        $map = "Opdrachten"; // pad naar de folder
        $bestanden = scandir($map);

        foreach ($bestanden as $bestand) {
            if ($bestand !== "." && $bestand !== "..") {
                echo $bestand . "<br>";
            }
        }
    ?>
</body>
</html>