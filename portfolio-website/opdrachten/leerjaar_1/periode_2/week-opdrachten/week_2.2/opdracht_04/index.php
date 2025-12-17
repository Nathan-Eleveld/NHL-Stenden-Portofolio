<!-- 
    'name' => string 'Aanwezigheid Inf1A.xlsx' (length=23)
    'full_path' => string 'Aanwezigheid Inf1A.xlsx' (length=23)
    'type' => string 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' (length=65)
    'tmp_name' => string '/tmp/phpuk0vkcjsobrk9urfA0l' (length=27)
    'error' => int 0
    'size' => int 12700 
-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Overzicht</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="card-overview">
        <?php
            $fileLoc = '../opdracht_03/upload/';

            function getFiles($fileLoc){
                $files = scandir($fileLoc);
                foreach($files as $file){
                    if($file === '.' || $file === '..'){
                        continue;
                    }
                    $path = $fileLoc . $file;

                    echo "<div class='card'>";
                    echo "Naam: $file<br>";
                    echo "Type: " . mime_content_type($path) . "<br>";
                    echo "Grootte: " . filesize($path) . " bytes<br>";
                    echo "Laatst gewijzigd: " . date("d-m-Y H:i:s", filemtime($path)) . "<br><br>";
                    echo "</div>";
                }
            }

            getFiles($fileLoc);
        ?>
    </div>
</body>
</html>