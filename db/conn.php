<?php 

     //Development Connection
    $host = '127.0.0.1';
    $db = 'attendance';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';


    // Remote Database connection
    $host = 'remotemysql.com';
    $db = 'UJOMy1A7kL';
    $user = 'UJOMy1A7kL';
    $pass = 'AFAN0PUHBp';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        
    } catch(PDOException $e) {
        throw new PDOException($e->getMessage());
    }
    require_once 'crud.php';
    require_once 'user.php';
    $crud = new crud($pdo);
    $user = new user($pdo);


    $user->insertUser("admin","password");
?>