<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 11</title>
</head>
<body>
    <main>
        <?php
            $date = "14062016";

            $splittedDate = DateTime::createFromFormat("dmY", $date);

            echo $splittedDate->format("Y-m-d"); // 2016-06-14
        ?>
    </main>
</body>
</html>