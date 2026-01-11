<?php
    $dbConnection = null;

    try{
        $dbConnection = new PDO("mysql:host=mysql;dbname=portfoliowebsite;charset=utf8", "root", "qwerty");
        return $dbConnection;
    }catch(Exception $ex){
        return $ex;
    }
?>