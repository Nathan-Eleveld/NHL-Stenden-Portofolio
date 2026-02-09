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

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $title = filter_input(INPUT_POST, 'title');
        $description = filter_input(INPUT_POST, 'description');

        executeStatement($title, $description, $fileSize, $acceptedFileTypes);
        header("location: /NHL-Stenden-Portofolio/portfolio-website/adminPortal/");
    }

    function uploadFileLocal($fileSize, $acceptedFileTypes){
        if($_FILES["uploadedFile"]["error"] == 0){
            if($_FILES["uploadedFile"]["size"] < $fileSize){

                $fileInfo = finfo_open(FILEINFO_MIME_TYPE);
                $uploadedFileType = finfo_file($fileInfo, $_FILES["uploadedFile"]["tmp_name"]);

                if(in_array($uploadedFileType, $acceptedFileTypes)){
                    if(!file_exists("upload/" . $_FILES["uploadedFile"]["name"])){
                        if(move_uploaded_file($_FILES["uploadedFile"]["tmp_name"], "../../files/" . $_FILES["uploadedFile"]["name"])){
                            return $_FILES["uploadedFile"]["name"];
                        }else{
                            // return "Something went wrong while uploading.";
                            return false;
                        }
                    }else{
                        // return $_FILES["uploadedFile"]["name"] . " already exists. ";
                        return false;
                    }
                }else{
                    // return "Invalid file type. Must be gif, jpg or jpeg.";
                    return false;
                }
            }else{
                // return "Invalid file size. Must be less than ". $fileSize/1024/1024 ."Mb.";
                return false;
            }
        }else{
            // return "Error: " . $_FILES["uploadedFile"]["error"] . "<br />";
            return false;
        }
    }

    function prepareStatement(){
        require_once("../../dbconnection/dbconnection.php");
        try{
            $stmt = $dbConnection->prepare(
            "
                INSERT INTO `files` (`id`, `title`, `description`, `path`)
                VALUES (NULL, :title, :description, :path);
            "
            );
            return $stmt;
        }catch(Exception $ex){
            die($ex->getMessage());
        }
    }

    function executeStatement($title, $description, $fileSize, $acceptedFileTypes){
        $path = uploadFileLocal($fileSize, $acceptedFileTypes);
        if($path != false){
            $stmt = prepareStatement();
            $stmt->execute([
                ':title' => $title,
                ':description' => $description,
                ':path' => $path
            ]);
            return "De upload was een succes.";
        }
    }
?>