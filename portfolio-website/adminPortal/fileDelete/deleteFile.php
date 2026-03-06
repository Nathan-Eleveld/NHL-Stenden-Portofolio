<?php
require_once("../../dbconnection/dbconnection.php");

// 1️⃣ ID ophalen uit POST (van het formulier)
if (!isset($_POST['id']) || !is_numeric($_POST['id'])) {
    die("Ongeldig ID.");
}
$id = (int) $_POST['id'];

// 2️⃣ Haal eerst het bestand op om de bestandsnaam/path te weten
$stmt = $dbConnection->prepare("
    SELECT `path`
    FROM files
    WHERE id = :id
");
$stmt->execute(['id' => $id]);
$file = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$file) {
    die("Bestand niet gevonden.");
}

// 3️⃣ Verwijder het bestand uit de map
$filePath = __DIR__ . "/../../files/" . $file['path'];
if (file_exists($filePath)) {
    if (!unlink($filePath)) {
        die("Kon het bestand niet verwijderen: " . htmlspecialchars($file['path']));
    }
}

// 4️⃣ Verwijder record uit database
$deleteStmt = $dbConnection->prepare("
    DELETE FROM files
    WHERE id = :id
");

try {
    $deleteStmt->execute(['id' => $id]);

    // 5️⃣ Succes → redirect
    header("Location: /NHL-Stenden-Portofolio/portfolio-website/adminPortal/");
    exit;

} catch (PDOException $e) {
    die("Fout bij verwijderen: " . $e->getMessage());
}