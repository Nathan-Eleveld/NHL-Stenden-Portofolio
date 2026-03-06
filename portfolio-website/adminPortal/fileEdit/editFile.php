<?php
require_once("../../dbconnection/dbconnection.php");

// 1️⃣ Controleer dat ID in GET staat
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Ongeldig ID.");
}
$id = (int) $_GET['id'];

// 2️⃣ Controleer of het formulier verzonden is
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Velden uit POST
    $title = $_POST['title'] ?? '';
    $description = $_POST['description'] ?? '';
    $module = $_POST['module'] ?? '';
    $year = $_POST['year'] ?? '';

    // 3️⃣ Validatie
    $errors = [];
    if (empty($title)) $errors[] = "Titel mag niet leeg zijn.";
    if (empty($description)) $errors[] = "Omschrijving mag niet leeg zijn.";
    if (empty($module)) $errors[] = "Module mag niet leeg zijn.";
    if (empty($year) || !in_array($year, ['1','2','3','4'])) $errors[] = "Selecteer een geldig jaar.";

    if (empty($errors)) {
        try {
            // 4️⃣ Update statement
            $updateStmt = $dbConnection->prepare("
                UPDATE files
                SET title = :title,
                    description = :description,
                    module = :module,
                    year = :year
                WHERE id = :id
            ");

            $updateStmt->execute([
                'title' => $title,
                'description' => $description,
                'module' => $module,
                'year' => $year,
                'id' => $id
            ]);

            // 5️⃣ Succes → redirect
            header("Location: /NHL-Stenden-Portofolio/portfolio-website/adminPortal/");
            exit;

        } catch (PDOException $e) {
            // Fout bij database update
            $errors[] = "Fout bij updaten: " . $e->getMessage();
        }
    }
}

// 6️⃣ Als er fouten zijn, kun je ze eventueel tonen
if (!empty($errors)) {
    foreach ($errors as $error) {
        echo "<p style='color:red;'>" . htmlspecialchars($error) . "</p>";
    }
}