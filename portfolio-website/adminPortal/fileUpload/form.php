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
        <label for="file">Bestandsnaam:</label>
        <input type="file" name="uploadedFile" id="file">

        <input type="submit" name="submit" value="Bevestig dat je het bestand wilt toevoegen">
        <p><a href="../index.php">Klik hier om terug te gaan naar het overzicht.</a></p>
    </form>
</body>
</html>