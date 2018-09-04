<?php
    
    session_start();
    require 'function.php';

?>



<!DOCTYPE html>
<html>
<head>
    <title>Welcome to ABC Company</title>
    <link rel="stylesheet" href="http://localhost/employee2/assets/css/style2.css">
    
</head>
<body>
    
    <header>
        <div class="header">
            <ul>
            <a href="index.php">ABC Company</a>
            </ul>
        </div>
    </header>


    <?php if( empty($user) ): ?>
        
    <br />Welcome <?=$user['username']; ?>
        <br /><br />You are successfully logged in!
        <br /><br />
        <?php header("refresh:2  url = app_form.php"); ?>
        
    <?php else: ?>
    <h1>Please Login or Register</h1>
        <a href="login.php">Login</a> or
        <a href="register.php">Register</a>
         

    <?php endif; ?>
    

</body>
</html>