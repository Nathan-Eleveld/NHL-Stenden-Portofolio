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
    <title>Upload File</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="./uploadFile.php" method="post" enctype="multipart/form-data">
        <h2>Bestand uploaden</h2>
        <label for="title">Bestandsnaam:</label>
        <input type="text" name="title" id="title" placeholder="Bijv. Projectverslag">
        <label for="description">Omschrijving:</label>
        <textarea name="description" id="description" placeholder="Korte omschrijving van het bestand"></textarea>
        <label for="module">Module:</label>
        <input type="text" name="module" id="module" placeholder="Bijv. Web Development">
        <label for="year">Jaar:</label>
        <select name="year" id="year" class="form-select">
            <option value="">Kies een jaar</option>
            <option value="1">Jaar 1</option>
            <option value="2">Jaar 2</option>
            <option value="3">Jaar 3</option>
            <option value="4">Jaar 4</option>
        </select>
        <label for="file">Bestandsnaam:</label>
        <input type="file" name="uploadedFile" id="file">

        <input type="submit" name="submit" value="Bevestig dat je het bestand wilt toevoegen">
        <p><a href="../index.php">Klik hier om terug te gaan naar het overzicht.</a></p>
    </form>
</body>
</html>