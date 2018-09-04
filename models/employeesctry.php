<?php
    include './config.php';

    $sql = "SELECT * FROM mock_data WHERE country=:country";
    $stmt = $conn->prepare($sql);
    $stmt ->bindParam(":country", $country);
    if($stmt -> execute()){
        $rel_employees = $stmt->fetchAll(PDO::FETCH_OBJ);
    }