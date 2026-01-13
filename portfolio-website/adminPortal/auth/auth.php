<?php

    if(isset($_SESSION["username"])){
        if($_SESSION["role"] === "Admin"){
            return true;
        }else{
            header("location: ../index.php");
        }
    }else{
        header("location: /NHL-Stenden-Portofolio/portfolio-website/login/login.php");
    }
?>