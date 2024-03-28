<?php 

$host = 'localhost';
$dbname = 'az';
$username = 'root';
$password = '123456789';


try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

} catch(PDOException $e) {
    
    echo $e->getMessage();
}