<?php
$database_host = 'localhost';
$database_port = '3306';
$database_dbname = 'projet';
$database_user = 'root';

$database_charset = 'UTF8';


$pdo = new PDO(
    'mysql:host=' . $database_host .
    ';port=' . $database_port .
    ';dbname=' . $database_dbname .
    ';charset=' . $database_charset,
    $database_user,
    
);

?>