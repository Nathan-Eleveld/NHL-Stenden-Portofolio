<?php
    if(file_exists(__DIR__ . '/../auth.php')) {
        require_once __DIR__ . '/../auth.php';
    } elseif(file_exists(__DIR__ . '/auth.php')) {
        require_once __DIR__ . '/auth.php';
    }

    function prepareStatement(){
        require_once("./../dbconnection/dbconnection.php");
        try{
            $stmt = $dbConnection->prepare(
            "
                SELECT *
                FROM `files`
            "
            );
            return $stmt;
        }catch(Exception $ex){
            die($ex->getMessage());
        }
    }

    function executeStatement(){
        $stmt = prepareStatement();
        $stmt->bindColumn("id", $id);
        $stmt->bindColumn("title", $title);
        $stmt->bindColumn("description", $description);
        $stmt->bindColumn("path", $path);
        $stmt->bindColumn("year", $year);
        $stmt->bindColumn("module", $module);

        $stmt->execute();

        while($result = $stmt->fetch()){
echo '
<div class="card">
    <!-- Klikbare content voor PDF -->
    <a href="/NHL-Stenden-Portofolio/portfolio-website/files/' . $path . '" 
       target="_blank" class="card-content-link">
        <h3>' . $title . '</h3>
        <p>' . $description . '</p>
    </a>

    <!-- Buttons onderin de card -->
    <div class="card-buttons-grid">
        <!-- Delete knop -->
        <form method="post" action="delete.php">
            <input type="hidden" name="id" value="' . $id . '">
            <button type="submit" class="delete-button">🞩 Delete</button>
        </form>

        <!-- Download knop -->
        <a href="/NHL-Stenden-Portofolio/portfolio-website/files/' . $path . '" 
           class="download-button" download>⬇ Download</a>

        <!-- Edit knop -->
        <form method="get" action="edit.php">
            <input type="hidden" name="id" value="' . $id . '">
            <button type="submit" class="edit-button">✎ Edit</button>
        </form>
    </div>
</div>
';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title class = "comp-title">Bestandsoverzicht</title>
</head>
<body>
    <div class="top">
        <h1>Bestandsoverzicht</h1>
        <a href="./fileUpload/form.php" class="add-button">Add a file</a>
    </div>
    <div class="content">
        <?php
            executeStatement();
        ?>
    </div>
</body>
</html>