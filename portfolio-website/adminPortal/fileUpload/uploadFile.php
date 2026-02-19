<?php
    $fileSize = (10*1024*1024); // 10Mb
    $acceptedFileTypes = [
        'application/pdf',

        // Word
        'application/msword',
        'application/vnd.openxmlformats-officedocument.wordprocessingml.document',

        // Excel
        'application/vnd.ms-excel',
        'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',

        // PowerPoint
        'application/vnd.ms-powerpoint',
        'application/vnd.openxmlformats-officedocument.presentationml.presentation',
    ];

    $errors = [];

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $title = filter_input(INPUT_POST, 'title');
        $description = filter_input(INPUT_POST, 'description');
        $module = filter_input(INPUT_POST, 'module');
        $year = filter_input(INPUT_POST, 'year');

        validateYear($year);
        errorHandling();
        $result = executeStatement($title, $description, $fileSize, $acceptedFileTypes, $year, $module);

        if ($result === true) {
            header("location: /NHL-Stenden-Portofolio/portfolio-website/adminPortal/");
            exit;
        } else {
            echo "Upload mislukt.";
            echo '<a href="/NHL-Stenden-Portofolio/portfolio-website/adminPortal/">Ga terug naar admin portal</a>';
        }
    }

    function validateYear($year){
        if ($year === false || $year < 1 || $year > 4) {
            $errors[] = 'Selecteer een geldig jaar (1 t/m 4).';
        }
    }

    function errorHandling(){
        if (!empty($errors)) {
            echo '<div class="error-box">';
            echo '<h3 class="error-title">Er zijn fouten opgetreden</h3>';
            echo '<ul class="error-list">';

            foreach ($errors as $error) {
                echo '<li class="error-item">' . htmlspecialchars($error) . '</li>';
            }

            echo '</ul>';
            echo '</div>';
            exit;
        }
    }

    function uploadFileLocal($fileSize, $acceptedFileTypes){
        if($_FILES["uploadedFile"]["error"] == 0){
            if($_FILES["uploadedFile"]["size"] < $fileSize){

                $fileInfo = finfo_open(FILEINFO_MIME_TYPE);
                $uploadedFileType = finfo_file($fileInfo, $_FILES["uploadedFile"]["tmp_name"]);

                if(in_array($uploadedFileType, $acceptedFileTypes)){
                    if(!file_exists("../../files/" . $_FILES["uploadedFile"]["name"])){
                        if(move_uploaded_file($_FILES["uploadedFile"]["tmp_name"], "../../files/" . $_FILES["uploadedFile"]["name"])){
                            return $_FILES["uploadedFile"]["name"];
                        }else{
                            $errors[] = 'Something went wrong while uploading.';
                        }
                    }else{
                        $filename = $_FILES["uploadedFile"]["name"] ?? 'het bestand';
                        $errors[] = htmlspecialchars($filename) . 'bestaat al.';
                    }
                }else{
                    $errors[] = 'Invalid file type. Must be gif, jpg or jpeg.';
                }
            }else{
                $errors[] = 'Invalid file size. Must be less than ". $fileSize/1024/1024 ."Mb.';
            }
        }else{
            $errors[] = 'Je hebt pech. Hij dut nie.';
        }
    }

    function prepareStatement(){
        require_once("../../dbconnection/dbconnection.php");
        try{
            $stmt = $dbConnection->prepare(
            "
                INSERT INTO `files` (`id`, `title`, `description`, `path`, `year`, `module`)
                VALUES (NULL, :title, :description, :path, :year, :module);
            "
            );
            return $stmt;
        }catch(Exception $ex){
            die($ex->getMessage());
        }
    }

    function executeStatement($title, $description, $fileSize, $acceptedFileTypes, $year, $module){
        $path = uploadFileLocal($fileSize, $acceptedFileTypes);
        if($path != false){
            $stmt = prepareStatement();
            $stmt->execute([
                ':title' => $title,
                ':description' => $description,
                ':path' => $path,
                ':year' => $year,
                ':module' => $module
            ]);
            return true;
        }else{
            return false;
        }
    }
?>