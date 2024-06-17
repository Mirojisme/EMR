<?php
$database_host = 'localhost';
$database_user = 'root';
$database_pass = '';
$database_name = 'richarda_digitalDB';
$charset = 'utf8mb4';

$dsn = "mysql:host=$database_host;dbname=$database_name;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $db = new PDO($dsn, $database_user, $database_pass, $options);
    
    
} catch (PDOException $e) {
    echo "Connection Failed" . $e->getMessage() . "";
}
?>