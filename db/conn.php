<?php
//Development Connection
//$host = 'localhost';
//$db = 'attendance_db';
//$user = 'root';
//$pass = '';
//$charset = 'utf8mb4';


//Server Connection
$host = 'remotemysql.com';
$db = 'ERnUocKAZa';
$user = 'ERnUocKAZa';
$pass = 'oVL9si3vdm';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";


try{
    $pdo = new PDO($dsn, $user, $pass);
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    throw new PDOException($e->getMessage());
}


require_once 'crud.php';
$crud = new crud($pdo);
?>