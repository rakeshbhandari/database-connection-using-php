<?php 

$dsn = "mysql:host=localhost;dbname=firstdb";
$dbusername = "root";
$dbpassword = "";


try {
    //NOTE: PDO is a class that represents the connection between PHP and a database server.
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection Failed: " . $e->getMessage();
}