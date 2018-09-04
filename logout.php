<?php
    
    session_start();
    require 'function.php';

?>

<!DOCTYPE html>
<html>
<head>
    <title>Log out</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/employee2/public/css/style1.css">
</head>
<body>

    <header>
        <div class="header">
            <ul>
            <a href="index.php" class = "log">Application Form</a>
            </ul>
        </div>
    </header>
    <br>
    <h2 class = "out">You Are Sucessfully logout !</h2>
    <br /><br />
    <?php header("refresh:2 url=index.php"); ?>
    <?php session_unset(); ?>
    <?php session_destroy();?>

</body>
</html>