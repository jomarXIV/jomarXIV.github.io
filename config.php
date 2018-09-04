<?php
    $host = 'localhost';
    $db   = 'employee';
    $user = 'root';
    $pass = '';

    try{
        $conn = new PDO("mysql:host={$host};dbname={$db}",$user,$pass);

    }catch(PDOException $e){
        echo "ERROR : ".$e->getMessage();
    }

?>