<?php
    session_start();

    function checkAuth() {
        if(isset($_SESSION["username"])) {
            if($_SESSION["role"] === "Admin" || $_SESSION["role"] === "Professional skills docent"){
                return true;
            } else {
                header("Location: ../index.php");
                exit;
            }
        } else {
            header("Location: login/login.php");
            exit;
        }
    }
?>