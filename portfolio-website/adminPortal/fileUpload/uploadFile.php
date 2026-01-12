<?php
    if($_FILES["uploadedFile"]["error"] == 0){
        if(!file_exists("upload/" . $_FILES["uploadedFile"]["name"])){
            if(move_uploaded_file($_FILES["uploadedFile"]["tmp_name"], "../../files/" . $_FILES["uploadedFile"]["name"])){
                header("location: ../../adminPortal/index.php");
            }else{
                echo "Something went wrong while uploading.";
                echo '<p><a href="../index.php">Er is iets mis gegaan klik hier om terug te gaan naar de index pagina.</a></p>';
            }
        }else{
            echo $_FILES["uploadedFile"]["name"] . " already exists. ";   
            echo '<p><a href="../index.php">Er is iets mis gegaan klik hier om terug te gaan naar de index pagina.</a></p>';    
        }
    }else{
        echo "Error: " . $_FILES["uploadedFile"]["error"] . "<br />";
        echo '<p><a href="../index.php">Er is iets mis gegaan klik hier om terug te gaan naar de index pagina.</a></p>';
    }
?>