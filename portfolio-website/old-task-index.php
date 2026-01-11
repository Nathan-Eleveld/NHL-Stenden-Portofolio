<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dikke index pagina</title>
    <link rel="stylesheet" href="old-task-style.css">
</head>
<header>
    <H1>Dit is een dikke index pagina.</H1>
</header>
<body>
    
    <main>

        <h1>Opdrachten</h1>
        <div class="card-list">

            <?php
                $baseFolder = "/opdrachten/leerjaar_1/periode_1/week-opdrachten";
                $baseFolder2 = "/opdrachten/leerjaar_1/periode_2/week-opdrachten";

                function getAllFiles($baseFolder) {
                    $map = dir(__DIR__ . $baseFolder);
                    $files = [];

                    while (($bestand = $map->read()) !== false) {
                        if ($bestand === '.' || $bestand === '..' || $bestand === 'img') continue;

                        $pad = $baseFolder . "/" . $bestand;

                        if (is_dir(__DIR__ . $pad)) {
                            $submap = dir(__DIR__ . $pad);
                            while (($subbestand = $submap->read()) !== false) {
                                if ($subbestand === '.' || $subbestand === '..' || $subbestand === 'img') continue;
                                $files[] = $pad . "/" . $subbestand;
                            }
                            $submap->close();
                        } else {
                            $files[] = $pad;
                        }
                    }

                    $map->close();
                    return $files;
                }
                
                $files = getAllFiles($baseFolder);
                $files2 = getAllFiles($baseFolder2);

                function createCard($files){
                    if(count($files) > 0){
                        foreach($files as $file){
                            $filename = basename($file);
                            
                            echo <<<HTML
                                <a href="/NHL-Stenden-Portofolio/portfolio-website$file">
                                    <div class="card">
                                        <img src="img\placeholder.png" alt="Placeholder img">
                                        <div class="card-content">
                                            <h3>$filename</h3>
                                            <p>mooie beschrijving</p>
                                        </div>
                                    </div>
                                </a>
                            HTML;
                        }
                    } else {
                    echo "files is leeg ja.";  
                    }
                }

            createCard($files);
            createCard($files2);

            ?>
        </div>
    </main>
</body>
</html>