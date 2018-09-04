<?php
    require 'config.php';

    if(isset($_SESSION['user_id']) ){
        
        $records = $conn->prepare('SELECT uid,username,password FROM employee_records WHERE uid = :id');
        $records->bindParam(':id', $_SESSION['user_id']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        $user = NULL;

        if( count($results) > 0){
            $user = $results;
        }
    }

?>