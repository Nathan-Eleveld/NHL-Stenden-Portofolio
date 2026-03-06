<?php
    session_start();

    function checkAuth() {
        // gebruiker niet ingelogd
        if(!isset($_SESSION["username"])) {
            header("Location: login/login.php");
            exit;
        }

        // gebruiker ingelogd maar verkeerde rol (optioneel)
        if(isset($_SESSION["role"]) && !in_array($_SESSION["role"], ["Admin", "Professional skills docent"])) {
            header("Location: index.php");
            exit;
        }

        // alles ok
        return true;
    }
?>