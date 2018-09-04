<?php
    
    session_start();
    require 'function.php';

?>



<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Simple Application Form</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
    
    <header>
        <div class="header">
            <ul>
            <a href="index.php">Application Form</a>
            </ul>
        </div>
    </header>


    <?php if( !empty($user) ): ?>
        
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