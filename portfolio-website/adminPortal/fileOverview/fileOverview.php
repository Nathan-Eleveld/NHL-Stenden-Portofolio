<?php
    if(file_exists(__DIR__ . '/../auth.php')) {
        require_once __DIR__ . '/../auth.php';
    } elseif(file_exists(__DIR__ . '/auth.php')) {
        require_once __DIR__ . '/auth.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bestandsoverzicht</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <div class="top">
        <h1>Bestandsoverzicht</h1>
        <a href="./fileUpload/form.php" class="add-button">Add a file</a>
    </div>
    <div class="content">
        
    </div>

</body>
</html>