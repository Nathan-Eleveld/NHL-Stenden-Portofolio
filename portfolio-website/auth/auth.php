<?php
    if(!isset($_SESSION["username"])) {
        header("Location: /login/login.php");
        exit;
    }

    if($_SESSION["role"] !== "Admin" && $_SESSION["role"] !== "Professional skills docent"){
        header("Location: ../index.php");
        exit;
    }
?>