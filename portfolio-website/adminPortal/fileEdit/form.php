<?php
    if(file_exists(__DIR__ . '/../auth.php')) {
        require_once __DIR__ . '/../auth.php';
    } elseif(file_exists(__DIR__ . '/auth.php')) {
        require_once __DIR__ . '/auth.php';
    }

    if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Ongeldig ID.");
    }

    $id = (int) $_GET['id'];

    $file = getFileById($id);

    if (!$file) {
        die("Bestand niet gevonden.");
    }

    function getFileById(int $id) {
        require_once("../../dbconnection/dbconnection.php");

        $stmt = $dbConnection->prepare("
            SELECT title, description, year, module
            FROM files
            WHERE id = :id
        ");

        $stmt->execute([
            'id' => $id
        ]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
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
    <form action="editFile.php?id=<?= $id ?>" method="post" enctype="multipart/form-data">
        <h2>Bestand bewerken</h2>

        <label for="title">Bestandsnaam:</label>
        <input type="text" name="title" id="title"
            value="<?= htmlspecialchars($file['title']) ?>">

        <label for="description">Omschrijving:</label>
        <textarea name="description" id="description"><?= htmlspecialchars($file['description']) ?></textarea>

        <label for="module">Module:</label>
        <input type="text" name="module" id="module"
            value="<?= htmlspecialchars($file['module']) ?>">

        <label for="year">Jaar:</label>
        <select name="year" id="year" class="form-select">
            <option value="">Kies een jaar</option>
            <option value="1" <?= $file['year'] == 1 ? 'selected' : '' ?>>Jaar 1</option>
            <option value="2" <?= $file['year'] == 2 ? 'selected' : '' ?>>Jaar 2</option>
            <option value="3" <?= $file['year'] == 3 ? 'selected' : '' ?>>Jaar 3</option>
            <option value="4" <?= $file['year'] == 4 ? 'selected' : '' ?>>Jaar 4</option>
        </select>

        <input type="submit" name="submit" value="Bevestig dat je het bestand wilt bijwerken">

        <p><a href="../index.php">Klik hier om terug te gaan naar het overzicht.</a></p>
    </form>
</body>
</html>