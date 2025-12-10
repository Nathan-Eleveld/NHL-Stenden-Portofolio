<!-- 
Het bestand moet een afbeelding zijn van de .png, .jpeg, .jpg of .gif format.
Het bestand mag niet groter zijn dan 3MB.
De originele bestandsnaam mag niet langer zijn dan 50 characters en moet inieder geval
1 hoofdletter bevatten. 
-->


<?php
    $fileSize = (3*1024*1024); //3MB
    // var_dump($_FILES);

    if($_FILES["fileToUpload"]["error"] == 0){

        if($_FILES["fileToUpload"]["size"] < $fileSize){

            $acceptedFileTypes = ["image/png", "image/jpeg", "image/jpg", "image/gif"];

            $fileInfo = finfo_open(FILEINFO_MIME_TYPE);
            $uploadedFileType = finfo_file($fileInfo, $_FILES["fileToUpload"]["tmp_name"]);

            if(in_array($uploadedFileType, $acceptedFileTypes)){

                if(!file_exists("upload/" . $_FILES["fileToUpload"]["name"])){

                    if(strlen($_FILES["fileToUpload"]["name"]) < 50){

                        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "upload/" . $_FILES["fileToUpload"]["name"])){
                            echo "Upload: " . $_FILES["fileToUpload"]["name"] . "<br />";
                            echo "Type: " . $uploadedFileType . "<br />";
                            echo "Size: " . ($_FILES["fileToUpload"]["size"] / 1024) . " Kb<br />";
                            echo "Stored temporarily in: " . $_FILES["fileToUpload"]["tmp_name"] . "<br />";
                            echo "Stored permanently in: " . "upload/". $_FILES["fileToUpload"]["name"];
                        }

                    }else{
                        echo "File name is to long ";
                        echo strlen($_FILES["fileToUpload"]["name"]);
                    }

                }else{
                    echo "File already exists";
                }

            }else{
                echo "File extension is not allowed";
            }

        }else{
            echo "File to big";
        }

    }else{
        echo "Failed to upload file.";
    }
?>