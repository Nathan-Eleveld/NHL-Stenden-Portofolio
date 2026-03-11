<?php
    $config = require __DIR__ . '../../config/database.php';

    $dsn = "mysql:host={$config['host']};dbname={$config['dbname']};charset=utf8mb4";

    $dbConnection = new PDO(
        $dsn,
        $config['user'],
        $config['pass'],
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );
?>