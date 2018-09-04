<?php
    include './config.php';

    $sql = "SELECT * FROM mock_data";
    $stmt = $conn->prepare($sql);
    
    if($stmt -> execute()){
        $employees = $stmt->fetchAll(PDO::FETCH_OBJ);
    }
?>