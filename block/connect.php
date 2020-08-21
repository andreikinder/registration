<?php
try {
    $pdo = new PDO(
        'mysql:host=localhost;dbname=register',
        'root',
        '',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
}
catch (PDOException $e) {
    echo "Error to connect for database";
}
