<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $title = filter_input(INPUT_POST, 'title');
        $description = filter_input(INPUT_POST, 'description');

        executeStatement($title, $description);
        header("location: /NHL-Stenden-Portofolio/portfolio-website/adminPortal/");
    }

    function uploadFileLocal(){
        if($_FILES["uploadedFile"]["error"] == 0){
            if(!file_exists("upload/" . $_FILES["uploadedFile"]["name"])){
                if(move_uploaded_file($_FILES["uploadedFile"]["tmp_name"], "../../files/" . $_FILES["uploadedFile"]["name"])){
                    return $_FILES["uploadedFile"]["name"];
                }else{
                    // $errors[] = "Something went wrong while uploading.";
                    return false;
                }
            }else{
                // $errors[] = $_FILES["uploadedFile"]["name"] . " already exists. ";
                return false;
            }
        }else{
            // $errors[] = "Error: " . $_FILES["uploadedFile"]["error"] . "<br />";
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

    function executeStatement($title, $description){
        $path = uploadFileLocal();
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